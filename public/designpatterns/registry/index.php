<?php
namespace Dp\Registry;
require_once '../init.php';
?>
<?php include "../htmlheader.php"; ?>
<h1>Registry sample</h1>

<h2>Initializing Registry object in index.php</h2>
<p> $registry = new Registry(); </p>

<?php $registry	= new Registry(); ?>

<h2>Setting values in another script in setter.php</h2>
<p> $registry->set('key_name', 'value_to_store'); </p>

<?php require_once 'setter.php'; ?>

<h2>Getting values in another script in getter.php</h2>
<p> $registry->get('key_name'); </p>

<?php require_once 'getter.php';?>

<p>done</p>
<?php include "../htmlfooter.php"; ?> 