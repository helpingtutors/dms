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
if(!isset($_SESSION)) {
    session_start();
}

require('config/config.php');
//include functions php file
include("functions.php");
// echo navigation bar
navigation_echo();
?>
<nav class="navbar navbar-light navbar-expand-sm">You are here: Home->Update Folder</nav>
<div class="container py-2 px-0">
    <div class="row">
        <div class="mx-right col-sm-4">

            <div class="card text-white bg-info ">
                <div class="card-header">
                    <h4 class="m-0">Add Folder</h4>
                </div>
                <div class="card-body">
                    <form id="addfolderform" name="addfolderform" role="form" action="" method="POST">

                        <div class="input-group mb-sm-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Folder Name</span>
                            </div>
                            <input class="form-control" type="text" placeholder="P2_F4 or P1_F8" id="foldername"
                                   name="foldername" required/>
                            <input type="hidden" id="action" name="action" value="add"/>
                        </div>

                        <div class="input-group mb-sm-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Folder Details</span>
                            </div>
                            <input class="form-control" type="text" placeholder="Land papers etc.," id="folderdetails"
                                   name="folderdetails" required/>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <div id="add_folder_msg"></div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" id="submit" name="submit" class="btn btn-success">Add Folder</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <div class="mx-right col-sm-4">

            <div class="card text-white bg-info ">
                <div class="card-header">
                    <h4 class="m-0">Delete Folder</h4>
                </div>
                <div class="card-body">
                    <form id="deletefolderform" name="deletefolderform" role="form" action="" method="POST">

                        <div class="input-group mb-sm-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Select Folder</span>
                            </div>
                            <select class="form-control" id="selectdeletefolder" name="selectdeletefolder" required>
                                <option value="">Select One</option>
                                <option value="1">Mathematics</option>
                                <option value="2">Physics</option>
                                <option value="3">Chemistry</option>
                                <option value="4">Science</option>
                                <option value="5">Engineering</option>
                            </select>
                            <input type="hidden" id="action" name="action" value="delete"/>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <div id="del_folder_msg"></div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" id="submit" name="submit" class="btn btn-success">Delete Folder</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <div class="mx-right col-sm-4">

            <div class="card text-white bg-info ">
                <div class="card-header">
                    <h4 class="m-0">Update Folder</h4>
                </div>
                <div class="card-body">
                    <form id="updatefolderform" name="updatefolderform" role="form" action="" method="POST">

                        <div class="input-group mb-sm-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Select Folder</span>
                            </div>
                            <select class="form-control" id="selectupdatefolder" name="selectupdatefolder" required>
                                <option value="">Select One</option>
                                <option value="1">Mathematics</option>
                                <option value="2">Physics</option>
                                <option value="3">Chemistry</option>
                                <option value="4">Science</option>
                                <option value="5">Engineering</option>
                            </select>
                            <input type="hidden" id="updatefolderid" name="updatefolderid" />
                            <input type="hidden" id="action" name="action" value="update"/>
                        </div>

                        <div class="input-group mb-sm-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Folder Name</span>
                            </div>
                            <input class="form-control" type="text" placeholder="P2_F4 or P1_F8" id="updatefoldername"
                                   name="updatefoldername" disabled required/>
                        </div>

                        <div class="input-group mb-sm-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Folder Details</span>
                            </div>
                            <input class="form-control" type="text" placeholder="Land papers etc.," id="updatefolderdetails"
                                   name="updatefolderdetails" disabled required/>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <div id="update_folder_msg"></div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="align-content-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-success">Update Folder</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>




    </div>









    <?php
    footer_echo();
    ?>
</div>


