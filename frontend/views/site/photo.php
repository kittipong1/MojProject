<?php use yii\helpers\Html;
Yii::setAlias('@kmpath', '@web');
 ?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">



<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header Section -->

    <!-- End Header Section -->


    <!-- Start Page Banner -->
    <div class="page-banner no-subtitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>คลังรูปภาพ</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><?= Html::a('หน้าหลัก','../index'); ?></li>
              <li>คลังรูปภาพ</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content" class="bg-white">
      <div class="container">
        <div class="row sidebar-page">


          <!-- Page Content -->
          <div class="col-md-9 blog-box">



            <!-- Start Post -->
            <?php  
             echo '<div class="blog-post image-post">
              <!-- Start Single Post (Gallery Slider) -->
              <div class="post-head">
                <div class="touch-slider post-slider">';
                foreach ($img as $key => $value) {
                 
                
                echo'
                  <div class="item">
                  
                    <a class="lightbox" title="'.$img[$key]->image_name.'" href="'.Yii::getAlias('@kmpath').'/uploads/images/'.$img[$key]->path.'" data-lightbox-gallery="gallery1">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="'.Yii::getAlias('@kmpath').'/uploads/images/'.$img[$key]->path.'" style ="width:848px;height:200px;">
                    </a>
                  </div>
                  
              

              ';
              
                }
                  
              echo '</div>
              </div>
              <!-- End Single Post (Gallery) -->
              <!-- Post Content -->
              <div class="post-content">
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                <h2><a href="#">ชื่อกิจกรรม...</a></h2>
                <p>ชื่อน่วยงาน...</p>
                <ul class="post-meta">
                  <li>โดย <a href="#">ชื่อ-นามสกุล</a></li>
                  <li>23 สิงหาคม 2560</li>
                </ul>
                <p>
                  แจ๊กพอตฟลอร์เอ๋อ วัจนะ สคริปต์ คีตราชันเทรลเล่อร์สังโฆ คาแรคเตอร์พันธกิจแครอทเฮอร์ริเคน พอเพียงรูบิค ฟอยล์เทอร์โบสไตรค์เฟรชธรรมาภิบาล เนิร์สเซอรี่อุปทานสเปควิก ศิลปากรคลาสสิกพุดดิ้งเพรียวบาง บ๊อบเป่ายิ้งฉุบ แพกเกจแซมบ้า บูมกรอบรูปชาร์จ โต๊ะจีนโบรชัวร์คอนโด ปอดแหกมาร์เก็ตไอติมโมเต็ล ฟลอร์ แพ็ค จีดีพี ปิกอัพลอจิสติกส์วอลซ์สไปเดอร์มายาคติ โรแมนติคเพรียวบาง เบอร์เกอร์ อิกัวนาเบญจมบพิตร พุดดิ้งเคอร์ฟิวช็อปเปอร์ ตุ๋ยดยุคผลักดันยูโร มอคค่าเจี๊ยวซาร์ดีนซิ้ม จิ๊กโจ๋ศากยบุตรศิลปวัฒนธรรม เกย์ อีแต๋นพาร์ทเนอร์ร็อคมาราธอนกรีน ซาฟารี เทคคอนแท็คโต๊ะจีน สตรอเบอร์รีอิกัวนาหยวน เห่ยรูบิคโอเปอเรเตอร์ลีเมอร์ เจ็ตแพกเกจฮองเฮา เช็งเม้งไอติมคอปเตอร์โปรโมท ป่าไม้พาร์ทเนอร์กาญจน์กีวีนิรันดร์ ตะหงิด
                </p>
                <a class="main-button" href="#">อ่านต่อ <i class="fa fa-angle-right"></i></a>
              </div>
            </div>';
              ?> 

            
            <!-- End Post -->

            <!-- Start Pagination
            <div id="pagination">
              <span class="all-pages">Page 1 of 3</span>
              <span class="current page-num">1</span>
              <a class="page-num" href="#">2</a>
              <a class="page-num" href="#">3</a>
              <a class="next-page" href="#">Next</a>
            </div>
            <!-- End Pagination -->

          </div>
          <!-- End Page Content-->


          <!--Sidebar-->
          <div class="col-md-3 sidebar right-sidebar">

            <!-- Popular Posts widget -->
            <div class="tabs-section widget">

              <!-- Nav Tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#" data-toggle="tab"><i class="fa fa-star"></i>กิจกรรมยอดนิยม</a></li>
                <!-- <span class="pull-right" style="padding: 8px 0px;"><a href="#" class="btn btn-warning btn-sm" title="ดูทั้งหมด"><i class="fa fa-plus"></i></a></span> -->
              </ul>

              <!-- Tab panels -->
              <div class="tab-content widget-popular-posts">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active">
                  <ul>
                    <?php  
                      for ($x = 0; $x <= 4; $x++) {
                        echo '<li>
                      <div class="widget-thumb">
                        <a href="#"><img src="'.Yii::getAlias('@kmpath').'/images/img-gallery-1.png" alt="" /></a>
                      </div>
                      <div class="widget-content">
                        <h5><a href="#">ชื่อกิจกรรม...</a></h5>
                        <span><i class="fa fa-calendar"></i> : 29/08/2560</span> <br>
                        <span><i class="fa fa-eye"></i> : 123 ครั้ง</span>
                      </div>
                      <div class="clearfix"></div>
                    </li>';
                      }
                    ?> 
                  </ul>
                </div>
              </div>
              <!-- End Tab Panels -->

            </div>

            <!-- Tags Widget -->
            <div class="tabs-section widget widget-tags">

              <!-- Nav Tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#" data-toggle="tab"><i class="fa fa-tag"></i>แท็ก</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active">
                  <div class="tagcloud">
                    <a href="#">แท็ก1</a>
                    <a href="#">แท็ก2</a>
                    <a href="#">แท็ก3</a>
                    <a href="#">แท็ก4</a>
                    <a href="#">แท็ก5</a>
                    <a href="#">แท็ก6</a>
                    <a href="#">แท็ก7</a>
                    <a href="#">แท็ก8</a>
                    <a href="#">แท็ก9</a>
                    <a href="#">แท็ก10</a>
                    <a href="#">แท็ก11</a>
                  </div>
                </div>
              </div>
              <!-- End Tab Panels -->

            </div>

          </div>
          <!--End sidebar-->


        </div>
      </div>
    </div>
    <!-- End Content -->


    <!-- Start Footer Section -->

    <!-- End Footer Section -->

  </div>
  <!-- End Container -->


</body>

</html>