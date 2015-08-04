<?php
namespace Dp\Adaptor;
require_once '../init.php';
?>
<?php include "../htmlheader.php"; ?>


<h1>Adaptor sample</h1>

<h2>Now, you are at home and going to have a dinner, and your options are:</h2>
<ul>
<li>cooking by yourself</li>
<li>take-out from a restaurant</li>
<li>going out to a restaurant</li>
</ul>

<h2>Initiating Dinner</h2>
<p>$dinner = new Dinner();</p>
<?php $dinner = new Dinner(); ?>

<h2>What type of foods?</h2>
<p>$dinner->setType('Japanese');</p>
<?php $dinner->setType('Japanese'); ?>	

<h2>Your budget?</h2>
<p>$dinner->setBudget(10000);</p>
<?php $dinner->setBudget(10000); ?>	

<h2>Setting an Adaptor of your choice</h2>
<p>$dinner->setAdaptor(new DinnerAdaptorGoOut());</p>
<?php $dinner->setAdaptor(new DinnerAdaptorCook()); ?>

<h2>Now let's get moving!</h2>
<p>$dinner->moveNow();</p>
<?php $dinner->moveNow(); ?>

<p>done</p>
</body>

<?php include "../htmlfooter.php"?>