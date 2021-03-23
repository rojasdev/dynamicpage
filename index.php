<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<?php require_once("pages/header.php"); ?>
<div id="main-contents">
        <h1>Hello World!</h1>
        <?php
            switch($page){
                case 'gallery':
                    require_once 'gallery.php';
                break; 
                case 'about':
                    require_once 'about.php';
                break; 
                case 'contact':
                    require_once 'contact.php';
                break; 
                default:
                    require_once 'main.php';
                break; 
            }
        ?>
</div>
<?php echo file_get_contents("pages/footer.php"); ?>
