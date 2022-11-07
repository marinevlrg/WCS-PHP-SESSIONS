<?php
require 'inc/head.php';
require 'inc/data/products.php';

session_start();

if (!isset($_SESSION['name'])) {
    header('Location:login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <h2>Your shopping cart:</h2>
        <?php
        if (isset($_SESSION['cart']))
            foreach ($catalog as $key => $cookie) :
                foreach ($_SESSION['cart'] as $cookieId) :
                    if ($key == $cookieId) {
                        ?><li><?= $cookie['name'] ?></li><?php
                    } else {
                        echo '';
                    }
                endforeach;
            endforeach;
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>