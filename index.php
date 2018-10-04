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

<body>

<?php
if(!isset($_SESSION)) {
    session_start();
}
include("functions.php");
// echo navigation bar
navigation_echo();
?>
<nav class="navbar navbar-light navbar-expand-sm">You are here: Home</nav>

<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm" role="content">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title align-content-center">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-industry text-info"></i></div>
                            </div>
                            <select class="form-control" id="toapp">
                                <option value="placement">Placement</option>
                                <option value="tt">Other</option>
                            </select>
                        </div>
                    </div>

                    <!--Body-->
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user-circle text-info"></i></div>
                            </div>
                            <input type="text" class="form-control" id="frmuser" name="frmuser" placeholder="Username" tabindex="1" autocomplete="off" required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user-secret text-info"></i></div>
                            </div>
                            <input type="text" class="form-control" placeholder="enter password" tabindex="2" id="frmpass" name="frmpass" readonly required></input>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                            </div>
                            <input type="text"  class="form-control" id="first_name" name="first_name"  readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                            </div>
                            <input type="email" class="form-control" id="email" name="email" readonly/>
                        </div>
                    </div>


                </form>
            </div>

            <div class="modal-footer">
                <h4 class="modal-title text-white">Press Tab to login</h4>
            </div>
        </div>
    </div>
</div>

<div id="reserveModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Reserve a Table</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group input-group">
                            <div class="input-group-prepend col-sm-2">
                                <label for="num_guests">Number of guests</label>
                            </div>
                            <div class="col-12 col-sm-auto">
                                <div id="num_guests" class="input-group">
                                    <input class="form-control form-control-sm ml-1" type="radio" id="num_guests1"
                                           value="1"
                                           name="num_guests"/>
                                    1<input class="form-control form-control-sm ml-1" type="radio" id="num_guests2"
                                            value="2" name="num_guests"/>
                                    2<input class="form-control form-control-sm ml-1" type="radio" id="num_guests3"
                                            value="3" name="num_guests"/>
                                    3<input class="form-control form-control-sm ml-1" type="radio" id="num_guests4"
                                            value="4" name="num_guests"/>
                                    4<input class="form-control form-control-sm ml-1" type="radio" id="num_guests5"
                                            value="5" name="num_guests"/>
                                    5<input class="form-control form-control-sm ml-1" type="radio" id="num_guests6"
                                            value="6" name="num_guests"/>
                                    6
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group input-group">
                            <div class="input-group-prepend col-sm-2">
                                <label for="section1">Section</label>
                            </div>
                            <div class="col-12 col-sm-auto">
                                <div class="btn-group btn-group-toggle " data-toggle="buttons">
                                    <label class="btn btn-success active">
                                        <input type="radio" class="active" name="section" id="section1" autocomplete="off" checked>
                                        Non-Smoking
                                    </label>
                                    <label class="btn btn-danger">
                                        <input type="radio" name="section" id="section2" autocomplete="off"> Smoking
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group input-group">
                            <div class="input-group-prepend col-sm-2">
                                <label for="datetime">Date and Time</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div id="datetime" class="input-group">
                                    <input class="form-control form-control-sm mr-3" type="date" id="date" name="date"
                                           placeholder="Date"
                                           required>
                                    <input class="form-control form-control-sm" type="time" id="time" name="time"
                                           placeholder="Time"
                                           required>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-12 col-sm-auto">
                            <button type="button" class="btn btn-secondary btn-sm ml-2" data-dismiss="modal">Cancel
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm">Reserve</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<header class="jumbotron">
    <div class="container">
        <div class="row row-header">
            <div class="col-12 col-sm-6">
                <h1>Document Management System</h1>
                <p>A document management system (DMS) is a system (based on computer programs in
                    the case of the management of digital documents) used to track, manage and store
                    documents and reduce paper. Most are capable of keeping a record of the various
                    versions created and modified by different users (history tracking).</p>
                <br><br><br>
                <p>
                    Click on the above menu for various features of this project.
                    Some links in the menu are only accessible to Admininstrators.
                </p>
            </div>

        </div>
    </div>
