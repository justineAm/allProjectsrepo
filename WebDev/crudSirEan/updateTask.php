<?php
require_once "config.php";
if(isset($_POST['update'])){
    $task_title = $mysqli->real_escape_string($_POST['task_title']);
    $task_content = $mysqli->real_escape_string($_POST['task_content']);
    $id = $_POST['task_id'];
    $query1 = " UPDATE todoTask SET task_title = '$task_title', task_content = '$task_content' where task_id = '$id'";
    $query2 = mysqli_query($mysqli,$query1);
    if(!$query2){
        echo '<div class="alert alert-danger"><em>Update task failed!</em></div>';
        echo $id;
    }else{
        header('location: ./index.php');
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET['updateId'])) {
    $id = $_GET['updateId'];
    $sql = "SELECT * from todoTask where task_id =$id ";

    if ($result = $mysqli->query($sql)) {
        if ($result->num_rows > 0) {

            $row = mysqli_fetch_array($result)

            ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-6">Update Task</h2>
                    <p>Please fill up this form</p>
                    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
                        <div class="form-group">
                            <label>Task Title</label>
                            <input type="text" name="task_title" class="form-control <?php echo (!empty($title_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $row['task_title']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Task Content</label>
                            <input type="text" name="task_content" class="form-control <?php echo (!empty($content_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $row['task_content']; ?>">
                            <input type="hidden" name="task_id" class="form-control" value="<?php echo $row['task_id']; ?>">
                        </div>
                        <input type="submit" name="update"class="btn btn-primary" value="update">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php

        
        }
    }
    
}
$mysqli->close();
?>
</body>
</html>