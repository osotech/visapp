<?php 
require_once ("config.php");
 include_once ("Controller.php");

class ViewController extends UserControl{
    public function viewUser(){
        $datas = $this->FetchUser();
        foreach($datas as $data){?>
<div class="item">
    <div class="cours-bx">
        <div class="action-box">
            <img src="assets/images/courses/pic1.jpg" alt="">
            <a href="#" class="btn">Read More</a>
        </div>
        <div class="info-bx text-center">
            <h5><a href="#"><?php// echo $row['username'];?></a></h5>
            <span>Programming</span>
        </div>
        <div class="cours-more-info">
            <div class="review">
                <span>3 Review</span>
                <ul class="cours-star">
                    <li class="active"><i class="fa fa-star"></i></li>
                    <li class="active"><i class="fa fa-star"></i></li>
                    <li class="active"><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>
            </div>
            <div class="price">
                <del>$190</del>
                <h5>$120</h5>
            </div>
        </div>
    </div>
</div>
<?php
           
        }
    }
}
$obj = new ViewController;