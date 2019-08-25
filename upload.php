<?php
require 'db.php';


$name = $_POST['fname'];
$photo = "";


//form validation
if (empty($name)){
    echo "name error";
}else{
    require 'img_check.php';

    if (in_array($photo_ext, $accept_ext)) {
        $insert = "INSERT INTO profile (name) VALUE ('$name')";
        $connect_insert = mysqli_query($db, $insert);

        require 'img_upload.php';

    }else{
        echo "image error";
    }

}



?>

<img src="files/<?php echo $photo_name; ?>" alt="">


