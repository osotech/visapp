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
            <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="text-white">Events</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Events</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
            <!-- contact area -->
            <div class="content-block">
                <!-- Portfolio  -->
                <div class="section-area section-sp1 gallery-bx">
                    <div class="container">
                         <div class="feature-filters clearfix center m-b40">
                           <ul>
                                <li class="btn active">
                                    <input type="radio">
                                    <a href="event?p=event_"><span>All</span></a>
                                </li>
                                <li class="btn">
                                    <input type="radio">
                                    <a href="happening?p=happening_"><span>Happening</span></a>
                                </li>
                                <li class="btn">
                                    <input type="radio">
                                    <a href="upcoming?p=upcoming_"><span>Upcoming</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="clearfix">
                            <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                               

                                <li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
                                    <div class="event-bx m-b30">
                                        <div class="action-box">
                                            <img src="assets/images/event/pic1.jpg" alt="">
                                        </div>
                                        <div class="info-bx d-flex">
                                            <div>
                                                <div class="event-time">
                                                    <div class="event-date">29</div>
                                                    <div class="event-month">October</div>
                                                </div>
                                            </div>
                                            <div class="event-info">
                                                <h4 class="event-title"><a href="events-details.php">Education Autumn
                                                        Tour 2019</a></h4>
                                                <ul class="media-post">
                                                    <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a>
                                                    </li>
                                                </ul>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the..</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="btn">Load More</div>
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