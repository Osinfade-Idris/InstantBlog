<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "reference.php"?>
<title>Reset Password -- InstantBlog</title>
</head>
<body>
<?php include "header.php"?>

<div class="front-bg animated slideInDown" id="login-back-div">
    <div class="body-div slide-div">
	    <div class="text-div" data-aos="zoom-in" data-aos-duration="1500">
            <h1><span>InstantBlog</span><br>Reset Password
                <br clear="all"/>
                <hr>
                <br clear="all"/>
            </h1>
            
        </div>



        <div class="pic-div" data-aos="flip-down" data-aos-duration="1500" >
            <div class="search-div" id="login-div">
                <div class="alert-div">
                    <span>*</span>
                    Create New Password and <span> Reset</span>.
                </div>
                
                <form action="reset-password-successful.php" method="POST" enctype="multipart/form-data">
                <input class="text_field" type="password" placeholder="Create Password">
                <input class="text_field" type="password" placeholder="Confirm Password">
                <button type="submit" class="btn"><i class="fa fa-sync"></i> Reset</button>
                </form>
                
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