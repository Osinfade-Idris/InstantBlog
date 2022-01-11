<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "reference.php"?>
<title>Register Blog ----InstantBlog</title>
</head>
<body>


<?php include "side-bar.php"?>
<div class="body-div">
<?php include "header.php"?>
<div class="head-div"><i class="fab fa-blogger"></i> CREATE A BLOG</div>

<div class="reg-left">
    <div class="reg-title-div">
        Fill this form to create a <span>NEW BLOG</span>
    </div>
    <div class="select-div">
        SELECT BLOG CATEGORY:
        <select class="text_field select" id="input"> 
            <option value=""> All Blog categories...</option>
            <option value="fashion">Fashion And Lifestyles</option>
            <option value="biography">Biography</option>
            <option value="politics">Politics</option>
            <option value="entertainment">Entertainment</option>
            <option value="foreign">Foreign</option>
            <option value="business">Business News</option>
        </select>
    </div>

    <div class="select-div">
        BLOG TITLE:
        <input class="text_field" type="text" placeholder="Type Blog Title Here..."/>
    </div>

    <div class="select-div">
        BLOG SUMMARY:
        <textarea  class="text_field" placeholder="Blog Summary..." rows="4"></textarea>
    </div>

    <div class="select-div">
       UPLOAD SOCIAL THUMBNAIL:
       <input type="file" class="text_field" placeholder="Upload Social Media Thumbnail"/>
    </div>
</div>


<div class="reg-right">
    BLOG DETAILS;
    <div class="reg-content-div">
        <textarea  class="text_field" placeholder="Blog In Full Details..." rows="20"></textarea>
    </div>

    SELECT BLOG STATUS;
    <div class="reg-content-div">
    <select class="text_field select" id="input"> 
            <option value=""> Select Blog Status</option>
            <option value="active">Active</option>
            <option value="deactive">Suspended</option>
            <option value="processing">Still Processing</option>
        </select>
    </div>

    <a href="register-blog-successful.php" title="submit"><button type="submit" class="btn"><i class="fa fa-check"></i> SUBMIT </button></a>
</div>






<script src="javascript/aos.js"></script>
<script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
</script>


</body>
</html>












