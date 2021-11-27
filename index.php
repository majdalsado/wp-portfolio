<?php get_header(); ?>

<nav class="navbar navbar-default navbar-home" id="navbar-example" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#about">About Me</a></li>
			<li class=""><a href="#portfolio">Portfolio</a></li>
			<li class=""><a href="#experience">Experience</a></li>
			<li class=""><a href="#education">Education</a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>

<header>
	<div class="container">
		<div class="heading-wrapper">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="info">
						<i class="icon ion-ios-location-outline"></i>
						<div class="right-area">
							<h5>Calgary, AB</h5>
							<h6>
								CANADA
							</h6>
						</div>
						<!-- right-area -->
					</div>
					<!-- info -->
				</div>
				<!-- col-sm-4 -->

				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="info">
						<i class="icon ion-ios-telephone-outline"></i>
						<div class="right-area">
							<h5>+1 (780) 807-0176</h5>
							<h6>
								MST HOURS
							</h6>
						</div>
						<!-- right-area -->
					</div>
					<!-- info -->
				</div>
				<!-- col-sm-4 -->

				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="info">
						<i class="icon ion-ios-chatboxes-outline"></i>
						<div class="right-area">
							<h5><?= get_option('email');?></h5>
							<H6>
								REPLY WITHIN 1 DAY
							</H6>
						</div>
						<!-- right-area -->
					</div>
					<!-- info -->
				</div>
				<!-- col-sm-4 -->
			</div>
			<!-- row -->
		</div>
		<!-- heading-wrapper -->

		<a class="download-btn" href="#" data-toggle="tooltip" data-placement="bottom"
			title="Currently Unavailable!">Download Brief CV</a>
	</div>
	<!-- container -->
</header>
<a href="#about" class="scroll-down">
	<i class="ion-chevron-down"></i>
</a>

<section class="intro-section triangle-parallax">
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-lg-2"></div>
			<div class="col-md-10 col-lg-8">
				<div class="intro">
					<div class="profile-img">
						<img class="img-circle" src="<?= get_bloginfo('template_directory'); ?>/images/profile-1.jpg"
							alt="portait photo">
					</div>
					<h1 class="profile-name">
						<b>Majd Alsado</b>
					</h1>
					<h2 class="font-yellow profile-role"><?= get_option('titlerole'); ?></h2>
					<ul class="information margin-tb-30">
					</ul>
					<ul class="social-icons">
						<li>
							<a href="<?= get_option('linkedin'); ?>" target="_blank" rel="noreferrer">
								<i class="ion-social-linkedin"></i>
							</a>
						</li>
						<li>
							<a href="<?= get_option('instagram'); ?>" target="_blank" rel="noreferrer">
								<i class="ion-social-instagram"></i>
							</a>
						</li>
						<li>
							<a href="<?= get_option('facebook'); ?>" target="_blank" rel="noreferrer">
								<i class="ion-social-facebook"></i>
							</a>
						</li>
						<li>
							<a href="<?= get_option('github')?>" target="_blank" rel="noreferrer">
								<i class="ion-social-github"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- intro -->
			</div>
			<!-- col-sm-8 -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->
</section>
<!-- intro-section -->

