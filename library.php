<?php
$module=$_REQUEST['module'];
$submodule=$_REQUEST['submodule'];
include_once "class/$module.php";
$class= new $module();
$class->$submodule();
?>