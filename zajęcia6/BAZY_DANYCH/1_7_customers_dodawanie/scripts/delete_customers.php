<?php
require_once("../scripts/connect.php");
if (isset($_GET['id'])) {
    $sql = "DELETE FROM customers WHERE customers.id = $_GET[id]";
    $connect->query($sql);

    if (($connect->affected_rows)) {
        $count = $connect->affected_rows;
        header("location: ../site/klienci_usuwanie.php?customers_delete=$count");
        exit();
    } else{
        header("location: ../site/klienci_usuwanie.php?customers_delete=0");
        exit();
    }
}

header('location: ../site/klienci_usuwanie.php');
?>