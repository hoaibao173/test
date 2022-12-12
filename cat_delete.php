<?php 
include './config.php';
include './function.php';
spl_autoload_register('loadClass');
$id=isset($_GET['id'])?$_GET['id']:'';
$o=new Category();
$o->delete($id);
header('location:cat.php');
?>