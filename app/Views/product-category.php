<?php
$this->extend('_layout.php');
$this->section('content');
?>

<pre>
    <?php print_r($products); ?>
</pre>

<?php
$this->endSection();