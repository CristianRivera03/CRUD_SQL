<?php 

    include('connection.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die("Query failed");
        }

        $_SESSION['message'] = "Task Removed Succesfully";
        $_SESSION['message_type'] = 'danger';
        header('Location: index.php');
    }
?>