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

                <div class="container text-center">
    <div class="row">
        <h2>Open in chat (popup-box chat-popup)</h2>
        <h4>Click Here</h4>
        <div class="round hollow text-center">
        <a href="#" id="addClass"><span class="glyphicon glyphicon-comment"></span> Open in chat </a>
        </div>
        
        <hr>
        
        MORE :
        <a target="_blank" href="http://bootsnipp.com/snippets/33ejn">Whatsapp Chat Box POPUP</a>,
         <a target="_blank" href="http://bootsnipp.com/snippets/z4P39"> Creative User Profile  </a>
         
    </div>
</div>


<div class="popup-box chat-popup" id="qnimate">
              <div class="popup-head">
                <div class="popup-head-left pull-left"><img src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" alt="iamgurdeeposahan"> Gurdeep Osahan</div>
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
                                <abbr class="timestamp">October 8th, 2015</abbr>
                    </div>
                    
                    
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg doted-border">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Osahan</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img alt="message user image" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Hey bro, how’s everything going ?
                      </div>
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                      </div>
                        <div class="direct-chat-info clearfix">
                        <span class="direct-chat-img-reply-small pull-left">
                            
                        </span>
                        <span class="direct-chat-reply-name">Singh</span>
                        </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                    
                    
                    <div class="chat-box-single-line">
                        <abbr class="timestamp">October 9th, 2015</abbr>
                    </div>
            
                    
                    
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg doted-border">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Osahan</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img alt="iamgurdeeposahan" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Hey bro, how’s everything going ?
                      </div>
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                      </div>
                        <div class="direct-chat-info clearfix">
                          <img alt="iamgurdeeposahan" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="direct-chat-img big-round">
                        <span class="direct-chat-reply-name">Singh</span>
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
                    
			    </div>
			</div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


           

        </div>
        <!-- END wrapper -->


    
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
    
    </body>
</html>