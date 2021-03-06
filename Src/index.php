<?php
namespace Akshes;
require_once '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSV Import</title>
</head>
<body>
<?php
//$obj = new bootstrap('../data/shoes.csv');

use Akshes\db\SQLiteConnection;
$pdo = (new SQLiteConnection())->connect();
if ($pdo != null)
    echo 'Connected to the SQLite database successfully!';
else
    echo 'Whoops, could not connect to the SQLite database!';

$stmt = $pdo->prepare('SELECT * FROM contacts');
$stmt->execute();
$contacts = $stmt->fetchObject();

print_r($contacts)

$title = "Mini Project 2";
include("header.php");
?>
<div class="container">
    <div class="row">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <p>Select the .csv file you want to upload:</p>
            <div>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <br>
            <input type="submit" value="Upload File" name="submit">
        </form>
    </div>
</div>
/*
new bootstrap('../data/file.csv');

phpinfo();
*/
?>
</body>
</html>

</html>