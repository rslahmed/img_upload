<?php

$photo = $_FILES['photo']['name'];
$photo_size = $_FILES['photo']['size'];
$photo_name_imp = explode('.', $photo);
$photo_ext = end($photo_name_imp);
$accept_ext = ['jpg', 'jpeg', 'png'];