<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "reference.php"?>
<title>InstantBlog --Home</title>
</head>
<body>

<?php include "header.php"?>

<div class="front-bg animated slideInDown">
    <div class="body-div slide-div">
	    <div class="text-div" data-aos="zoom-in" data-aos-duration="1500">
            <h1>Welcome to <span>InstantBlog</span>
                <br clear="all"/>
                <hr>
                <br clear="all"/>
            </h1>
            This page provides the full Information of Lastest News Update and Events.  <a href="about-instantblog.php">Read More</a> 
        </div>


        <div class="pic-div" data-aos="flip-down" data-aos-duration="1500" >
            <div class="search-div">
                <div class="alert-div">
                    <span>*</span>
                    Search here to browse through our<span> Blogs & Latest News</span>
                    from different categories.
                </div>

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

            </div>
        </div>

    </div>
</div>



<div class="body-div blog-container">
    <a href="blog-details.php" title="Get a Discount or 15% on every purchase on InstantBlog">
        <div class="blog-div"data-aos="fade-down" data-aos-duration="1000">
            <div class="title">
                <i class="fa fa-calendar-alt"></i> Updated: 18 Nov 2020 | <i class="fa fa-eye"></i> 0 Views
            </div>

            <div class=pic-div><img src="img/blog1.jpg" alt="InstantBlog blog1"/></div>

            <div class="blog-title"><h2>Get a Discount or 15% on every purchase on InstantBlog</h2></div>
            <div class="blog-comment"><i class="fa fa-comments"></i> Write a Comment</div>

        </div>
    </a>

    <a href="blog-details.php" title="Biography">
        <div class="blog-div"data-aos="fade-down" data-aos-duration="1000">
        
            <div class="title">
             <i class="fa fa-calendar-alt"></i> Updated: 18 Nov 2020 | <i class="fa fa-eye"></i> 0 Views
            </div>

            <div class=pic-div><img src="img/index4.jpg" alt="InstantBlog index4"/></div>

            <div class="blog-title"><h2>Biography</h2></div>
            <div class="blog-comment"><i class="fa fa-comments"></i> Write a Comment</div>
        </div>
    </a>

    <a href="blog-details.php" title="Politics">
        <div class="blog-div"data-aos="fade-down" data-aos-duration="1000">
            <div class="title">
                <i class="fa fa-calendar-alt"></i> Updated: 18 Nov 2020 | <i class="fa fa-eye"></i> 0 Views
            </div>

            <div class=pic-div><img src="img/index5.jpg" alt="InstantBlog index5"/></div>

            <div class="blog-title"><h2>Politics</h2></div>
            <div class="blog-comment"><i class="fa fa-comments"></i> Write a Comment</div>
        </div>
    </a>

    <a href="blog-details.php" title="Entertainment">
        <div class="blog-div" data-aos="fade-up" data-aos-duration="1000">
            <div class="title">
                <i class="fa fa-calendar-alt"></i> Updated: 18 Nov 2020 | <i class="fa fa-eye"></i> 0 Views
            </div>

            <div class=pic-div><img src="img/blog1.jpg" alt="InstantBlog blog1"/></div>

            <div class="blog-title"><h2>Entertainment</h2></div>
            <div class="blog-comment"><i class="fa fa-comments"></i> Write a Comment</div>
        </div>
    </a>

    <a href="blog-details.php" title="Foreign">
        <div class="blog-div" data-aos="fade-up" data-aos-duration="1000">
            <div class="title">
                <i class="fa fa-calendar-alt"></i> Updated: 18 Nov 2020 | <i class="fa fa-eye"></i> 0 Views
            </div>

            <div class=pic-div><img src="img/index4.jpg" alt="InstantBlog index4"/></div>

            <div class="blog-title"><h2>Foreign</h2></div>
            <div class="blog-comment"><i class="fa fa-comments"></i> Write a Comment</div>
        </div>
    </a>    

    <a href="blog-details.php" title="Business News">
        <div class="blog-div" data-aos="fade-up" data-aos-duration="1000">
            <div class="title">
                <i class="fa fa-calendar-alt"></i> Updated: 18 Nov 2020 | <i class="fa fa-eye"></i> 0 Views
            </div>

            <div class=pic-div><img src="img/index5.jpg" alt="InstantBlog index5"/></div>

            <div class="blog-title"><h2>Business News</h2></div>
            <div class="blog-comment"><i class="fa fa-comments"></i> Write a Comment</div>
        </div>
    </a>
</div>


<?php include "footer.php"?>
</body>
</html>