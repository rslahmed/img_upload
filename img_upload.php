<?php

$last_id = mysqli_insert_id($db);
$photo_name = "$last_id"."."."$photo_ext";

$update = "UPDATE profile SET img='$photo_name' WHERE id='$last_id'";
$connect_update = mysqli_query($db, $update);

move_uploaded_file($_FILES['photo']['tmp_name'], 'files/'.$photo_name);