<!-- about-section -->
<section class="about-section section pb-1" id="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 center-text">
				<div class="heading mb-2">
					<h3 style="text-align: center;">
						<b>Who am I</b>
					</h3>
				</div>
			</div>
			<!-- col-sm-3 -->
			<div class="col-sm-12 col-md-12">
				<p class="margin-b-30 text-center"><?=get_option('bio')?></p>
				<hr>
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center mb-4"><b>What I'm best at</b></h4>
						<ul class="skills margin-b-30 single">
							<li id="learning"><span class="strength">Quick Learner</span></li>
							<li id="innovate"><span class="strength">Innovation</span></li>
							<li id="communication"><span class="strength">Communication</span></li>
							<li id="teamwork"><span class="strength">Teamwork</span></li>
						</ul>
						<h4 class="text-center mb-4"><b>What I speak</b></h4>
						<ul class="skills margin-b-30">
							<li><span class="skill">English</span><span class="strength">Fluent</span></li>
							<li><span class="skill">Arabic عربي</span><span class="strength">Fluent</span></li>
							<li><span class="skill">Japanese 日本語</span><span class="strength">Beginner</span></li>
							<li><span class="skill">Russian Pусский</span><span class="strength">Read/Write</span>
							</li>
						</ul>
					</div>
					<div class="col-md-9">
						<h4 class="text-center mb-4"><b>Where I've been</b></h4>
						<div id="mapdiv" style="width: 100%; height: 450px;"></div>
					</div>
				</div>
				<hr>
				<div id="engineering-skills">
					<h4 class="text-center mb-4"><b>Business Skills</b></h4>
					<ul class="skills margin-b-30" style="columns:2; -webkit-columns-break-inside: avoid;">
						<li>
							<span class="skill">Presentation Skills</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
							</span>
						</li>
						<li>
							<span class="skill">Interpersonal & Communication Skills</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
							</span>
						</li>
						<li>
							<span class="skill">Working a Team</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
							</span>
						</li>
						<li>
							<span class="skill">Project Management</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">Working with Clients</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">Market Research</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">Analytical Acumen</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">Tableau</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">Alteryx</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">Certified ScrumMaster</span>
							<span class="strength">
								<span>Attained</span>
							</span>
						</li>
					</ul>
				</div>
				<hr>
				<div id="development-skills">
					<h4 class="text-center mb-4"><b>Technology Skills</b></h4>
					<ul class="skills margin-b-30" style="columns:2; -webkit-columns-break-inside: avoid;">
						<li>
							<span class="skill">Microsoft Certified: Azure Fundamentals</span>
							<span class="strength">
								<span>Attained</span>
							</span>
						</li>
						<li>
							<span class="skill">Cloud Computing</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-half"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">HTML/CSS/JS</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
							</span>
						</li>
						<li>
							<span class="skill">Sass</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-half"></span>
							</span>
						</li>
						<li>
							<span class="skill">jQuery</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">PHP</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">SQL</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">Wordpress</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">Bootstrap</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">Python</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-half"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">PHP</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-half"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">SEO</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-half"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">MVC Architecture</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-half"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">REST APIs</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-half"></span>
								<span class="ion-ios-star-outline"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">VBA</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-half"></span>
								<span class="ion-ios-star-outline"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
						<li>
							<span class="skill">C (Arduino)</span>
							<span class="strength">
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star"></span>
								<span class="ion-ios-star-outline"></span>
								<span class="ion-ios-star-outline"></span>
								<span class="ion-ios-star-outline"></span>
							</span>
						</li>
					</ul>
				</div>
			</div>
			<!-- col-sm-6 -->

		</div>
		<!-- row -->
	</div>
	<!-- container -->
</section>

<section class="quote-section triangle-parallax center-text">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<i class="icon ion-quote"></i>
				<h3><b>One's <span class="font-yellow">destination</span> is never a place,</b></h3>
				<h3><b> but a <span class="font-yellow">new </span>
						way of seeing things. </b></h3>
				<h4>Henry Miller</h4>
			</div><!-- col-sm-12 -->
		</div><!-- row -->
	</div><!-- container -->
</section>

<section class="portfolio-section section pb-2" id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="heading">
					<h3>
						<b>Portfolio</b>
					</h3>
					<h6 class="font-lite-black">
						<b>MY WORK</b>
					</h6>
				</div>
			</div>
			<!-- col-sm-4 -->
			<div class="col-sm-8">
				<div class="portfolioFilter clearfix margin-b-80">
					<a href="#" data-filter="*" class="current">
						<b>ALL</b>
					</a>
					<?php
						$args = array('post_type'=> 'projects');              

						$the_query = new WP_Query( $args );
						if($the_query->have_posts() ){
							$cats = array(
								array('name' => 'Web Design', 'slug' => 'web-design'),
								array('name' => 'Engineering', 'slug' => 'engineering'), 
								array('name' => 'Other', 'slug' => 'other')
							);

							foreach($cats as $cat):?>

					<a href="#" data-filter=".<?= $cat['slug'] ?>" class="">
						<b>
							<?= $cat['name'] ?>
						</b>
					</a>
					<?php endforeach; } ?>
				</div>
				<!-- portfolioFilter -->
			</div>
			<!-- col-sm-8 -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->



	<div class="portfolioContainer">

		<?php
	while ( $the_query->have_posts() ){
		$the_query->the_post(); 
	?>
		<!-- Put projects here -->
		<div class="p-item <?= get_the_category()[0]->slug; ?>">
			<a href="#" data-id="<?= get_the_ID() ?>" class="init-fb project-link">
				<img src="<?= get_field('gallery')[0]['sizes']['medium_large'] ?>"
					alt="<?=get_field('gallery')[0]['alt']?>">
				<h4 class="card-img-overlay p-item-caption" style="z-index:2"><?php the_title(); ?></h4>
			</a>
			<div class="overlay"></div>
		</div>
		<?php } ?>
	</div>
	<!-- portfolioContainer -->

</section>
<!-- portfolio-section -->

