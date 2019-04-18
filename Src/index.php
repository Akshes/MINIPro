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
//$obj = new bootstrap('../data/deniro.csv');

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

//phpinfo();
?>

</body>
</html>