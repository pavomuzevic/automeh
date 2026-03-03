<?php
include 'db.php';

if(isset($_GET['id'])) {
    $id = intval($_GET['id']);

    if($conn->query("DELETE FROM rezervacije WHERE id=$id")) {
        echo "success";
    } else {
        echo "error";
    }
}
?>