<?php
$target_file = "../data/shoes.csv";
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($fileType === "csv") {
    if (move_uploaded_file($_FILES["fileUpload"]["name"], $target_file)) {
        header('Location: table.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Sorry, please upload '.csv' files";
}
?>