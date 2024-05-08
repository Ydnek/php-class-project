<?php 
    include 'db_con.php';
    if(isset($_GET['ID'])){
        $id = $_GET['ID'];
        $sql = "DELETE FROM form_data WHERE id=$id";

        $result = mysqli_query($conn,$sql);
        if ($result) {
            header("Refrshe");
            echo "Delete Successfull";
            header('Location: admin.php?error = Delete Successfull');
            exit();
        }
        else{
            header('Location: admin.php?error= Delete UNSuccessfull');
            exit();
        }
    }
?>