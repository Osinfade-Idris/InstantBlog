<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "reference.php"?>
<title>Change Password ----InstantBlog</title>
</head>
<body>


<?php include "side-bar.php"?>

<div class="body-div">
<?php include "header.php"?>
<div class="head-div"><i class="fa fa-lock"></i> Change Password</div>


<div class="change-password-div">
    <div class="password-details-div"> 
       ENTER OLD PASSWORD:
        <input class="text_field" type="text" placeholder="Enter Old Password"/>
    </div>

    <div class="password-details-div"> 
     CREATE NEW PASSWORD:
        <input class="text_field" type="text" placeholder="Create New Password"/>
    </div>

    <div class="password-details-div"> 
      CONFIRM NEW PASSWORD:
        <input class="text_field" type="text" placeholder="Confirm New Password"/>
    </div>
    <a href="user-profile-update-successful.php" title="Change Password"><button type="submit" class="btn"><i class="fa fa-exchange-alt"></i>  CHANGE PASSWORD  </button></a>
</div>






<script src="javascript/aos.js"></script>
<script>
    AOS.init({
    easing: 'ease-in-out-sine'
    });
</script>
</body>
</html>












