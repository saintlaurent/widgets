<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "widget_corp";

$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if(mysqli_connect_errno()){
    die("Database connections failed: " . mysqli_connect_errno());
}

$query = "";
require_once('../includes/functions.php');
include('../includes/layouts/header.php');
?>
<div id="main">
    <nav id="navigation">
        &nbsp;
    </nav>
    <div id="page">
        <h2>Manage Content</h2>


    </div>
</div>
<?php
include('../includes/layouts/footer.php');
?>