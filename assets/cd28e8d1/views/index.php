<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
  <?php include('include/head.php'); ?>
</head>

<body>

  <!-- Full Body Container -->
  <div id="container">

    <!-- Start Header Section -->
    <?php include('include/header.php'); ?>
    <!-- End Header Section -->

    <!-- Main Slider Section -->
    <?php include('include/slider.php'); ?>
    <!-- Main Slider Section End--> 

    <!--  -->
    <div style="margin-top: 30px;">
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <!-- News Slider -->
            <div class="row">
              <div class="col-md-12">
                <div class="tab-content">

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/img-news-slider.png" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item">
          <img src="images/img-news-slider.png" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
                  <!-- <div class="fotorama" data-transition="crossfade" data-nav="thumbs" data-width="100%" data-height="400" data-fit="cover" data-loop="true" data-autoplay="true">
                    <img  src="images/img-news-slider.png" 
                          data-caption="แชมปิยองนินจาฮิปโปกับดัก แบต โฮมธุรกรรมอินเตอร์จิตเภทใช้งาน">
                    <img  src="images/img-news-slider.png" 
                          data-caption="เพนตากอน วโรกาสตู้เซฟอีสเตอร์ สปายแจ็กพอตสป็อต">
                    <img  src="images/img-news-slider.png" 
                          data-caption="สปาไตรมาสสถาปัตย์กรีน อุเทนทอม วโรกาสเพลซรุมบ้าแป๋ว">
                    <img  src="images/img-news-slider.png" 
                          data-caption="เนิร์สเซอรีแรงใจ โปรโมท ผ้าห่ม">
                    <img  src="images/img-news-slider.png" 
                          data-caption="โบว์กิฟท์ ว้อยเอ็นทรานซ์สแตนดาร์ดจตุคาม ทิป">
                  </div> -->
                </div>
              </div>
            </div>

            <div class="hr1" style="margin-bottom:30px;"></div>
            
            <!-- Latest News -->
            <div class="row">
              <div class="col-md-12">
                <div class="tabs-section">

                  <!-- Nav Tabs -->
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#" data-toggle="tab"><i class="fa fa-newspaper-o"></i>ข่าวประชาสัมพันธ์</a></li>
                    <span class="pull-right" style="padding: 8px 0px;"><a href="publicize.php" class="btn btn-warning btn-sm" title="ดูทั้งหมด" title="ดูทั้งหมด"><i class="fa fa-plus"></i></a></span>
                  </ul>

                  <!-- Tab panels -->
                  <div class="tab-content">
                      <div class="latest-posts-classic">

                        <div class="row">
                        <div class="col-sm-6" style="background-color:lavender;">

                        <?php  
                          for ($x = 0; $x <= 1; $x++) {
                            echo '<div class="post-row">
                            <div class="left-meta-post">
                              <div class="post-type">
                                <img src="images/img-news.png" alt="">
                              </div>
                              <div class="post-date"><span class="day">28</span><span class="month">ส.ค. 2560</span></div>
                            </div>
                            <h3 class="post-title"><a href="#">ชื่อข่าวประชาสัมพันธ์</a></h3>
                            <div class="post-content">
                              <p class="block-with-text">เปียโนน็อคฮาร์ดอึ๋ม ดีมานด์เซ็นเตอร์ วิดีโอโมเดลพาวเวอร์แม่ค้า ปักขคณนาสไตล์ น้องใหม่ ซัพพลายเออร์ แฮมเบอร์เกอร์อาว์ แพนงเชิญแอ็กชั่น ธรรมาภิบาล อุเทนบาบูนอีสต์ฟีเวอร์อาข่า ริกเตอร์ซิงโมเดล รูบิกแทกติคเดี้ยง เซอร์ไพรส์ต้าอ่วย แตงกวา โพลารอยด์เซอร์ไพรส์จีดีพี จังโก้สมิติเวชสแควร์เจ็ต
                              <a class="read-more" href="#">อ่านต่อ...</a></p>
                            </div>
                            <div class="post-footer">
                              ชื่อหน่วยงาน : หน่วยงาน...
                              <span class="pull-right"><i class="fa fa-eye"></i>123 ครั้ง</span>
                              </div>
                          </div>';
                          }
                        ?> 
                        </div>
                        <div class="col-sm-6" style="background-color:lavender;">

                        <?php  
                          for ($x = 0; $x <= 1; $x++) {
                            echo '<div class="post-row">
                            <div class="left-meta-post">
                              <div class="post-type">
                                <img src="images/img-news.png" alt="">
                              </div>
                              <div class="post-date"><span class="day">28</span><span class="month">ส.ค. 2560</span></div>
                            </div>
                            <h3 class="post-title"><a href="#">ชื่อข่าวประชาสัมพันธ์</a></h3>
                            <div class="post-content">
                              <p class="block-with-text">เปียโนน็อคฮาร์ดอึ๋ม ดีมานด์เซ็นเตอร์ วิดีโอโมเดลพาวเวอร์แม่ค้า ปักขคณนาสไตล์ น้องใหม่ ซัพพลายเออร์ แฮมเบอร์เกอร์อาว์ แพนงเชิญแอ็กชั่น ธรรมาภิบาล อุเทนบาบูนอีสต์ฟีเวอร์อาข่า ริกเตอร์ซิงโมเดล รูบิกแทกติคเดี้ยง เซอร์ไพรส์ต้าอ่วย แตงกวา โพลารอยด์เซอร์ไพรส์จีดีพี จังโก้สมิติเวชสแควร์เจ็ต
                              <a class="read-more" href="#">อ่านต่อ...</a></p>
                            </div>
                            <div class="post-footer">
                              ชื่อหน่วยงาน : หน่วยงาน...
                              <span class="pull-right"><i class="fa fa-eye"></i>123 ครั้ง</span>
                              </div>
                          </div>';
                          }
                        ?> 
                        </div>
                        </div>
                        </div>
                  </div>
                  <!-- End Tab Panels -->

                </div>
              </div>
            </div>

            <div class="hr1" style="margin-bottom:30px;"></div>
            
            <!-- Article -->
            <div class="row">
              <div class="col-md-12">
                <div class="tabs-section">

                  <!-- Nav Tabs -->
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#" data-toggle="tab"><i class="fa fa-file-text-o"></i>บทความ</a></li>
                    <span class="pull-right" style="padding: 8px 0px;"><a href="article.php" class="btn btn-warning btn-sm" title="ดูทั้งหมด"><i class="fa fa-plus"></i></a></span>
                  </ul>

                  <!-- Tab panels -->
                  <div class="tab-content">
                      <div class="latest-posts-classic">

                        <!-- Start Team Members -->
                        <div class="row">

                          <!-- Start Memebr 1 -->
                            <?php  
                              for ($x = 0; $x <= 2; $x++) {
                                echo ' <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#">
                                <div class="team-member">
                                  <!-- Memebr Photo, Name & Position -->
                                  <div class="member-photo">
                                    <img alt="" src="images/img-paper.png" />
                                  </div>
                                  <!-- Memebr Words -->
                                  <div class="member-info">
                                    <p> </p>
                                    <h5>ชื่อบทความ...</h5>
                                    <h5>ชื่อหน่วยงาน...</h5>
                                    <p>โดยใคร...</p>
                                  </div>
                                  <div class="member-footer">
                                    <p><small><i class="fa fa-calendar"></i> 24/08/2560 <span class="pull-right"><i class="fa fa-eye"></i> 100 ครั้ง</span></small></p>
                                  </div>
                                </div>
                                </a>
                              </div>';
                              }
                            ?> 
                            <!-- End Memebr 1 -->

                        </div>
                        <!-- End Team Members -->

                        </div>
                  </div>
                  <!-- End Tab Panels -->

                </div>
              </div>
            </div>

            <div class="hr1" style="margin-bottom:30px;"></div>
            
            <!-- E-magazine -->
            <div class="row">
              <div class="col-md-12">
                <div class="tabs-section">

                  <!-- Nav Tabs -->
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#" data-toggle="tab"><i class="fa fa-book" aria-hidden="true"></i>วารสาร (E-magazine)</a></li>
                    <span class="pull-right" style="padding: 8px 0px;"><a href="emagazine.php" class="btn btn-warning btn-sm" title="ดูทั้งหมด"><i class="fa fa-plus"></i></a></span>
                  </ul>

                  <!-- Tab panels -->
                  <div class="tab-content">

                    <!-- <div class="row"> -->

                      <!--<div align="center">
                          <button class="btn-system btn-small filter-button" data-filter="all">ทั้งหมด</button>
                          <button class="btn-system btn-small filter-button" data-filter="eb1">ประเภทที่ 1</button>
                          <button class="btn-system btn-small filter-button" data-filter="eb2">ประเภทที่ 2</button>
                          <button class="btn-system btn-small filter-button" data-filter="eb3">ประเภทที่ 3</button>
                          <button class="btn-system btn-small filter-button" data-filter="eb4">ประเภทที่ 4</button>
                      </div>
                      <br/> -->

                      <!-- Start Recent Projects Carousel -->
                      <ul id="portfolio-list" data-animated="fadeIn">
                        <li class="gallery_product filter eb1">
                          <img src="images/img-book.png" alt="" />
                          <!--<div class="portfolio-item-content">
                            <span class="header">ชื่อเอกสาร...</span>
                            <p class="body animated8">รายละเอียดเอกสารเผยแพร่.................................</p>
                            <p class="body animated8">ชื่อหน่วยงาน...</p>
                          </div> -->
                          <div class="portfolio-item-footer">
                            <p> </p>
                            <h5>ชื่อเอกสาร...</h5>
                            <h5>ชื่อหน่วยงาน...</h5>
                            <p><small><i class="fa fa-calendar"></i> 24/08/2560</small></p>
                            <div class="member-footer"><p><small><i class="fa fa-download"></i>10<span class="pull-right"><i class="fa fa-eye"></i> 100 ครั้ง</span></small></p>
                            </div>
                          </div>
                          <div class="icon-list">
                            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
                            <a class="zoom lightbox" href="images/img-book.png"><i class="fa fa-search-plus"></i></a>
                          </div> 
                        </li>
                        <li class="gallery_product filter eb2">
                          <img src="images/img-book.png" alt="" />
                          <!--<div class="portfolio-item-content">
                            <span class="header">ชื่อเอกสาร...</span>
                            <p class="body animated8">รายละเอียดเอกสารเผยแพร่.................................</p>
                            <p class="body animated8">ชื่อหน่วยงาน...</p>
                          </div> -->
                          <div class="portfolio-item-footer">
                            <p> </p>
                            <h5>ชื่อเอกสาร...</h5>
                            <h5>ชื่อหน่วยงาน...</h5>
                            <p><small><i class="fa fa-calendar"></i> 24/08/2560</small></p>
                            <div class="member-footer"><p><small><i class="fa fa-download"></i>10<span class="pull-right"><i class="fa fa-eye"></i> 100 ครั้ง</span></small></p>
                            </div>
                          </div>
                          <div class="icon-list">
                            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
                            <a class="zoom lightbox" href="images/img-book.png"><i class="fa fa-search-plus"></i></a>
                          </div> 
                        </li>
                        <li class="gallery_product filter eb3">
                          <img src="images/img-book.png" alt="" />
                          <!--<div class="portfolio-item-content">
                            <span class="header">ชื่อเอกสาร...</span>
                            <p class="body animated8">รายละเอียดเอกสารเผยแพร่.................................</p>
                            <p class="body animated8">ชื่อหน่วยงาน...</p>
                          </div> -->
                          <div class="portfolio-item-footer">
                            <p> </p>
                            <h5>ชื่อเอกสาร...</h5>
                            <h5>ชื่อหน่วยงาน...</h5>
                            <p><small><i class="fa fa-calendar"></i> 24/08/2560</small></p>
                           <div class="member-footer"><p><small><i class="fa fa-download"></i>10<span class="pull-right"><i class="fa fa-eye"></i> 100 ครั้ง</span></small></p>
                            </div>
                          </div>
                          <div class="icon-list">
                            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
                            <a class="zoom lightbox" href="images/img-book.png"><i class="fa fa-search-plus"></i></a>
                          </div> 
                        </li>
                        <li class="gallery_product filter eb4">
                          <img src="images/img-book.png" alt="" />
                          <!-- <div class="portfolio-item-content">
                            <span class="header">ชื่อเอกสาร...</span>
                            <p class="body animated8">รายละเอียดเอกสารเผยแพร่.................................</p>
                            <p class="body animated8">ชื่อหน่วยงาน...</p>
                          </div> -->
                          <div class="portfolio-item-footer">
                            <p> </p>
                            <h5>ชื่อเอกสาร...</h5>
                            <h5>ชื่อหน่วยงาน...</h5>
                            <p><small><i class="fa fa-calendar"></i> 24/08/2560</small></p>
                           <div class="member-footer"><p><small><i class="fa fa-download"></i>10<span class="pull-right"><i class="fa fa-eye"></i> 100 ครั้ง</span></small></p>
                            </div>
                          </div>
                          <div class="icon-list">
                            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
                            <a class="zoom lightbox" href="images/img-book.png"><i class="fa fa-search-plus"></i></a>
                          </div> 
                        </li>
                        <li class="gallery_product filter eb4">
                          <img src="images/img-book.png" alt="" />
                          <!-- <div class="portfolio-item-content">
                            <span class="header">ชื่อเอกสาร...</span>
                            <p class="body animated8">รายละเอียดเอกสารเผยแพร่.................................</p>
                            <p class="body animated8">ชื่อหน่วยงาน...</p>
                          </div> -->
                          <div class="portfolio-item-footer">
                            <p> </p>
                            <h5>ชื่อเอกสาร...</h5>
                            <h5>ชื่อหน่วยงาน...</h5>
                            <p><small><i class="fa fa-calendar"></i> 24/08/2560</small></p>
                            <div class="member-footer"><p><small><i class="fa fa-download"></i>10<span class="pull-right"><i class="fa fa-eye"></i> 100 ครั้ง</span></small></p>
                            </div>
                          </div>
                          <div class="icon-list">
                            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
                            <a class="zoom lightbox" href="images/img-book.png"><i class="fa fa-search-plus"></i></a>
                          </div> 
                        </li>
                        <li class="gallery_product filter eb3">
                          <img src="images/img-book.png" alt="" />
                          <!-- <div class="portfolio-item-content">
                            <span class="header">ชื่อเอกสาร...</span>
                            <p class="body animated8">รายละเอียดเอกสารเผยแพร่.................................</p>
                            <p class="body animated8">ชื่อหน่วยงาน...</p>
                          </div> -->
                          <div class="portfolio-item-footer">
                          <p> </p>
                            <h5>ชื่อเอกสาร...</h5>
                            <h5>ชื่อหน่วยงาน...</h5>
                            <p><small><i class="fa fa-calendar"></i> 24/08/2560</small></p>
                            <div class="member-footer"><p><small><i class="fa fa-download"></i>10<span class="pull-right"><i class="fa fa-eye"></i> 100 ครั้ง</span></small></p>
                            </div>
                            <!--<p><small><i class="fa fa-calendar"></i> 24/08/2560 <span class="pull-right"><i class="fa fa-eye"></i> 100 ครั้ง</span></small></p> -->
                          </div>
                          <div class="icon-list">
                            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
                            <a class="zoom lightbox" href="images/img-book.png"><i class="fa fa-search-plus"></i></a>
                          </div> 
                        </li>
                      </ul>
                      <!-- End Recent Projects Carousel -->
                      <!-- </div> -->
                  </div>
                  <!-- End Tab Panels -->

                </div>
              </div>
            </div>

            <div class="hr1 hidden-xs" style="margin-bottom:30px;"></div>

            <!-- Publication -->
            <div class="row">
              <div class="col-md-12">
                <div class="tabs-section">

                  <!-- Nav Tabs -->
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#" data-toggle="tab"><i class="fa fa-book" aria-hidden="true"></i>เอกสารเผยแพร่</a></li>
                    <span class="pull-right" style="padding: 8px 0px;"><a href="#" class="btn btn-warning btn-sm" title="ดูทั้งหมด"><i class="fa fa-plus"></i></a></span>
                  </ul>

                  <!-- Tab panels -->
                  <div class="tab-content">
                    <!-- Start Call Action -->
                    <div class="call-action call-action-boxed call-action-style3 clearfix">
                      <!-- Call Action Button -->
                      <div class="button-side" style="margin-top:10px;"><a href="#" class="btn-system btn-medium"><i class="fa fa-download"></i></a></div>
                      <!-- Call Action Text -->
                      <h2 class="primary"><strong>ชื่อเอกสารเผยแพร่...</strong></h2>
                      <p>รายละเอียดเอกสารเผยแพร่........................................................................................................................</p>
                    </div>
                    <!-- End Call Action -->
                  </div>
                  <!-- End Tab Panels -->

                </div>
              </div>
            </div>

            <div class="hr1 hidden-xs" style="margin-bottom:30px;"></div>

          

          </div>
          <!--Sidebar-->
          <div class="col-md-4 sidebar right-sidebar">

            <div class="tabs-section widget">
              <!-- Nav Tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#" data-toggle="tab"><i class="fa fa-video-camera"></i>คลังวิดีโอ</a></li>
                <span class="pull-right" style="padding: 8px 0px;"><a href="gallery.php" class="btn btn-warning btn-sm" title="ดูทั้งหมด"><i class="fa fa-plus"></i></a></span>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active">
                  <video src="videos/v1.mp4" width="100%" poster="images/img-vdo.png" controls></video>
                </div>
              </div>
              <!-- End Tab Panels -->
            </div>

            <div class="tabs-section">

              <!-- Nav Tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#" data-toggle="tab"><i class="fa fa-picture-o"></i>คลังรูปภาพ</a></li>
                <span class="pull-right" style="padding: 8px 0px;"><a href="gallery.php" class="btn btn-warning btn-sm" title="ดูทั้งหมด"><i class="fa fa-plus"></i></a></span>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content widget flickr-widget">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active">
                  <ul class="flickr-list">
                    <?php  
                      for ($x = 0; $x <= 8; $x++) {
                        echo '<li>
                        <a href="images/img-gallery.png" class="lightbox">
                          <img alt="" src="images/img-gallery.png">
                        </a>
                        <p>ชื่ออัลบั้ม...</p>
                      </li>';
                      }
                    ?> 
                  </ul>
                </div>
              </div>
              <!-- End Tab Panels -->

            </div>

            <!-- Personal Widget -->
            <div class="tabs-section">

              <!-- Nav Tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#" data-toggle="tab"><i class="fa fa-balance-scale"></i>ทำเนียบ KM FA</a></li>
                <span class="pull-right" style="padding: 8px 0px;"><a href="palace.php" class="btn btn-warning btn-sm" title="ดูทั้งหมด"><i class="fa fa-plus"></i></a></span>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content widget widget-popular-posts">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active">
                  <ul>
                  
                  <?php  
                    for ($x = 0; $x <= 3; $x++) {
                      echo '<li>
                      <div class="widget-thumb">
                        <a href="#"><img src="images/img-user.png" alt="" /></a>
                      </div>
                      <div class="widget-content">
                        <h5><a href="#">ชื่อ-นามสกุล</a></h5>
                        <div class="tagcloud">
                          <a href="#">แท็ก1</a>
                          <a href="#">แท็ก2</a>
                          <a href="#">แท็ก3</a>
                        </div>
                        <p>ชื่อหมวดหมู่</p>
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
    <!--  -->


    <!-- Start Footer Section -->
    <?php include('include/footer.php'); ?>
    <!-- End Footer Section -->


  </div>
  <!-- End Full Body Container -->

  <?php include('include/bottom.php'); ?>

</body>

</html>