<html>
<?php echo $this->tag->stylesheetLink('css/sidebar.css'); ?>
<?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
	<?php echo $this->tag->stylesheetLink('css/font-awesome.min.css'); ?>
<?php echo $this->tag->stylesheetLink('css/playlist.min.css'); ?>
           <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">PlayMyList</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
		   <li>
                        <a href="http://localhost/playmylist/login">Login</a>
                    </li>
		    <li>
                        <a href="http://localhost/playmylist/register">Register</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

 
<div class="container" >
    <div class="row profile" >
		<div class="col-md-3">
			<div class="profile-sidebar" style="background-color:#E8E8E8">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="img/user-icon-dark.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					
<center>					
<a href="playlist/add"> <button type="button" class="btn btn-success btn-sm"> CREATE NEW</button> </a>
</br>
</br>
<button type="button" class="btn btn-warning btn-sm">MY PLAYLISTS</button>
</center>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Home </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-play"></i>
							Play All </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
</div>
		<div class="col-md-9" >
            <div class="profile-content" style="background-color:#f9f9f9">
			   <body style="background-color:#f9f9f9">
        

        <div id="playlist-container" style="background-color:#f9f9f9">
            <ol id="playlist" >
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/beirut-nantes.mp3"
                    >
                        Beirut - Nantes
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/black_crowes-i_aint_hiding.mp3"
                    >
                        Black Crowes - I Aint Hiding
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/brian_eno-st_elmos_fire.mp3"
                    >
                        Brian Eno - St Elmos Fire
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/casey_baker-magnets.mp3"
                    >
                        Casey Baker - Magnets
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/city_and_colour-day_old_hate(live).mp3"
                    >
                        City And Colour - Day Old Hate(live)
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/city_and_colour-sleeping_sickness.mp3"
                    >
                        City And Colour - Sleeping Sickness
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/conor_oberst-ten women.mp3"
                    >
                        Conor Oberst - Ten Women
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/constantines-hard_feelings.mp3"
                    >
                        Constantines - Hard Feelings
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/damien_rice-9crimes.mp3"
                    >
                        Damien Rice - 9crimes
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/daniel_lanois-flametop_green.mp4"
                    >
                        Daniel Lanois - Flametop Green
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/daniel_lanois-sketches.mp4"
                    >
                        Daniel Lanois - Sketches
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/david_gray-aint_no_love(live).mp3"
                    >
                        David Gray - Aint No Love(live)
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/david_gray-kathleen.mp3"
                    >
                        David Gray - Kathleen
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/depeche_mode-i_feel_you.mp3"
                    >
                        Depeche Mode - I Feel You
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/devendra_banhart-angelika.mp3"
                    >
                        Devendra Banhart - Angelika
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/eddie_vedder-no_ceiling.mp3"
                    >
                        Eddie Vedder - No Ceiling
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/frightened_rabbit-good_arms_vs_bad_arms.mp3"
                    >
                        Frightened Rabbit - Good Arms Vs Bad Arms
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/frightened_rabbit-holy.m4a"
                    >
                        Frightened Rabbit - Holy
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/jimi_hendrix-all_along_the_watchtower.mp4"
                    >
                        Jimi Hendrix - All Along The Watchtower
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/john_frusciante-interior_two.mp3"
                    >
                        John Frusciante - Interior Two
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/john_frusciante-the_slaughter.mp4"
                    >
                        John Frusciante - The Slaughter
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/jose_gonzales-down_the_line.mp3"
                    >
                        Jose Gonzales - Down The Line
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/joy_division-disorder.mp3"
                    >
                        Joy Division - Disorder
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/kings_of_leon-true_love_way.mp3"
                    >
                        Kings Of Leon - True Love Way
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/kurt_vile-smoke_ring_for_my_halo.mp3"
                    >
                        Kurt Vile - Smoke Ring For My Halo
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/luke_doucet_mitzis.mp3"
                    >
                        Luke Doucet Mitzis
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/martin_sexton-glory_bound.mp3"
                    >
                        Martin Sexton - Glory Bound
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/matthew_good-im_a_window.mp3"
                    >
                        Matthew Good - Im A Window
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/nick_harper-bloom.mp3"
                    >
                        Nick Harper - Bloom
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/pj_harvey-shame.mp3"
                    >
                        Pj Harvey - Shame
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/radiohead-reckoner.mp3"
                    >
                        Radiohead - Reckoner
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/red_hot_chili_peppers-minor_thing.mp4"
                    >
                        Red Hot Chili Peppers - Minor Thing
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/red_hot_chili_peppers-this_velvet_glove.mp4"
                    >
                        Red Hot Chili Peppers - This Velvet Glove
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/richard_thompson-oops_i_did_it_again.mp3"
                    >
                        Richard Thompson - Oops I Did It Again
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/richard_thompson-why_must_i_plead.mp3"
                    >
                        Richard Thompson - Why Must I Plead
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/roy_harper-rushing_camelot.mp4"
                    >
                        Roy Harper - Rushing Camelot
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/roy_harper-you.mp4"
                    >
                        Roy Harper - You
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/silversun_pickups-theres_no_secrets_this_year.mp3"
                    >
                        Silversun Pickups - Theres No Secrets This Year
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/songs_ohia-lioness.mp3"
                    >
                        Songs Ohia - Lioness
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/tegan_and_sara-i_wont_be_left.mp3"
                    >
                        Tegan And Sara - I Wont Be Left
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/tegan_and_sara-walking_with_a_ghost.mp3"
                    >
                        Tegan And Sara - Walking With A Ghost
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/the_coral-dreaming_of_you.mp3"
                    >
                        The Coral - Dreaming Of You
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/wolf_parade-ill_believe_in_anything.mp3"
                    >
                        Wolf Parade - Ill Believe In Anything
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/wolf_parade-what_did_my_lover_say.mp3"
                    >
                        Wolf Parade - What Did My Lover Say
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/wolfmother-caroline.mp3"
                    >
                        Wolfmother - Caroline
                    </a>
                    <span class="track-duration"></span>
                </li>
                    <li>
                    <a href="#"
                    data-src="http://www.briandanchilla.com/briandanchilla/public/media/audio/others/yeah_yeah_yeahs-heads_will_roll.mp3"
                    >
                        Yeah Yeah Yeahs - Heads Will Roll
                    </a>
                    <span class="track-duration"></span>
                </li>
                </ol>
        </div>


</body>
      <div class="navbar navbar-default navbar-fixed-bottom" style="background-color:#484848">
    <div class="container">
      <audio preload="metadataonly"></audio>  
</div>
</div>
<?php echo $this->tag->javascriptInclude('js/jquery-2.1.1.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/audio.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/playlist.js'); ?>
            </div>
		</div>
	</div>
</div>
<center>
</center>
<br>
<br>
</html>
