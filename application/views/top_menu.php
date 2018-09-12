
<?php 
  $data = file_get_contents(site_url('notification/notif')); 
  $listNotif_json = file_get_contents(site_url('notification/listNotif')); 
  $badge = json_decode($data, true);
  $listNotif = json_decode($listNotif_json, true);
  $allNotif = $listNotif['listNotif'];
  $c= $badge['badgenotif'];
?>

<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
$displayName = ($this->session->userdata['logged_in']['displayName']);
$displayPicture = ($this->session->userdata['logged_in']['displayPicture']);
} else {
// header("location:" .base_url());
}
?>
<link href="<?php echo base_url('assets/green/css/chat.css');?>" rel="stylesheet" />
<div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true" id="getComment">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger" id="jumlah"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <span id="notifi"></span>
                                        <li class="list-group">
                                          <a href="<?php echo site_url('notification/allNotif'); ?>" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="addClass" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo $displayPicture;?>" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="<?php echo site_url('User_Authentication/logout'); ?>"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>

            <script src="<?php echo base_url('assets/green/js/jquery.min.js');?>"></script>
            <script type="text/javascript">
             function ambilKomentar(){
             $.ajax({
                type: "POST",
                url: "<?php echo site_url('notification/notif'); ?>",
                dataType:'json',
                success: function(response){
                  // console.log('totalNotif',response);
                 var badge;
                 if(response.badgenotif >0){
                  badge = response.badgenotif;
                 }
                 else{
                  badge="";
                 }
                 $("#jumlah").text(""+badge+"");
                 timer = setTimeout("ambilKomentar()",5000);
                }
               });  
            }


            $(document).ready(function(){
             ambilKomentar();
            });
          </script>

          <script type="text/javascript">
            $(function() {
              var flag=1;
                $('#getComment').click(function() {
                  // $("#notifi").remove();
                  if(flag == 2){
                        secondClick(); flag = 1;
                    }else{
                        firstClick(); flag = 2;
                    }
                    
                });

                function firstClick(){
                  // flag=2;
                  $("#notifi").empty();
                  console.log('flag',flag);
                  $.ajax({
                    type:"POST",
                    url:"<?php echo site_url('notification/readNotif'); ?>",
                    dataType:'json',
                    success: function(response){
                      // console.log(response);
                    }
                  });

                  $.ajax({
                      type:"POST",
                      url:"<?php echo site_url('notification/listNotif'); ?>",
                      dataType:'json',
                      success: function(response){
                       console.log(response.listNotif.length);
                       var class1="fa fa-comment fa-2x text-info";
                        for(var i=0; i<response.listNotif.length; i++){
                          var li = "<li "+"class="+"list-group"+">";
                          var li2 = "</li>";
                          var link = "<a href="+"<?php echo site_url('comment/view_detail'); ?>"+"/"+response.listNotif[i].idtarget+" class="+"list-group-item"+">";
                          var media = "<div "+"class="+"media"+">";
                          var pull = "<div "+"class="+"pull-left>";
                          // var em = "<em "+"class="+class1+"></em>";
                          var em = '<em class="fa fa-comment fa-2x text-info"></em>';
                          var pull2 = "</div>";
                          // var mediabody = "<div "+"class="+"media-body clearfix"+">";
                          var mediabody = '<div class="media-body clearfix">';
                          var mediahead = "<div "+"class="+"media-heading"+">"+response.listNotif[i].user;
                          var mediahead2 = "</div>";
                          var p = "<p class="+"m-0"+">";
                          var small="<small>"+"comment in this post"+"</small>";
                          var p2 = "</p>";

                          var mediabody2 = "</div>";
                          var media2 = "</div>";
                          var link2 = "</a>";
                          $("#notifi").append(li+link+media+pull+em+pull2+mediabody+mediahead+mediahead2+p+small+p2+mediabody2+media2+link2);
                          // $("#notifi").trigger("change");
                        }
                       
                      }
                    });
                }

                function secondClick(){
                  // flag=1;
                   // $("#notifi").empty();
                   var el = $("#notifi");
                   console.log('flag',flag);
                   console.log('el',el);
                }
                // console.log('flag',flag);
            });
        </script>


       