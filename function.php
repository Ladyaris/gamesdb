<?php
    $conn = mysqli_connect("localhost", "root", "", "gamesdb");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function addData($data){
        global $conn;
        $name = htmlspecialchars($data["name"]);
        $released = htmlspecialchars($data["released"]);
        $genre = htmlspecialchars($data["genre"]);
        $ratings = htmlspecialchars($data["ratings"]);
        $platform = htmlspecialchars($data["platform"]);
        $images = htmlspecialchars($data["images"]);

        $query = "INSERT INTO games VALUES('', '$name', '$released', '$genre', '$ratings', '$platforms', '$images')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function deleteData($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM games WHERE id = $id");

        return mysqli_affected_rows($conn);
    }
    
?>