</header>

<div class="container">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#mycarousel').carousel({interval:1});
            $('#carouselButton').click(function () {
                if ($('#carouselButton').children('span').hasClass('fa-pause')){
                    $('#mycarousel').carousel('pause');
                    $('#carouselButton').children('span').removeClass('fa-pause').addClass('fa-play');
                }
                else{
                    $('#mycarousel').carousel('cycle');
                    $('#carouselButton').children('span').removeClass('fa-play').addClass('fa-pause');
                }
            });
            /* jQuery to show the Reserve modal*/
            $('#reserveButton').click(function () {

                $('#reserveModal').modal('show');

            });
            /* jQuery to show the login modal*/
            $('#loginButton').click(function () {

                $('#loginModal').modal('show');

            });

            /*$('#carousel-pause').click(function () {
                $('#mycarousel').carousel('pause');
            });

             $('#carousel-play').click(function () {
                 $('#mycarousel').carousel('cycle');
             });
             */

        });

        /*  TOOLTIP and other scripts are not needed for Assignment 3
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        })

        $('#reserveform').submit(function () {
            var num_guests = $('[name="num_guests"]').val();
            alert('Reserved ' + num_guests + ' seats on ' + $('#date').val() + ' ' + $('#time').val());
        });
        */
    </script>

    <script>
        $(document).ready(function(){

        });
        $("#frmuser").change(function() {
            var uid = $("#frmuser").val();
            var pwd = $("#frmpass").val();
            var toapp = $('#toapp').val();
            //if(toapp=='dms'){
                var url = "getuserdetails.php";
            //}
            //else if (toapp=='tt'){
            //    var url = "../collegett/getuserdetails.php"
            //}
            $.ajax({
                type: "POST",
                url: url,
                data: {"uid": uid, "pwd": pwd},//"uid="+uid+"pwd="+pwd,
                success: function (response) {
                    alert(response);
                    var ret = JSON.parse(response);
                    var retStatus = ret['RetStatus'];
                    if (retStatus == 'Ok') {
                        $("#first_name").val(ret['Name']);
                        $("#email").val(ret['Email']);
                        $('#frmuser').attr('readonly', 'readonly');
                        $('#toapp').attr('disabled', 'disabled');
                        $('#frmpass').removeAttr('readonly');
                        $('#frmpass').attr('type', 'password');

                        //    console.log("Count:" + ret['Query']);
                    } else {
                        $("#first_name").val("Record not found");
                        $("#email").val("Record not found");
                        $("#frmuser").focus();
                    }
                }
            });
        });
        $("#frmpass").change(function() {
            var email = $("#email").val();
            var pwd = $("#frmpass").val();
            var toapp = $('#toapp').val();
            //if(toapp=='dms'){
                var url = "getuserdetails.php";
            //}
            //else if (toapp=='tt'){
            //    var url = "../collegett/getuserdetails.php"
            //}
            $.ajax({
                method: "POST",
                url: url,
                data: {"email":email,"pwd":pwd},
                success: function (msg) {
              //      alert(msg);
                    var ret = JSON.parse(msg);
                    var retStatus = ret['RetStatus'];
                    if (retStatus == 'Ok') {
// To include the information related to next action         ****console.log("Count:" + ret['Count']);
                //        if(toapp=='dms'){
                            window.location.href = toapp + ".php";
                //        }
                //        else if (toapp=='tt'){
                //            window.location.href = "other.php";
                //        }


                    } else {
                        $("#frmpass").val('');
                        $('#frmpass').attr('placeholder', 'INVALID .. try again');
                        //$('#frmpass').attr('style','color: red');
                        $("#frmpass").focus();
                    }
                }
            });
        });
    </script>
    <?php
    footer_echo();
    ?>
</div>
</body>

</html>
