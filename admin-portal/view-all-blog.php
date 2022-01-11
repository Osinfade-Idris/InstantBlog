<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "reference.php"?>
<title>View All Blog ----InstantBlog</title>
</head>
<body>


<?php include "side-bar.php"?>

<div class="body-div">
<?php include "header.php"?>
<div class="head-div"><i class="fab fa-blogger"></i> View All Blog</div>
<div class="view-div">
    <select class="text_field select" id="input"> 
        <option value=""> ALL BLOG CATEGORIES</option>
        <option value="fashion">Fashion And Lifestyles</option>
        <option value="biography">Biography</option>
        <option value="politics">Politics</option>
        <option value="entertainment">Entertainment</option>
        <option value="foreign">Foreign</option>
        <option value="business">Business News</option>
    </select>

    <input class="text_field" type="text" placeholder="TYPE IN HERE TO SEARCH">
    <div class="btn"><i class="fa fa-search"></i> Search</div>



    <div class="body-div blog-container" id="view">
        <a href="blog-details.php" title="Get a Discount or 15% on every purchase on InstantBlog">
            <div class="blog-div"data-aos="fade-down" data-aos-duration="1000">
                <div class="title">
                    <i class="fa fa-calendar-alt"></i> Updated: 02 Dec 2020 | <i class="fa fa-eye"></i> 0 Views
                </div>

                <div class=pic-div><img src="img/blog1.jpg" alt="InstantBlog blog1"/></div>

                <div class="blog-title"><h2>Get a Discount or 15% on every purchase on InstantBlog</h2></div>
            </div>
        </a>

        <a href="blog-details.php" title="Biography">
            <div class="blog-div"data-aos="fade-down" data-aos-duration="1000">
                <div class="title">
                    <i class="fa fa-calendar-alt"></i> Updated:  02 Dec 2020 | <i class="fa fa-eye"></i> 0 Views
                </div>

                <div class=pic-div><img src="img/index4.jpg" alt="InstantBlog index4"/></div>

                <div class="blog-title"><h2>Biography</h2></div>
            </div>
        </a>

        <a href="blog-details.php" title="Politics">
            <div class="blog-div"data-aos="fade-down" data-aos-duration="1000">
                <div class="title">
                    <i class="fa fa-calendar-alt"></i> Updated: 02 Dec 2020 | <i class="fa fa-eye"></i> 0 Views
                </div>

                <div class=pic-div><img src="img/index5.jpg" alt="InstantBlog index5"/></div>

                <div class="blog-title"><h2>Politics</h2></div>
            </div>
        </a>


        <a href="register-blog.php"><button type="submit" class="btn"><i class="fa fa-edit"></i> Create New Blog </button></a>
        
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












