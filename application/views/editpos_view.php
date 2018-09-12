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
        <script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>

        <script type="text/javascript" src="<?php echo base_url('assets/green/js/modernizr.min.js');?>"></script>

        <style>
        
        #actions {
          margin: 2em 0;
        }

        /* Mimic table appearance */
        div.table {
          display: table;
        }
        div.table .file-row {
          display: table-row;
        }
        div.table .file-row > div {
          display: table-cell;
          vertical-align: top;
          border-top: 1px solid #ddd;
          padding: 8px;
        }
        div.table .file-row:nth-child(odd) {
          background: #f9f9f9;
        }

        /* The total progress gets shown by event listeners */
        #total-progress {
          opacity: 0;
          transition: opacity 0.3s linear;
        }

        /* Hide the progress bar when finished */
        #previews .file-row.dz-success .progress {
          opacity: 0;
          transition: opacity 0.3s linear;
        }

        /* Hide the delete button initially */
        #previews .file-row .delete {
          display: none;
        }

        /* Hide the start and cancel buttons and show the delete button */

        #previews .file-row.dz-success .start,
        #previews .file-row.dz-success .cancel {
          display: none;
        }
        #previews .file-row.dz-success .delete {
          display: block;
        }
    </style>
        
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


			<div class="row">
										<!-- Basic example -->
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-heading"><h3 class="panel-title">New Pos</h3></div>
									             <div id="actions" class="row" style="margin-left: 13px;">
                                                            <div class="col-lg-7">
                                                                <!-- The fileinput-button span is used to style the file input field as button -->
                                                                <span class="btn btn-success fileinput-button">
                                                                    <i class="glyphicon glyphicon-plus"></i>
                                                                    <span>Add files...</span>
                                                                </span>
                                                                <!-- <button type="submit" class="btn btn-primary start">
                                                                    <i class="glyphicon glyphicon-upload"></i>
                                                                    <span>Start upload</span>
                                                                </button>
                                                                <button type="reset" class="btn btn-warning cancel">
                                                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                                                    <span>Remove</span>
                                                                </button> -->
                                                            </div>
                                                           
                                                            <div class="col-lg-5">
                                                                <!-- The global file processing state -->
                                                                <span class="fileupload-process">
                                                                    <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                         <div class="table table-striped" class="files" id="previews">
                                                            <div id="template" class="file-row">
                                                                <!-- This is used as the file preview template -->
                                                                <div>
                                                                    <span class="preview"><img data-dz-thumbnail src="<?php echo $post->imgCover; ?>" /></span>
                                                                </div>
                                                                <div>
                                                                    <p class="name" data-dz-name></p>
                                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                                </div>
                                                                <div>
                                                                    <p class="size" data-dz-size></p>
                                                                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <button class="btn btn-primary start">
                                                                        <i class="glyphicon glyphicon-upload"></i>
                                                                        <span>Start</span>
                                                                    </button>
                                                                    <button data-dz-remove class="btn btn-warning cancel">
                                                                        <i class="glyphicon glyphicon-ban-circle"></i>
                                                                        <span>Cancel</span>
                                                                    </button>
                                                                    <p data-dz-remove class="delete">
                                                                        <i class="glyphicon glyphicon-check"></i>
                                                                        <span>Finish</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table table-striped" class="files" id="del">
                                                            <div id="template" class="file-row">
                                                                <!-- This is used as the file preview template -->
                                                                <div>
                                                                    <span class="preview"><img data-dz-thumbnail style="width: 245px;height: 177px;" src="<?php echo $post->imgCover; ?>" /></span>
                                                                </div>
                                                                <div>
                                                                    <p class="name" data-dz-name></p>
                                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                                </div>
                                                                <div>
                                                                    <p class="size" data-dz-size></p>
                                                                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    
                                                                    <button data-dz-remove class="btn btn-warning del" onclick="myFunction()">
                                                                        <i class="glyphicon glyphicon-ban-circle"></i>
                                                                        <span>Remove</span>
                                                                    </button>
                                                                    <!-- <p data-dz-remove class="delete">
                                                                        <i class="glyphicon glyphicon-check"></i>
                                                                        <span>Finish</span>
                                                                    </p> -->
                                                                </div>
                                                            </div>
                                                        </div>
												<div class="panel-body">

													<?php echo form_open('post/goedit/'.$post->id,['role'=>'form']);?>
														<div class="form-group">
															<!-- <label for="exampleInputEmail1">Kode Barang</label> -->
															<input type="text" name="title" class="form-control" id="" placeholder="Title Pos" value="<?php echo $post->title; ?>">
														</div>
														<div class="form-group">
															<!-- <label for="exampleInputEmail1">Nama Barang</label> -->
															<input type="text" name="subTitle" class="form-control" id="" placeholder="SubTitle" value="<?php echo $post->subTitle; ?>">
														</div>
                                                        
                                                        
                                                        <div class="form-group">
                                                            <!-- <label for="exampleInputEmail1">Ukuran</label> -->
                                                            <input type="text" id="case" name="imgCover" class="form-control" id="" value="<?php echo $post->imgCover; ?>" placeholder="" style="display:none">
                                                        </div>
														<!-- <div class="form-group">
															<label for="exampleInputEmail1">Harga Barang</label>
															<input type="text" name="harga" class="form-control" id="" placeholder="">
														</div>
														<div class="form-group">
															<label for="exampleInputEmail1">Ukuran</label>
															<input type="text" name="ukuran" class="form-control" id="" placeholder="">
														</div> -->
														<div class="form-group">
															<!-- <label for="exampleInputEmail1">Jumlah</label> -->
                                                            <textarea name="isiContent" class="ckeditor" id="isiContent"><?php echo $post->isiContent; ?></textarea>
															<!-- <input type="text" name="jumlah" class="form-control" id="" placeholder=""> -->
														</div>
                                                        <input type="hidden" name="id" value="<?php echo $post->id;?>" />
														<button type="submit" class="btn btn-purple waves-effect waves-light" id='send'>Save</button>
												        <?php echo form_close();?>

                                                       
												</div><!-- panel-body -->
											</div> <!-- panel -->
										</div> <!-- col-->

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

        <script src="<?php echo base_url('assets/dropzone/dropzone.js'); ?>"></script>
        <script src="<?php echo base_url('assets/dropzone/build.js'); ?>"></script>
        <script>
        CKEDITOR.replace( 'isiContent');
        $(document).ready(function(){
          $('#send').click(function(){
            var isi = CKEDITOR.instances['isiContent'].getData();
            document.getElementById("isiContent").value=isi;
             console.log(isi);
          });
        });
      </script>
        <script>
        var Dropzone = require("enyo-dropzone");
        Dropzone.autoDiscover = false;
        </script>
        <script>
          // Dapatkan HTML Template dan menghapusnya dari dokumen
          var previewNode = document.querySelector("#template");
          previewNode.id = "";
          var previewTemplate = previewNode.parentNode.innerHTML;
          previewNode.parentNode.removeChild(previewNode);

          var myDropzone = new Dropzone(document.body, { 
            url: "<?php echo site_url('upload/gambar_upload');?>", // mengatur url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            maxFilesize: 1, // membatasi ukuran file yang di upload
            acceptedFiles: "image/jpg, image/jpeg", // menentukan tipe file yang akan di upload
            previewTemplate: previewTemplate,
            autoQueue: false, // Pastikan bahwa file tidak antri sampai ditambahkan secara manual
            previewsContainer: "#previews", // menentukan elemen untuk menampilkan preview
            clickable: ".fileinput-button" // menentukan elemen pemicu untuk memilih file
            // data: {cat_name}
            // 
          });

          myDropzone.on("addedfile", function(file) {
            // file.name = file.name + 'tes';
            
            // menghubungkan tombol trart
            // document.getElementById("disable").fileinput-button = "";
            file.previewElement.querySelector(".start").onclick = function() {
                // console.log(file);
                
                myDropzone.enqueueFile(file); 
            };
          });

          // Update total progress bar pada saat proses upload
          myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
          });

          myDropzone.on("sending", function(file) {
            // menampilkan total progressbar
            var date = new Date();
            var newCode = date.valueOf();;
            file.newName = newCode+file.name;
            // formData.append("custom",  + file.newName);
            console.log(file);
            document.getElementById("case").style.display='block';
            // document.getElementById("movedown").style.margin-top='block';
            document.getElementById("case").value="<?php echo base_url('assets/uploads');?>"+"/"+file.newName;
            document.querySelector("#total-progress").style.opacity = "1";
            // pada saat upload berlangsung, tombol start akan mati(disabled)
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
          });

          // progressbar akan di sembunyikan ketika prosess upload sudah selesai
          myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0";
          });

          // Membuat fungsi mengunggah semua gambar pada tombol start
            document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
          };
          // Membuat fungsi pembatalan semua gambar pada saat upload
          // document.querySelector("#actions .cancel").onclick = function() {
          //   document.getElementById("del").style.display='none';
          //   myDropzone.removeAllFiles(true);
          // };
          function myFunction() {
            console.log('delete');
            document.getElementById("del").style.display='none';
            }
        </script>

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