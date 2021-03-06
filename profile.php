<?php include 'components/authentication.php' ?> 
<?php include 'components/session-check-profile.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?> 
<?php include 'controllers/base/style.php' ?>
<?php 
    if($_GET["follow"]=="same"){
        $dialogue="Your can't follow yourself! ";
    }
?>
    <script>
        $.growl("<?php echo $dialogue; ?> ", {
            animate: {
                enter: 'animated zoomInDown',
                exit: 'animated zoomOutUp'
            }								
        });
    </script>
<?php 
    session_start();
    $current_user = $_SESSION['user_username'];
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $profile_username=$rws['user_username'];
?>
<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<div class="profile">
	<div class="row clearfix">
		<!-- <div class="col-xs- col-sm-3 column"> -->
            <div>
                <center>
                    <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="mtops bcircle img-responsive profile-avatar">
                </center>
                <h1 class="text-center profile-text profile-name whitecol capitalize"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></h1>
                <h1 class="text-center profile-text profile-profession whitecol capitalize"><?php echo $rws['user_profession'];?></h1>
                <br>
                <div class="panel-group white widthfix dshadow mtopn" id="panel-profile">
                    <div class="panel panel-default">
                        <div id="panel-element-info" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="col-md-8 column centered">
                                    <p class="text-center profile-title"><i class="fa fa-id-card-o"></i> Basic</p>
                                    <hr>
                                    <?php
                                        if ($rws['user_shortbio']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details"> Bio</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <p><?php echo $rws['user_shortbio'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_email']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details"> Email</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">                                    
                                            <p><?php echo $rws['user_email'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_country']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details"> Country</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <p><?php echo $rws['user_country'];?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-4 centered column">
                                    <p class="centered profile-title"><i class="fa fa-info"></i> Personal</p>
                                    <hr>
                                    <?php
                                        if ($rws['user_gender']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details"> Gender</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <p><?php echo $rws['user_gender'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_dob']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details"> DOB</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <p><?php echo $rws['user_dob'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_address']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details"> Address</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <p><?php echo $rws['user_address'];?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group white widthfix dshadow " id="panel-profile">
                    <div class="panel panel-default">
                        <div id="panel-element-info" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p class="text-center profile-title"><i class="fa fa-graduation-cap"></i> Education</p>
                                <hr/>
                                <div class="col-md-6 column centered">
                                    <?php
                                        if ($rws['user_university']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details">University:</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <p><?php echo $rws['user_university'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_course']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details">Course:</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">                                    
                                            <p><?php echo $rws['user_course'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_graduation_year']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details">Graduation:</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">                                    
                                            <p><?php echo $rws['user_graduation_year'];?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6 column centered">
                                    <?php
                                        if ($rws['user_cgpa']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details">CGPA</p>
                                        </div>
                                       <div class="col-xs-12 col-sm-9">                                    
                                            <p><?php echo $rws['user_cgpa'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_course_field']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details">Field:</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">                                    
                                            <p><?php echo $rws['user_course_field'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_extra']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details">Extra:</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">                                    
                                            <p><?php echo $rws['user_extra'];?></p>
                                        </div>
                                    <?php } ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    if ($rws['user_achievement_title']){
                ?> 
                 <div class="panel-group white widthfix dshadow " id="panel-profile">
                    <div class="panel panel-default">
                        <div id="panel-element-info" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p class="text-center profile-title"><i class="fa fa-trophy"></i> Achievement</p>
                                <hr/>
                                <div class="col-md-6 column centered">
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details">Title:</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <p><?php echo $rws['user_achievement_title'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_achievement_issuer']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details">Issuer:</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">                                    
                                            <p><?php echo $rws['user_achievement_issuer'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_achievement_link']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details">Link:</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">                                    
                                            <p><?php echo $rws['user_achievement_link'];?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6 column centered">
                                    <?php
                                        if ($rws['user_achievement_date']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details">Date:</p>
                                        </div>
                                       <div class="col-xs-12 col-sm-9">                                    
                                            <p><?php echo $rws['user_achievement_date'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_achievement_description']){
                                    ?>   
                                        <div class="col-xs-12 col-sm-3">
                                            <p class="profile-details">Description:</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">                                    
                                            <p><?php echo $rws['user_achievement_description'];?></p>
                                        </div>
                                    <?php } ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group white widthfix dshadow " id="panel-profile">
                    <div class="panel panel-default">
                        <div id="panel-element-info" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p class="text-center profile-title"><i class="fa fa-share-square-o"></i> Social profiles</p>
                                <hr/>
                                <div class="col-md-4 column centered">
                                    <?php
                                        if ($rws['user_facebook']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-facebook"></i></p>
                                        </div>
                                        <div class="col-xs-10">
                                            <p><?php echo $rws['user_facebook'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_twitter']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-twitter"></i></p>
                                        </div>
                                        <div class="col-xs-10">                                    
                                            <p><?php echo $rws['user_twitter'];?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-4 column centered">
                                    <?php
                                        if ($rws['user_linkedin']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-linkedin"></i></p>
                                        </div>
                                       <div class="col-xs-10">                                    
                                            <p><?php echo $rws['user_linkedin'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_github']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-github"></i></p>
                                        </div>
                                        <div class="col-xs-10">                                    
                                            <p><?php echo $rws['user_github'];?></p>
                                        </div>
                                    <?php } ?>
                                    </div>
                                    <div class="col-md-4 column centered">
                                    <?php
                                        if ($rws['user_skype']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-skype"></i></p>
                                        </div>
                                        <div class="col-xs-10">                                    
                                            <p><?php echo $rws['user_skype'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_website']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-star-o"></i></p>
                                        </div>
                                        <div class="col-xs-10">                                    
                                            <p><?php echo $rws['user_website'];?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
		<!-- </div> -->
	</div>
</div>