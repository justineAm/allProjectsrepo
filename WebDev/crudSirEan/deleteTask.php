<?php
require_once "config.php";
if (isset($_GET['deleteId']) ){
    $id = $_GET['deleteId'];
    $query = "UPDATE todoTask SET deleted_at = 1 where task_id = $id";
    $query1 = mysqli_query($mysqli,$query);
    if(!$query1){
        echo '<div class="alert alert-danger"><em>Something Went wrong!</em></div>';
    }else{
    header("Location: http://localhost:8080/JustineAmbrad/Webdev/crudSirEan/index.php?task-deleted");
    }
}
?>

