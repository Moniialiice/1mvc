<?php
require("template/header.php");
require("template/menu.php");

require("clases/Questionario.php");
require("bd/bd.php");
?>
<div class="container">'
    <h1 class="page-header"></h1>
    <?php
    require_once ('helpers.php');
    if (empty($_GET['url']))

        $_GET['url']='home';
    controller($_GET['url']);
    ?>

</div>

<?php
require("template/footer.php");
?>

