<?php
namespace Dp\Composite;
require_once '../init.php';
?>
<?php include "../htmlheader.php"; ?>
	<h1>Composite sample</h1>
	
	<h2>Try to model the following structure</h2>
	<ul>
		<li>
			drink
			<ul>
				<li>
					alcohol
					<ul>
						<li>beer</li>
						<li>wine</li>
					</ul>
				</li>
				<li>
					non-alcohol
					<ul>
					<li>
						freash juice
						<ul>orange</ul>
						<ul>apple</ul>
					</li>
					<li>
						soda
						<ul>coca cola</ul>
						<ul>pepsi</ul>
					</li>
					<li>milk</li>
					</ul>
				</li>
			</ul>			
		</li>
	</ul>
	
	<h2>Now with PHP object structure</h2>
	<pre>
$drink		= new Folder('drink');
$alcohol	= new Folder('alcohol');
$nonalcohol	= new Folder('non alcohol');
$freashjuice	= new Folder('freash juice');
$soda		= new Folder('soda');

$beer		= new Tag('beer');
$wine		= new Tag('wine');
$orange		= new Tag('orange');
$apple		= new Tag('apple');
$cocacola	= new Tag('coca cola');
$pepsi		= new Tag('pepsi');
$milk		= new Tag('milk');

$alcohol->add($beer)->add($wine);
$freashjuice->add($orange)->add($apple);
$soda->add($cocacola)->add($pepsi);

$nonalcohol->add($freashjuice)->add($soda)->add($milk);
$drink->add($alcohol)->add($nonalcohol);
	</pre>
<?php
$drink	= new Folder('drink');
$alcohol	= new Folder('alcohol');
$nonalcohol	= new Folder('non alcohol');
$freashjuice	= new Folder('freash juice');
$soda	= new Folder('soda');

$beer	= new Tag('beer');
$wine	= new Tag('wine');
$orange	= new Tag('orange');
$apple	= new Tag('apple');
$cocacola	= new Tag('coca cola');
$pepsi	= new Tag('pepsi');
$milk	= new Tag('milk');

$alcohol->add($beer)->add($wine);
$freashjuice->add($orange)->add($apple);
$soda->add($cocacola)->add($pepsi);

$nonalcohol->add($freashjuice)->add($soda)->add($milk);
$drink->add($alcohol)->add($nonalcohol);
?>	

<h2>Outputting the structure</h2>
<pre>echo $drink->printFormat();</pre>
<?php echo $drink->printFormat(); ?>

<p>done</p>

<?php include "../htmlfooter.php"; ?> 