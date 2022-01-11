<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "reference.php"?>
<title>Admin Dashboard ----InstantBlog</title>
</head>
<body>


<?php include "side-bar.php"?>



<div class="body-div">
<?php include "header.php"?>


    <div class="admin-div">
        <div class="div-in">
            <div class="pix-div"> <img src="img/img_avatar.png" alt="admin-portal img_avatar.png"/></div>
            <div class="text-div"> 
                WELCOME BACK!
                <h1>Sobande Temitope</h1>
                <i class="fa fa-phone"></i> 08131252996 | <i class="fa fa-inbox"></i> sunaf4real@gmail.com
            </div>
        </div>  
    </div>


    <div class="link-back-div">

        <a href="users.php" title="InstantBlog users"><div class="link-div">
            <div class="icon-div">&nbsp;<i class="fab fa-blogger"></i>&nbsp;</div>
              <div class="text-div"> <h2>234</h2>InstantBlog User</div>
        </div>
        </a>

        <a href="register-blog.php" title="Register Blog"><div class="link-div">
            <div class="icon-div">&nbsp;<i class="fab fa-blogger"></i>&nbsp;</div>
              <div class="text-div"> <h2>837 </h2>Register Blog </div>
        </div> 
        </a>

        <a href="view-all-blog.php" title="View All Blog"><div class="link-div">
            <div class="icon-div">&nbsp;<i class="fab fa-blogger"></i>&nbsp;</div>
              <div class="text-div"> <h2>15</h2> View All Blogs </div>
        </div>
        </a>

        <a href="user-profile.php" title="View Profile"><div class="link-div">
            <div class="icon-div">&nbsp;<i class="fa fa-eye"></i>&nbsp;</div>
              <div class="text-div"> <h2>View Profile</h2></div>
        </div>
        </a>
        
        <a href="../admin-login.php" title="InstantBlog Log-out"><div class="link-div">
            <div class="icon-div">&nbsp;<i class="fa fa-sign-out-alt"></i>&nbsp;</div>
              <div class="text-div"> <h2>Log-Out</h2></div>
        </div>
        </a>
        
    </div>
</div>

</body>
</html>