<?php
?>
<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php 

        if(isset($_SESSION['cart'])) {
            $cart = array_count_values(($_SESSION['cart']));
        }
                foreach ( $cart as $id => $index) 
                { ?>
                    <div><?=$catalog[$id]['name'];?></div>
            <?php }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>