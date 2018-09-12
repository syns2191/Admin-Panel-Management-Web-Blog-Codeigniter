<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="<?php echo base_url('assets/green/css/bootstrap.min.css');?>" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="<?php echo base_url('assets/green/assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/green/assets/ionicon/css/ionicons.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/green/css/material-design-iconic-font.min.css');?>" rel="stylesheet">

        <!-- animate css -->
        <link href="<?php echo base_url('assets/green/css/animate.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/green/css/post.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/green/css/pagination.css');?>" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="<?php echo base_url('assets/green/css/waves-effect.css');?>" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="<?php echo base_url('assets/green/assets/sweet-alert/sweet-alert.min.css');?>" rel="stylesheet">

        <!-- Custom Files -->
        <link href="<?php echo base_url('assets/green/css/helper.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/green/css/style.css');?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url('assets/green/js/modernizr.min.js');?>"></script>
        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
				<?php $this->load->view('top_menu');?>
                
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

				<?php $this->load->view('sidebar');?>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                  <div class="container">
 

                   
            
                        <div class="container">
                            
                            <div class="row">
                                <div class="ds-btn">
                             
                                    <a class="btn btn-lg " href="<?php echo site_url('post/tambahpost');?>" style="background-color: #33b86c;position: fixed;">
                                    <i class="md-add-circle"></i><span>Add New Post<br></span></a> 
                                    
                            
                                </div>
                              <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
                                <ul class="event-list">
                                  <?php 
                                    if (count($post) > 0) {
                                      foreach ($post as $post): 
                                  ?>
                                  <?php 
                                      $day = date("d",strtotime($post->dateTime));
                                      $month = date("M",strtotime($post->dateTime));

                                   ?>
                                     
                                  <li>
                                    <time datetime="2014-07-20">
                                      <span class="day"><?php echo $day; ?></span>
                                      <span class="month"><?php echo $month; ?></span>
                                      <span class="year">2014</span>
                                      <span class="time">ALL DAY</span>
                                    </time>
                                    <img alt="Independence Day" src="<?php echo $post->imgCover; ?>" />
                                    <div class="info">
                                      <h2 class="title"><?php echo $post->title; ?></h2>
                                      <p class="desc"><?php echo $post->subTitle; ?></p>
                                      <ul>
                                        <li style="width:50%;"><a href="#website"><span class="md md-visibility"></span> <?php echo $post->viewer; ?></a></li>
                                        <li style="width:50%;"><span class="fa fa-comment"></span> <?php echo $post->comment; ?></li>
                                    </ul>
                                    </div>
                                    <div class="social">
                                      <ul>
                                        <li class="facebook" style="width:33%;"><a href="<?php echo site_url('post/editpos/'.$post->id);?>"><span class="md md-mode-edit"></span></a></li>
                                        <li class="twitter" style="width:34%;"><a href="<?php echo site_url('comment/view_detail/'.$post->id);?>"><span class="md md-visibility"></span></a></li>
                                        <li class="google-plus" style="width:33%;"><a href="<?php echo site_url('post/deletepos/'.$post->id);?>"><span class="md md-delete"></span></a></li>
                                      </ul>
                                    </div>
                                  </li>
                                  <?php 
                                      endforeach; }
                                  ?>
                                </ul>
                                <?php echo $pagination; ?>
                                <!-- <div class="blog-paging">
                                    <a class="background-color" href="#">First</a>
                                    <a class="background-color" href="#">...</a>

                                    <a class="background-color" href="#">6</a>
                                    <a class="background-color" href="#">7</a>
                                    <a class="background-color" href="#">8</a>

                                    <a class="background-color" href="#">...</a>
                                    <a class="background-color" href="#">Last</a>
                                </div> -->
                              </div>
                            </div>
                          </div>

                    
			           </div>
			         </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


           

        </div>
        <!-- END wrapper -->

        <div class="popup-box chat-popup" id="qnimate">
              <div class="popup-head">
            <div class="popup-head-left pull-left"><img src="https://media.licdn.com/mpr/mpr/shrink_100_100/p/2/005/0b3/123/319cbe7.jpg" alt="pawan">Pawan Pandey</div>
                <div class="popup-head-right pull-right">
                <div class="btn-group">
                          <button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
                         <i class="glyphicon glyphicon-cog"></i> </button>
                        <ul role="menu" class="dropdown-menu pull-right">
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Block</a></li>
                        <li><a href="#">Clear Chat</a></li>
                        <li><a href="#">Email Chat</a></li>
                        </ul>
                </div>
                
                <button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
                          </div>
            </div>
          <div class="popup-messages">
            
          
          
          
          <div class="direct-chat-messages">
                        
              
              <div class="chat-box-single-line">
                    <abbr class="timestamp">October 10th, 2013</abbr>
              </div>
              
              
              <!-- Message. Default to the left -->
                        <div class="direct-chat-msg doted-border">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left">Sujeet</span>
                          </div>
                          <!-- /.direct-chat-info -->
                          <img alt="message user image" src="https://media.licdn.com/mpr/mpr/shrink_100_100/p/2/005/0b3/123/319cbe7.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            Hey bro, how’s everything going ?
                          </div>
                <div class="direct-chat-info clearfix">
                            <span class="direct-chat-timestamp pull-right">4.30 PM</span>
                          </div>
                <div class="direct-chat-info clearfix">
                <span class="direct-chat-img-reply-small pull-left">
                  
                </span>
                <span class="direct-chat-reply-name">Thakur</span>
                </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
              
              
              <div class="chat-box-single-line">
                <abbr class="timestamp">October 12th, 2013</abbr>
              </div>
          
              
              
              <!-- Message. Default to the left -->
                        <div class="direct-chat-msg doted-border">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left">Sujeet</span>
                          </div>
                          <!-- /.direct-chat-info -->
                          <img alt="message user image" src="https://media.licdn.com/mpr/mpr/shrink_100_100/p/2/005/0b3/123/319cbe7.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            Hey bro, how’s everything going ?
                          </div>
                <div class="direct-chat-info clearfix">
                            <span class="direct-chat-timestamp pull-right">4.30 PM</span>
                          </div>
                <div class="direct-chat-info clearfix">
                  <img alt="" src="" class="direct-chat-img big-round">
                <span class="direct-chat-reply-name">Thakur</span>
                </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
              
              
                        

                        

                      </div>
          
          
          
          
          
          
          
          
          
          </div>
          <div class="popup-messages-footer">
          <textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
          <div class="btn-footer">
          <button class="bg_none"><i class="glyphicon glyphicon-film"></i> </button>
          <button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
                <button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
          <button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
          </div>
          </div>
        </div>


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/green/js/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/green/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/green/js/waves.js');?>"></script>
        <script src="<?php echo base_url('assets/green/js/wow.min.js');?>"></script>
        <script src="<?php echo base_url('assets/green/js/jquery.nicescroll.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/green/js/jquery.scrollTo.min.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/chat/moment-2.2.1.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/jquery-sparkline/jquery.sparkline.min.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/jquery-detectmobile/detect.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/fastclick/fastclick.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/jquery-slimscroll/jquery.slimscroll.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/jquery-blockui/jquery.blockUI.js');?>"></script>

        <!-- sweet alerts -->
        <script src="<?php echo base_url('assets/green/assets/sweet-alert/sweet-alert.min.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/sweet-alert/sweet-alert.init.js');?>"></script>

        <!-- flot Chart -->
        <script src="<?php echo base_url('assets/green/assets/flot-chart/jquery.flot.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/flot-chart/jquery.flot.time.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/flot-chart/jquery.flot.tooltip.min.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/flot-chart/jquery.flot.resize.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/flot-chart/jquery.flot.pie.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/flot-chart/jquery.flot.selection.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/flot-chart/jquery.flot.stack.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/flot-chart/jquery.flot.crosshair.js');?>"></script>

        <!-- Counter-up -->
        <script src="<?php echo base_url('assets/green/assets/counterup/waypoints.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/green/assets/counterup/jquery.counterup.min.js');?>" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="<?php echo base_url('assets/green/js/jquery.app.js');?>"></script>

        <!-- Dashboard -->
        <script src="<?php echo base_url('assets/green/js/jquery.dashboard.js');?>"></script>

        <!-- Chat -->
        <script src="<?php echo base_url('assets/green/js/jquery.chat.js');?>"></script>

        <!-- Todo -->
        <script src="<?php echo base_url('assets/green/js/jquery.todo.js');?>"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
		
		<!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>

        <script src="<?php echo base_url('assets/green/assets/datatables/jquery.dataTables.min.js');?>"></script>
        <script src="<?php echo base_url('assets/green/assets/datatables/dataTables.bootstrap.js');?>"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
		
		<script type="text/javascript">
			$(document).ready(function(){
			// menampilkan semua list agenda saat pertama kali halaman utama diload
			$("#view-list-agenda").load('<?php echo site_url('ajaxsample/lihat_agenda');?>');
			// menampilkan semua list ketika menu lihat agenda ditekan
			$("#show-list-agenda").click(function(){
			$("#view-form").empty();
			$("#view-list-agenda").load('<?php echo site_url('ajaxsample/lihat_agenda');?>');
			});
			// menampilkan form tambah barang
			$("#show-form-tambah-barang").click(function(){
			$("#show-barang").load('<?php echo site_url('gudang/tambahbarang');?>');
			});
			
			});
		</script>

        <script type="text/javascript">
          $(function(){
          $("#addClass").click(function () {
                    $('#qnimate').addClass('popup-box-on');
                      });
                    
                      $("#removeClass").click(function () {
                    $('#qnimate').removeClass('popup-box-on');
                      });
            })  

        </script>
    
    </body>
</html>