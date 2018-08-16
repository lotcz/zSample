<h2><?=$this->t('This is <strong>zEngine</strong> sample app.') ?></h2>

<p>
	<?=$this->t('This app is basic test and showcase of <strong>zEngine</strong> features.') ?>
</p>

<?php

$unique_string = str_replace(".", "", strtoupper(uniqid(uniqid(uniqid(), true), true))) ;
echo $unique_string . '<br/>';
$unique_string = str_replace(".", "", strtoupper(uniqid(uniqid(uniqid(), true), true))) ;
echo $unique_string . '<br/>';
$unique_string = str_replace(".", "", strtoupper(uniqid(uniqid(uniqid(), true), true))) ;
echo $unique_string . '<br/>';
?>
