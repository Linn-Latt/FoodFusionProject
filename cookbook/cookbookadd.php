<?php

    include("../connect.php");
    $recipename = $_POST['recipename'];
    $description = $_POST['description'];
    $cuisine = $_POST['cuisine'];
    $difficulty = $_POST['difficulty'];
    $dietary = $_POST['dietary'];

    $recipephoto = $_FILES['recipephoto']['name'];
    $tmp = $_FILES['recipephoto']['tmp_name'];

    if($recipephoto)
    {
        move_uploaded_file($tmp, "./tempimages/$recipephoto");
    }

    $sql = "INSERT INTO cookbook(recipe_name, cuisine_id, difficulty_id, dietary_id, created_date, recipe_pic, description) 
            VALUES('$recipename', '$cuisine', '$difficulty', '$dietary', now(), '$recipephoto', '$description')";
    mysqli_query($conn, $sql);
    header("location: recipe.php");

?>