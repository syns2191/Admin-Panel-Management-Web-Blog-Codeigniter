
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


<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="<?php echo $displayPicture; ?>" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <?php echo $displayName; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('user/viewprofile'); ?>"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo base_url();?>" class=""><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
							
							<li>
                                <a id="" href="<?php echo site_url('Report/report_all');?>" class=""><i class="ion-android-note"></i><span> Report </span></a>
                            </li>
                            <li>
                                <a id="" href="<?php echo site_url('Post');?>" class=""><i class="ion-android-note"></i><span> Post </span></a>
                            </li>
							
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>