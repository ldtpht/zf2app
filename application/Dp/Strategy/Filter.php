<?php
namespace Dp\Strategy;

class Filter
{
	const FILTER_UPPER = 'filterUpper';
	const FILTER_LOWER = 'filterLower';
	const FILTER_TAGS  = 'filterTags';
	
	protected $strategy	= null;
	
	protected $strategies	= array(
			self::FILTER_UPPER	=> '\\Dp\\Strategy\\FilterStrategyUpper',
			self::FILTER_LOWER	=> '\\Dp\\Strategy\\FilterStrategyLower',
			self::FILTER_TAGS	=> '\\Dp\\Strategy\\FilterStrategyTags'
	);
	
	public function __construct($strategyParam)
	{
		$strategy	= new FilterStrategyUpper();
		$this->setStrategy($strategyParam);
	}
	
	public function setStrategy($strategyParam)
	{
		$strategyClassname	= $this->strategies[$strategyParam];
		$this->strategy	= new $strategyClassname;
		return $this;
	}
	
	public function apply($text)
	{
		return $this->strategy->apply($text);
	}
}