<div id="projectModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header navbar-portfolio"><button class="navbar-link modal-close" data-dismiss="modal"><i
						class="ion-ios-arrow-back"></i> Back</button></div>
			<div class="modal-body" style="padding:0"></div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var ajaxurl = "<?= admin_url( 'admin-ajax.php' ); ?>";
	jQuery(function ($) {
		$('.project-link').on('click', function (e) {
			e.preventDefault();
			$('.modal-body').html(
				'<div class="text-center" style="height:50rem; padding-top:10rem;"><img style="width:200px;" src="/wp-content/themes/alsado/images/Pacman-1.3s-200px.svg"></div>'
			);
			$('#projectModal').modal();
			var data = {
				'action': 'load_project',
				'project': $(this).data('id'),
				'security': '<?= wp_create_nonce("load_project"); ?>'
			};

			$.post(ajaxurl, data, function (response) {
				if (response != '') {
					$('.modal-body').html(response);
					$('#projectModal').modal();
				}
			});
		});
		$('#projectModal').on('hidden.bs.modal', function () {
			$('.modal-body').html('');
		});
	});
</script>

<section class="experience-section section triangle-parallax" id="experience">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="heading">
					<h3>
						<b>Experience</b>
					</h3>
					<h6 class="font-lite-black">
						<b>PREVIOUS ROLES</b>
					</h6>
				</div>
			</div>
			<!-- col-sm-4 -->
			<div class="col-sm-8">

				<?php
					$args = array('post_type'=> 'jobs', 'orderby' => array(
						'date' =>'DESC',
						'menu_order'=>'ASC'
					   ));         

					$the_query = new WP_Query( $args );
					if($the_query->have_posts() ){
						while ( $the_query->have_posts() ){
							$the_query->the_post(); 
					?>
				<!-- Put Experience Here -->
				<div class="experience margin-b-50">
					<h4>
						<b><?php the_title(); ?></b>
					</h4>
					<h5 class="font-yellow">
						<b><?= get_post_meta(get_the_ID(), 'company', true) ?></b>
					</h5>
					<h6><?=get_post_meta(get_the_ID(),'location', true)?></h6>
					<h6 class="margin-t-10"><?= get_post_meta(get_the_ID(), 'dates', true) ?></h6>
					<?php the_content() ?>
				</div>
				<!-- experience -->
				<?php } }	?>

			</div>
			<!-- col-sm-8 -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->

</section>
<!-- experience-section -->

<section class="education-section section" id="education">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="heading">
					<h3>
						<b>Education</b>
					</h3>
					<h6 class="font-lite-black">
						<b>ACADEMIC CAREER</b>
					</h6>
				</div>
			</div>
			<!-- col-sm-4 -->
			<div class="col-sm-8">
				<div class="education-wrapper">
					<!-- education -->
					<div class="education margin-b-50">
						<h4>
							<b>BSC IN CIVIL ENGINEERING (CO-OP)</b>
						</h4>
						<h5 class="font-yellow">
							<b>UNIVERSITY OF ALBERTA</b>
						</h5>
						<h6>EDMONTON, AB, CANADA</h6>
						<h6 class="font-lite-black margin-t-10">2015 - 2020</h6>
						<p class="margin-tb-30"></p>
						<ul class="list margin-b-30">
							<li>Maintained Academic First Class Standing throughout all years.</li>
							<li>Awarded 10+ scholarships throughout my degree.</li>
						</ul>

					</div>
					<!-- education -->
					<div class="education margin-b-50">
						<h4>
							<b>EXCHANGE PROGRAM</b>
						</h4>
						<h5 class="font-yellow">
							<b>NATIONAL UNIVERSITY OF SINGAPORE</b>
						</h5>
						<h6>SINGAPORE</h6>
						<h6 class="font-lite-black margin-t-10">JANUARY 2019 - MAY 2019</h6>
						<p class="margin-tb-30">Participated in exchange program abroad at the prestigious National
							University of Singapore for 4 months under University of Alberta Go Abroad.</p>
						<ul class="list margin-b-30">
							<li>Awarded Rod & Judith Fraser International Undergraduate Learning Scholarship.</li>
							<li>Travelled to 5 countries across Asia.</li>
							<li>Explored new cultures and learned valuable life lessons.</li>
						</ul>
						<h5 class="font-yellow margin-b-20"><b>Courses Taken:</b></h5>
						<ul class="list margin-b-30">
							<li>RE 1705 - Real Estate Finance and Accounting</li>
							<li>GET 1001 - Seeing the World Through Maps</li>
							<li>LAJ 1201 - Japanese I</li>
						</ul>

					</div>

				</div>
				<!-- education-wrapper -->
			</div>
			<!-- col-sm-8 -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->

</section>
<!-- experience-section -->

<?php get_footer(); ?>