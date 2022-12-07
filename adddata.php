<?php
    require 'function.php';

    if (isset($_POST["submit"])){
        if(addData($_POST) > 0){

            echo "<script>
                alert('Data succesfully added');
                document.location.href='index.php';
                </script>";

            // echo "Data berhasil ditambahkan";
        } else {

            echo "<script>
                alert('Failed to add data');
                document.location.href='index.php';
                </script>";

            // echo "Data gagal ditambahkan";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Games Data</title>
</head>
<body>
    <h1>Add Games Data</h1>

    <form action ="<?php $_SERVER["PHP_SELF"]?>"method="post">
    Name: <input type="text" name="name" required>
    <br><br>
    Released Date: <input type="text" name="released" required>
    <br><br> 
    Genre: <input type="text" name="genre" required>
    <br><br> 
    Most Ratings: <input type="text" name="ratings" required>
    <br><br>
    Platform: <input type="text" name="platform" required>
    <br><br>
    Image : <input type="text" name="images" required>
    <br><br>
    <button type ="submit" name="submit">Add Data </button>
    
</body>
</html>