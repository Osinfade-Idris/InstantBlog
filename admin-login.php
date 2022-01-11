<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "reference.php"?>
<title>Admin Login -- InstantBlog</title>
</head>
<body>
<?php include "header.php"?>

<div class="front-bg animated slideInDown" id="login-back-div">
    <div class="body-div slide-div">
	    <div class="text-div" data-aos="zoom-in" data-aos-duration="1500">
            <h1><span>InstantBlog</span><br>Administrative Login
                <br clear="all"/>
                <hr>
                <br clear="all"/>
            </h1>
            
        </div>



        <div class="pic-div" data-aos="flip-down" data-aos-duration="1500" >
            <div class="search-div" id="login-div">
                <div class="alert-div">
                    <span>*</span>
                    Provide your login details to<span> proceed</span>.
                </div>
                
                <form action="admin-portal/index.php" method="POST" enctype="multipart/form-data">
                <input class="text_field" type="text" placeholder="Email Address"/>
                <input class="text_field" type="password" placeholder="Password"/>
                <button type="submit" class="btn"><i class="fa fa-unlock"></i> Log-In</button>
                </form>
                <div class="alert-div"><span onclick="_forget_password_panel()">FORGET PASSWORD? RESET</span> | <span onclick="_sign_up_panel()"> SIGN-UP HERE</span> </div>
            </div>


            <div class="search-div" id="registration-div">
                <div class="alert-div">
                    <span>*</span>
                   Fill the fields to <span>Register</span>.
                </div>
                <form action="sign-up-successful.php" method="POST" enctype="multipart/form-data">
                <input class="text_field" type="text" placeholder="Fullname">
                <input class="text_field" type="email" placeholder="Email Address"/>
                <input class="text_field" type="text" placeholder="Phone Number"/>
                <input class="text_field" type="password" placeholder="Create Password"/>
                <input class="text_field" type="password" placeholder="Confirm Password"/>
                <button type="submit" class="btn"><i class="fa fa-hand-point-right"></i> Submit</button></a>
                </form>
                <div class="alert-div">Already have an Account? | <span onclick="_log_in_panel()">LOGIN HERE</span> </div>
            </div>


            <div class="search-div" id="reset-password-div">
                <div class="alert-div">
                    <span>*</span>
                  Provide your email address to <span>proceed</span>.
                </div>

                <form action="reset-password.php" method="POST" enctype="multipart/form-data">
                <input class="text_field" type="email" placeholder="Email Address"/>
                <button type="submit" class="btn"> PROCEED <i class="fa fa-long-arrow-alt-right"></i></button>
                </form>
                <div class="alert-div"><span onclick="_sign_up_panel()"> SIGN-UP HERE</span>  | <span onclick="_log_in_panel()">LOGIN HERE</span> </div>
             
            </div>
        </div>
    </div>
    
</div>

<script src="javascript/aos.js"></script>
<script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
</script>

</body>
</html>