<?php
    require 'function.php';

    // Variable untuk menampung id dari database
    $id = $_GET["id"];

    if(deleteData($id) > 0){
        echo "<script>
                alert('Succesfully Deleted Data');
                document.location.href='index.php';
                </script>";

    } else {
        echo "<script>
                alert('Failed to Delete Data');
                document.location.href='index.php';
                </script>";
    }
?>