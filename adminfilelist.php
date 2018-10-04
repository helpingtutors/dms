<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ristorante Con Fusion: About Us</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<style>
    body {
        background: linear-gradient(to bottom, #4BC0C8, #C779D0, #FEAC5E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
</style>
<body class="py-5">
<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['uid'])) {
    exit;
}
require('config/config.php');
//include functions php file
include("functions.php");
// echo navigation bar
navigation_echo();
?>
<nav class="navbar navbar-light navbar-expand-sm">You are here: Home->Admin File List</nav>
<div class="container">

    <div class="row">
        <div class="col-2"></div>

        <div class="col-8">
            <div class="card text-white bg-info ">
                <div class="card-header">
                    <h4 class="m-0">All users files</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" method="POST">
                        <table align="center" class="table-responsive-sm " border="1">
                            <thead>
                            <th>Sl. No.</th>
                            <th>File Name</th>
                            <th>Description</th>
                            <th>Folder</th>
                            <th>Modified Date</th>
                            </thead>
                            <tbody id="myTable">
                            <tr><td>1</td><td>Engg_Maths.docx</td><td>Mathematics</td><td>Maths</td><td>29/09/1985</td></tr>
                            <tr><td>2</td><td>Engg_Physics.docx</td><td>Physics</td><td>Physics</td><td>29/09/1985</td></tr>
                            <tr><td>3</td><td>Engg_Chemistry.docx</td><td>Chemistry</td><td>Chemistry</td><td>29/09/1985</td></tr>
                            <tr><td>3</td><td>Arts.docx</td><td>Arts</td><td>Art</td><td>29/09/2017</td></tr>
                            <tr><td>3</td><td>Medicine.docx</td><td>Medicine</td><td>Medicine</td><td>29/09/2018</td></tr>
                            <tr><td>3</td><td>Sports.docx</td><td>Sports</td><td>Sports</td><td>29/09/2015</td></tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    <?php
    footer_echo();
    ?>
</div>



</body>
</html>
