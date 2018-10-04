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
<nav class="navbar navbar-light navbar-expand-sm">You are here: Home->Upload File</nav>
<div class="container">

    <div class="row">
        <div class="col-4"></div>

        <div class="col-4">
            <div class="card text-white bg-info ">
                <div class="card-header">
                    <h4 class="m-0">Upload File</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" method="POST">

                        <div class="input-group mb-sm-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Select the file</span>
                                </div>
                                <input class="form-control" type="file" name="upload" id="upload"
                                       required/>
                        </div>
                        <div class="input-group mb-sm-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Select the Folder</span>
                            </div>
                            <select class="form-control" id="folder" name="folder" required>
                                <option value="">Select</option>
                                <option value="engg">Engineering</option>
                                <option value="maths">Mathematics</option>
                                <option value="physics">Physics</option>
                            </select>
                        </div>
                        <button class="btn btn-success" type="button" value="Submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
    <?php
    footer_echo();
    ?>

</div>


</body>
</html>
