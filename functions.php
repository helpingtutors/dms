<?php
function navigation_echo()
{
    echo '<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div id="Navbar" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php"><span class="fa fa-home"></span>Home</a>
                </li>
                <li>
                    <a class="nav-link" href="uploadfile.php"><span class="fa fa-upload fa-lg"></span> Upload File</a>
                </li>
                <li>
                    <a class="nav-link" href="userfilelist.php"><span class="fa fa-info"></span> User</a>
                </li>
                <li>
                    <a class="nav-link" href="adminfilelist.php"><span class="fa fa-list fa-lg"></span> Admin</a>
                </li>
                <li>
                    <a class="nav-link" href="folder.php"><span class="fa fa-folder fa-lg"></span> Folder</a>
                </li>
                 
            </ul>
            <span class="navbar-text">
                <a role="button" class="btn" id="loginButton">';
    if (!isset($_SESSION['uid'])) {

        echo '<span class="fa fa-sign-in" > Login</span >';
    } else {
        echo '<span class="fa fa-sign-out" > Logout</span >';
    }

    echo '</a>
            </span>
        </div>
    </div>
    
</nav>

';
}

function footer_echo()
{
    echo '
<div class="py-2"></div>
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        Info Solution<br>
                        Goaves<br>
                        Belagavi<br>
                        <i class="fa fa-mobile-phone fa-lg"></i>: +91 1234 5678<br>
                        <i class="fa fa-phone fa-lg"></i>: +91 8765 4321<br>
                        <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:balbheem@infosolution.net">balbheem@infosolution.net</a>
                    </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i
                                    class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i
                                    class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i
                                    class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i
                                    class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i
                                    class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2018 DMS</p>
                </div>
            </div>
        </div>
    </footer>
';
}
