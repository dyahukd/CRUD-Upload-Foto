<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'read';

switch ($page) {
    case 'add':
        include "add.php";
        break;
    case 'edit':
        include "edit.php";
        break;
    case 'read':
        include "read.php";
        break;
    default:
        include "read.php";
}
?>