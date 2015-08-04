<?php
namespace Dp\Observer;
require_once '../init.php';
?>
<?php include "../htmlheader.php"; ?>
<h1>Observer sample</h1>

<p>Creating Envrionment Object</p>
<pre>$env	= new Environment();</pre>
<?php
$env	= new Environment();
?>

<p>Creating Event Handler Objects, and attaching them to Environment Object</p>
<pre>
$tempSensor	= new SensorTemperature(0, 40);
$humdSensor	= new SensorHumidity(30, 80);
$env->attach($tempSensor);
$env->attach($humdSensor);
</pre>
<?php
$tempSensor	= new SensorTemperature(0, 40);
$humdSensor	= new SensorHumidity(30, 80);
$env->attach($tempSensor);
$env->attach($humdSensor);
?>

<p>Setting current status</p>
<p>iterating current environment stataus, temperature from -10 to 50, and humidity from 20 - 90</p>
<pre>
for($t = -10; $t <= 50; $t++)
{
	for($h=20; $h <= 90; $h++)
	{
		printf('current temperature: %d / humidity %d', $t, $h);
		$env->setStatus($t, $h)->notify();
	}
}
</pre>
<?php
for($t = -10; $t <= 50; $t++)
{
	for($h=20; $h <= 90; $h++)
	{
		printf('<p class="text-danger">current temperature: %d / humidity %d <p>', $t, $h);
		$env->setStatus($t, $h)->notify();
	}
}
?>

<?php include "../htmlfooter.php"; ?>