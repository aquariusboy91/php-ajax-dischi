<?php
include __DIR__ . '/../server/db.php';
?>

<!-- importiamo i dati dal db-->
<div class="img-cont">
    <?php foreach ($cards as $card) { ?>
        <div class="cards">
            <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-ajax-dischi/img/<?php echo $card['img'] ?>" class="img">
            <h3> <?php echo $card['title'] ?> </h3>
            <h4> <?php echo $card['artist'] ?> </h4>
            <p> <?php echo $card['data'] ?> </p>
        </div>
    <?php } ?>
</div>