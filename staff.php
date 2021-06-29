<?php require_once("getpage.php");?>
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
            <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="text-white">Our Staff</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Our Staff</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
            <!-- inner page banner END -->
            <div class="content-block">
                <!-- About Us -->
                <div class="section-area section-sp1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                                <div class="widget courses-search-bx placeani">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Search Staff</label>
                                            <input name="dzName" type="text" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="widget widget_archive">
                                    <h5 class="widget-title style-1">Departments</h5>
                                    <ul>
                                        <li class="active"><a href="#">General</a></li>
                                        <li><a href="#">IT & Software</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li><a href="#">Programming Language</a></li>
                                        <li><a href="#">Technology</a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <a href="#"><img src="assets/images/adv/adv.jpg" alt="" /></a>
                                </div>
                                <div class="widget recent-posts-entry widget-courses">
                                    <h5 class="widget-title style-1">New Staff</h5>
                                    <div class="widget-post-bx">

                                        <div class="widget-post clearfix">
                                            <div class="ttr-post-media"> <img
                                                    src="assets/images/blog/recent-blog/pic3.jpg" width="200"
                                                    height="160" alt=""> </div>
                                            <div class="ttr-post-info">
                                                <div class="ttr-post-header">
                                                    <h6 class="post-title"><a href="#">English For Tommorow</a></h6>
                                                </div>
                                                <div class="ttr-post-meta">
                                                    <ul>
                                                        <li class="price">
                                                            <h5 class="free">Free</h5>
                                                        </li>
                                                        <li class="review">07 Review</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="row">
                                    <!-- start -->
                                    <?php $result = $Controller->FetchUser();
                                foreach ($result as $row) {?>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 m-b30">
                                        
                                        <div class="item">
                                            <div class="cours-bx">
                                                <div class="action-box">
                                                    <img src="assets/images/courses/pic1.jpg" alt="">
                                                    <a href="staff?p=staff_" class="btn">More Info</a>
                                                </div>
                                                <div class="info-bx text-center">
                                                    <h5><a href="#"><?php echo $row['staff_title'];?>
                                                            <?php echo $row['first_name']." ".$row['last_name']; ?></a>
                                                    </h5>
                                                    <span><?php echo $row['subject_major'];?></span>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    # code...
                                }
                           
                                ?>
                                    <!-- end -->

                                    <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 m-b30">
                                        <div class="cours-bx">
                                            <div class="action-box">
                                                <img src="assets/images/courses/pic1.jpg" alt="">
                                                <a href="#" class="btn">Read More</a>
                                            </div>
                                            <div class="info-bx text-center">
                                                <h5><a href="#">Mr. Flourish Osotech</a></h5>
                                                <span>Pricipal</span>
                                            </div>
                                            <div class="cours-more-info">
                                                <div class="review">
                                                    <span>Rating</span>
                                                    <ul class="cours-star">
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price">
                                                    <h5>English Language</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12 m-b20">
                                        <div class="pagination-bx rounded-sm gray clearfix">
                                            <ul class="pagination">
                                                <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a>
                                                </li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact area END -->

        </div>
        <!-- Content END-->
        <!-- Footer ==== -->
        <?php include ("./assets/footer.php");?>
        <!-- Footer END ==== -->
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
</body>

</html>