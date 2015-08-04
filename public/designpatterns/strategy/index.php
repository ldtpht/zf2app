<?php
namespace Dp\Strategy;
require_once '../init.php';


$text	= 'The quick <strong>BROWN</strong> fox jumps over the <span style="color: red; font-size: 200%">lazy DOG</span>'

?>
<?php include "../htmlheader.php"; ?>

<h1>Strategy Samples</h1>
<h2>The original text is:</h2>
<pre>
<?php echo $text; ?>
</pre>

<?php
	$filter	= new Filter(FILTER::FILTER_UPPER);
?>

<h2>Now applying filter: "UPPER CASE" ...</h2>
<pre>
<?php echo $filter->apply($text); ?>
</pre>

<h2>Now applying filter: "lower case" ...</h2>
<pre>
<?php echo $filter->setStrategy(FILTER::FILTER_LOWER)->apply($text); ?>
</pre>

<h2>Now applying filter: "stripping tags" ...</h2>
<pre>
<?php echo $filter->setStrategy(FILTER::FILTER_TAGS)->apply($text); ?>
</pre>
		
<?php include "../htmlfooter.php"; ?> 