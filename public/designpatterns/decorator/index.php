<?php
namespace Dp\Decorator;
require_once '../init.php';
?>

<?php include "../htmlheader.php"; ?>

<h1>Decorator sample</h1>

<h2>We try a lot of html markups</h2>
<pre>
$text	= new Text('Hello World');
</pre>
<?php
	$text	= new Text('Hello World');
?>
<hr>
<h3>Plain output</h3>
<pre>
echo htmlentities($text);
</pre>
<?php echo $text; ?>

<hr>
<h3>Format as <i>Italic</i> style</h3>
<pre>
$italic = new ItalicDecorator($text);
echo $italic ;
</pre>
<?php
	$italic = new ItalicDecorator($text);
	echo $italic;
	echo htmlentities($italic);
?>

<hr>
<h3>Wrapping by DIV tag</h3>
<pre>
$div	= new DivDecorator($text);
echo $div;
</pre>
<?php
	$div	= new DivDecorator($text);
	echo $div;
	echo htmlentities($div);
?>

<hr>
<h3>Wrapping by DIV tag with a title</h3>
<pre>
$div	= new DivDecorator($text);
$div->setTitle('Greeting!');
echo $div;
</pre>
<?php
	$div	= new DivDecorator($text);
	$div->setTitle('Greeting!');
	echo $div;
	echo htmlentities($div);
?>

<hr>
<h3>italic text Wrapping by Div tag with a title</h3>
<pre>
$italic	= new ItalicDecorator($text);
$div	= new DivDecorator($italic);
$div->setTitle('Greeting Again!');
echo $div;
</pre>
<?php
	$italic	= new ItalicDecorator($text);
	$div	= new DivDecorator($italic);
	$div->setTitle('Greeting Again!');
	echo $div;
	echo htmlentities($div);
?>

<p>done</p>

<?php include "../htmlfooter.php"; ?> 