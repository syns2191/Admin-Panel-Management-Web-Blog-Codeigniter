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
                        
                        
                                <?php
                                    if (isset($this->session->userdata['logged_in'])) {
                                        $username = ($this->session->userdata['logged_in']['username']);
                                        $email = ($this->session->userdata['logged_in']['email']);
                                        $displayName = ($this->session->userdata['logged_in']['displayName']);
                                        $displayPicture = ($this->session->userdata['logged_in']['displayPicture']);
                                    } else {
                                        header("location:" .base_url());
                                    }
                                ?>
                            
                               <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
                                    <div class="well well-sm">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <img src="<?php echo $displayPicture; ?>" class="img-rounded img-responsive" draggable="false" />
                                                <div style="padding-top:15px;"></div>
                                                <span class="label label-warning">Global Rank: #35122</span>
                                            </div>
                                            <div class="col-sm-6 col-md-8">
                                                <span class="label label-warning pull-right">Level: 1</span>
                                                <h4><?php echo $displayName; ?> <a href="#"><i class="glyphicon glyphicon-pencil"></i></a></h4>
                                                <small>
                                                    <cite title="San Francisco, USA">Harboøre, Denmark <i class="glyphicon glyphicon-map-marker"></i></cite>
                                                </small>
                                                <p>
                                                    <i class="glyphicon glyphicon-envelope"></i><?php echo $email; ?> <a href=""><i class="glyphicon glyphicon-pencil"></i></a>
                                                    <br />
                                                    <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                                                    <br />
                                                    <i class="glyphicon glyphicon-gift"></i>March 12, 1997
                                                </p>
                                                <hr>
                                                <div class="row nav">
                                                    <div class="col-md-8" style="margin: 0px;padding-top: 10px;">
                                                        <div class="col-md-4 friendly"><i class="fa fa-smile-o fa-lg"></i> 16</div>
                                                        <div class="col-md-4 heart"><i class="fa fa-heart-o fa-lg"></i> 14</div>
                                                        <div class="col-md-4 like"><i class="fa fa-thumbs-o-up fa-lg"></i> 26</div>
                                                    </div>
                                                </div>
                                            </div>
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