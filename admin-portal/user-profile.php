<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "reference.php"?>
<title>Blog User Profile ----InstantBlog</title>
</head>
<body>


<?php include "side-bar.php"?>

<div class="body-div">
<?php include "header.php"?>
<div class="head-div"><i class="fa fa-eye"></i> My Profile</div>


<div class="user-profile-div">
    <div class="head-in">
      <div class="head-in-div"><i class="fa fa-user-circle"></i> BLOG DETAILS</div>  
      <a href="change-password.php" title="Change Password"><div class="button"><i class="fa fa-lock"></i> CHANGE PASSWORD</div></a>
    </div>

</div>

<div class="user-pix">
    <div class="pic-div">
        <img src="img/img_avatar.png" alt="admin-portal img_avatar.png"/>
    </div>

        
    <div class="details-div">    
       FULL NAME:
        <input class="text_field" type="text" placeholder=""/>

    </div>

    <div class="details-div">    
       PHONE NUMBER:
        <input class="text_field" type="text" placeholder=""/>

    </div>

    <div class="details-div">    
      EMAIL ADDRESS:
        <input class="text_field" type="text" placeholder=""/>

    </div>

    <div class="details-div" title="Please select an item in the list">    
       ROLE:
       <select class="text_field select" id="input"> 
            <option value=""> Select Profile Role...</option>
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
            <option value="user">User</option>
        </select>

    </div>

    <div class="details-div" title="Please select an item in the list">    
       STATUS:
       <select class="text_field select" id="input"> 
       <option value=""> Select Profile Status...</option>
            <option value="active">Active</option>
            <option value="deactive">Suspended</option>
            <option value="processing">Still Processing</option>
        </select>


        <a href="user-profile-update-successful.php" title="Update Profile"><button type="submit" class="btn"> UPDATE PROFILE <i class="fa fa-check"></i> </button></a>
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












