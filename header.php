 <header class="header rs-nav header-transparent">
     <div class="top-bar">
         <div class="container">
             <div class="row d-flex justify-content-between">
                 <div class="topbar-left">
                     <ul>
                         <li><a href="faq?p=faq_"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                         <li><a href="mailto:enquiry@ikraamidealmodelcollege.com"><i
                                     class="fa fa-envelope-o"></i><?php echo $_SESSION['SCHOOL_EMAIL'];?></a></li>
                                      <li><a href="tel:<?php echo $_SESSION['SCHOOL_PHONE'];?>"><i class="fa fa-phone"></i><?php echo $_SESSION['SCHOOL_PHONE'];?></a></li>
                     </ul>
                 </div>
                 <div class="topbar-right">
                     <ul>
                         <li><a href="./e-portal/">Portal</a></li>
                         <li><a href="./e-exam/">e-Exam</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="sticky-header navbar-expand-lg">
         <div class="menu-bar clearfix">
             <div class="container clearfix">
                 <!-- Header Logo ==== -->
                 <div class="menu-logo">
                     <a href="index?p=home_"><img src="assets/images/logo.png" width="100%" alt=""></a>
                 </div>
                 <!-- Mobile Nav Button ==== -->
                 <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                     data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
                     aria-expanded="false" aria-label="Toggle navigation">
                     <span></span>
                     <span></span>
                     <span></span>
                 </button>
                 <!-- Author Nav ==== -->
                 <div class="secondary-menu">
                     <div class="secondary-inner">
                         <ul>
                             <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                             <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                             <!-- Search Button ==== -->
                             <!-- <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li> -->
                         </ul>
                     </div>
                 </div>
                 <!-- Search Box ==== -->
                 <div class="nav-search-bar">
                     <form action="#">
                         <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                         <span><i class="ti-search"></i></span>
                     </form>
                     <span id="search-remove"><i class="ti-close"></i></span>
                 </div>
                 <!-- Navigation Menu ==== -->
                 <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                     <div class="menu-logo">
                          <a href="index?p=home_"><img src="assets/images/logo.png" width="100%" alt="logo" /></a>
                     </div>
                     <ul class="nav navbar-nav">
                         <li class="active">
                             <a href="./">Home</a>

                         </li>
                          <li><a href="javascript:;">Administration <i class="fa fa-chevron-down"></i></a>
                             <ul class="sub-menu">
                                 <li><a href="principal?p=principal_">Principal </a>

                                 </li>
                                 <li>
                                     <a href="schoolHod?p=hods_"> HODs</a>

                                 </li>
                                 <li><a href="staff?p=staff_">Management Staff</a>

                                 </li>
                             </ul>
                         </li>
                         <li><a href="javascript:;">About Us <i class="fa fa-chevron-down"></i></a>
                             <ul class="sub-menu">
                                 <li><a href="about?p=about_">About Our School </a>

                                 </li>
                                 <li>
                                     <a href="cmessage?p=chairMsg_"> Chairman Message</a>

                                 </li>
                                  <li><a href="coreValue?p=our_value_">Our History</a>

                                 </li> 
                             </ul>
                         </li>
                         <li><a href="javascript:(0);">Activities<i class="fa fa-chevron-down"></i></a>
                             <ul class="sub-menu">
                                 <!-- <li><a href="about?p=about_">About Us</a>

                                 </li> -->
                                 <li>
                                     <a href="event?p=event_">School Events</a>

                                 </li>
                                 <li><a href="faq?p=faq_">FAQ's</a>

                                 </li>
                                 <li><a href="contact?p=contact_">Contact
                                         Us</a>
                                 </li>
                                 <li><a href="">Facilities</a></li>
                               
                                 <li><a href="gallery?p=gallery_">Gallery</a></li>
                             </ul>
                         </li>
                          <li><a href="javascript:;">Admission <i class="fa fa-chevron-down"></i></a>
                             <ul class="sub-menu">
                                 <li><a href="admission?p=admission_">School Admission</a>

                                 </li>
                                 <li>
                                     <a href="procedure?p=procedure_"> Entry Procedure</a>

                                 </li>
                                 <li><a href="apply?p=how_to_apply_">How to Apply</a>

                                 </li>
                                 <li><a href="entrance?p=Entrance_">Entrance Exam</a>

                                 </li>
                                 <li><a href="fee-structure?p=fee_">Tuition &amp; Fees</a></li>
                             </ul>
                         </li>
                         <li><a href="javascript:;">e-Portal <i
                                     class="fa fa-chevron-down"></i></a>
                             <ul class="sub-menu">
                                 
                                         <li><a href="stafflogin">Staff Login </a></li>
                                         <li><a href="studentlogin">Student Login </a></li>
                                         <li><a href="./e-portal/">e-Registration</a></li>
                                          <li><a href="../">CBT Portal</a></li> 
                                     </ul>
                         </li>
                         <li>
                            <a href="blog?p=blog_">News</a>
                         </li>

                     </ul>
                     <div class="nav-social-link">
                         <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                         <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                         <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                     </div>
                 </div>
                 <!-- Navigation Menu END ==== -->
             </div>
         </div>
     </div>
 </header>