<script>
    $("#addfolderform").submit(function(ev) {
        ev.preventDefault();
        var foldername = $("#foldername").val();
        var folderdetails = $("#folderdetails").val();
        var url = 'folderdb.php';
        $.ajax({
            type: "POST",
            url: url,
            data: $("#addfolderform").serialize(),//{"foldername": foldername, "folderdetails": folderdetails},//"foldername="+foldername+"&folderdetails="+folderdetails,//{"foldername": foldername, "folderdetails": folderdetails},//"uid="+uid+"pwd="+pwd,
            success: function (response) {

                alert(response);
                var ret = JSON.parse(response);
                var retStatus = ret['RetStatus'];
                var html = ret['html'];
                var html1 = ret['html1'];
                $('#selectdeletefolder').html(html);
                $('#selectupdatefolder').html(html1);

                if (retStatus == 'Ok') {
                    $('#add_folder_msg').html('<font color="green">Success</font>').fadeIn('slow').fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000);
                } else {
                    $('#add_folder_msg').html('<font color="red">Failure</font>').fadeOut('slow').fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000);
                }
            },
            error: function() {
                alert("Bad submit");
            }
        });
    });
    $("#deletefolderform").submit(function(ev) {
        ev.preventDefault();
        var folderid = $("#selectdeletefolder").val();
        var url = 'folderdb.php';
        $.ajax({
            type: "POST",
            url: url,
            data: $("#deletefolderform").serialize(),//{"foldername": foldername, "folderdetails": folderdetails},//"foldername="+foldername+"&folderdetails="+folderdetails,//{"foldername": foldername, "folderdetails": folderdetails},//"uid="+uid+"pwd="+pwd,
            success: function (response) {

                alert(response);
                var ret = JSON.parse(response);
                var retStatus = ret['RetStatus'];
                var html = ret['html'];
                var html1 = ret['html1'];
                $('#selectdeletefolder').html(html);
                $('#selectupdatefolder').html(html1);

                if (retStatus == 'Ok') {
                    $('#del_folder_msg').html('<font color="green">Success</font>').fadeIn('slow').fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000);
                } else {
                    $('#del_folder_msg').html('<font color="red">Failure</font>').fadeOut('slow').fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000);
                }
            },
            error: function() {
                alert("Bad submit");
            }
        });
    });
    $("#selectupdatefolder").change(function(){
        var folderIdNameDetails = $("#selectupdatefolder").val();
        var splitdata = folderIdNameDetails.split('-');
        $('#updatefolderid').val(splitdata[0]);
        $('#updatefoldername').val(splitdata[1]);
        $('#updatefoldername').removeAttr('disabled');
        $('#updatefolderdetails').val(splitdata[2]);
        $('#updatefolderdetails').removeAttr('disabled');
        if (folderIdNameDetails == ''){
            $('#updatefoldername').attr('disabled',true);
            $('#updatefolderdetails').attr('disabled',true);
        }
    });
    $("#updatefolderform").submit(function(ev) {
        ev.preventDefault();
        var folderid = $("#updatefolderid").val();
        var url = 'folderdb.php';
        $.ajax({
            type: "POST",
            url: url,
            data: $("#updatefolderform").serialize(),//{"foldername": foldername, "folderdetails": folderdetails},//"foldername="+foldername+"&folderdetails="+folderdetails,//{"foldername": foldername, "folderdetails": folderdetails},//"uid="+uid+"pwd="+pwd,
            success: function (response) {

                alert(response);
                var ret = JSON.parse(response);
                var retStatus = ret['RetStatus'];
                var html = ret['html'];
                var html1 = ret['html1'];
                $('#selectdeletefolder').html(html);
                $('#selectupdatefolder').html(html1);

                if (retStatus == 'Ok') {
                    $('#update_folder_msg').html('<font color="green">Success</font>').fadeIn('slow').fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000);
                } else {
                    $('#update_folder_msg').html('<font color="red">Failure</font>').fadeOut('slow').fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000)
                        .fadeOut(1000)
                        .fadeIn(1000);
                }
            },
            error: function() {
                alert("Bad submit");
            }
        });
    });
</script>

</body>
</html>
