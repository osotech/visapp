<?php include_once("getpage.php");?>
<!DOCTYPE html>
<html lang="en">

<?php include_once("HeadTop.inc.php"); ?>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>

        <!-- Header Top ==== -->
        <?php include ("header.php");?>
        <!-- header END ==== -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="text-white">Blog Standard Sidebar</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Blog Standard Sidebar</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
            <div class="content-block">
                <div class="section-area section-sp1">
                    <div class="container">
                        <div class="row">
                            <!-- Left part start -->

                            <div class="col-md-7 col-lg-8 col-xl-8">
                                <?php $rows = $Controller->FetchBlog();
                                foreach ($rows as $key) {
                                    $blog_id =$key['blog_id'];
                                    //about author 
                                    $author_id = $key['author'];

                            $author_details = $Controller->getAuthorInfo($author_id);
                                    ?>
                                <div class="recent-news blog-lg m-b40">
                                    <div class="action-box blog-lg">
                                        <img src="assets/images/blog/default/thum1.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i><?php echo date("F j Y",strtotime($key['created_at'])); ?></a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By <?php echo $author_details['username'];?></a></li>
                                        </ul>
                                        <h5 class="post-title"><a
                                                href="blog-details?p=blog_&blog_id=<?php echo $key['blog_id'];?>">
                                                <?php echo $key['blog_title'];?>.</a></h5>
                                        <p>You just need to enter the keyword and select the keyword type to generate a
                                            list of 6 title ideas and suggestions. If you’re not satisfied with the
                                            results, you can always hit the refresh button to generate a new
                                            list of unique titles.</p>
                                        <div class="post-extra">
                                            <a href="blog-details.php?bid=1" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>
                         <?php
            echo $comments =$Controller->getCommentCount($blog_id);?>
             Comments</a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                        }
                        ?>




                                <!-- Pagination start -->
                                <div class="pagination-bx rounded-sm gray clearfix">
                                    <ul class="pagination">
                                        <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Pagination END -->
                            </div>
                            <!-- Left part END -->
                            <!-- Side bar start -->
                            <div class="col-md-5 col-lg-4 col-xl-4 sticky-top">
                                <aside class="side-bar sticky-top">
                                    <div class="widget">
                                        <h6 class="widget-title">Search</h6>
                                        <div class="search-bx style-1">
                                            <form role="search" method="post">
                                                <div class="input-group">
                                                    <input name="text" class="form-control"
                                                        placeholder="Enter your keywords..." type="text">
                                                    <span class="input-group-btn">
                                                        <button type="submit"
                                                            class="fa fa-search text-primary"></button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="widget recent-posts-entry">
                                <h6 class="widget-title">Recent Posts</h6>
                                <div class="widget-post-bx">
                                    <!-- starts here -->
                                    <?php 
                                    $recentPosts = $Controller->FetchRecentBlogPost();
                                    if (!empty($recentPosts)) {
                                        // code...
                                    
                                    foreach($recentPosts as $keyPost){?>
                                        <div class="widget-post clearfix">
                                                <div class="ttr-post-media"> <img
                                                        src="assets/images/blog/recent-blog/pic1.jpg" width="200"
                                                        height="143" alt=""> </div>
                                                <div class="ttr-post-info">
                                                    <div class="ttr-post-header">
                                                        <h6 class="post-title"><a href="blog-details.html">This Story
                                                                Behind Education Will Haunt You Forever.</a></h6>
                                                    </div>
                                                    <ul class="media-post">
                                                        <li><a href="#"><i class="fa fa-calendar"></i>Oct 23 2019</a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i>15 Comment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                   <?php }
                               }else{
                                echo "<p class='text-danger'>There are no recent posts at the moment!</p>";
                               }
                                     ?>
                            
                                            <!--recent post ends here -->

                                        </div>
                                    </div>
                                    <div class="widget widget-newslatter">
                                        <h6 class="widget-title">Newsletter</h6>
                                        <div class="news-box">
                                            <p>Enter your e-mail and subscribe to our newsletter.</p>
                                            <form class="subscription-form" action="" method="POST">
                                                <div class="ajax-message"></div>
                                                <div class="input-group">
                                                    <input name="email" id="email" required="required" type="text"
                                                        class="form-control" placeholder="Your Email Address" />
                                                    <button name="Submit" id="Submit" value="Submit" type="button"
                                                        class="btn black radius-no">
                                                        <i class="fa fa-paper-plane-o"></i>
                                                    </button>
                                                </div>
                                                <div><h3 id="response"></h3></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="widget widget_gallery gallery-grid-4">
                                        <h6 class="widget-title">Our Gallery</h6>
                                        <ul>
                                            <li>
                                                <div>
                                                    <a href="#"><img src="assets/images/gallery/pic2.jpg" alt=""></a>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="widget widget_tag_cloud">
                                        <h6 class="widget-title">Tags</h6>
                                        <div class="tagcloud">
                                            <a href="#">Design</a>
                                            <a href="#">User interface</a>
                                            <a href="#">SEO</a>
                                            <a href="#">WordPress</a>
                                            <a href="#">Development</a>
                                            <a href="#">Joomla</a>
                                            <a href="#">Design</a>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <!-- Side bar END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content END-->
        <!-- Footer ==== -->
        <?php include ("./assets/footer.php");?>
        <!-- Footer END ==== -->
        <!-- scroll top button -->
        <button class="back-to-top fa fa-chevron-up"></button>
    </div>
    <!-- External JavaScripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendors/counter/waypoints-min.js"></script>
    <script src="assets/vendors/counter/counterup.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="assets/vendors/masonry/masonry.js"></script>
    <script src="assets/vendors/masonry/filter.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src='assets/vendors/switcher/switcher.js'></script>
    <script>
        $(document).ready(function(){
            $("#Submit").on('click',function(){
                let email = $("#email").val();
                let action =$("#Submit").val();
                 $.ajax({
                    url:"subscribers.php",
                    type:"POST",
                    data:{email:email,
                        action:action},
                    success:function(data){
                        $("#response").html(data);
                    }
                });
            });
           
               
            
        })
    </script>
</body>

</html>