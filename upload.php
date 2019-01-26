<?php

if (isset($_POST)) {
    $ext = explode('.', $_FILES['file']['name'])[1];
    $fname = $_POST['filename'].'.'.$ext;
    if (move_uploaded_file($_FILES['file']['tmp_name'], $_POST['dest'].$fname)) {
        echo 'File upload successful!';
    } else {
        echo 'File upload fail, try again later';
    }
}
