<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>listdata</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
	<body>
		<h1>listdata</h1>
		<ul>
		<?php foreach($data as $k=>$v):?>
		<li><?php echo $k; ?> is: <?php echo $v; ?></li>
		<?php endforeach;?>
		</ul>
	</body>
</html>