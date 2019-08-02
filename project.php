<div class="project-title text-center">
    <h1><?=get_the_title()?></h1>
    <h4><span class="curly-braces">{</span><?= get_the_category()[0]->name ?><span class="curly-braces">}</span></h4>
</div>
<section class="project">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="gallery-carousel owl-carousel owl-theme">
                    <?php foreach( get_field("gallery") as $img): ?>
                    <img class="owl-lazy" data-src="<?=$img["sizes"]["medium_large"]?>" alt="<?=$img["alt"]?>" />
                    <?php endforeach;?>
                </div>
                <script>
                    $(document).ready(function () {
                        $(".gallery-carousel").owlCarousel({
                            items: 1,
                            lazyLoad: true,
                            lazyLoadEager: 1,
                            loop: true,
                            autoplay: true,
                            margin: 10
                        });
                    });
                </script>
            </div>
            <div class="col-md-4">
                <div class="heading">
                    <h4><b>Brief Facts</b></h4>
                </div>

                <div class="stats">
                    <?=get_field('stats')?>

                </div>
            </div>
            <div class="col-md-12" style="margin-top:1rem">
                <?php
		// For web design, show the technologies carousel
		if(get_the_category()[0]->name == 'Web Design'){
        ?>
                <h4 class="heading"><b>Technologies</b></h4>
                <div class="tech-carousel owl-carousel  owl-theme">
                    <?php foreach(get_field('technologies') as $tech): ?>
                    <img class="img-responsive"
                        src="<?=get_template_directory_uri()?>/images/technologies/<?=$tech?>.png" title="<?=$tech?>"
                        alt="<?=$tech?> logo">
                    <?php endforeach; ?>
                </div>
                <script>
                    $(document).ready(function () {
                        $(".tech-carousel").owlCarousel({
                            items: 10,
                            loop: true,
                            autoplay: true,
                            smartSpeed: 500,
                            dots: true,
                            autoHeight: false,
                            margin: 10,
                            responsiveClass: true,
                            responsive: {
                                0: {
                                    items: 4
                                },
                                600: {
                                    items: 6
                                },
                                1000: {
                                    items: 10
                                }
                            }
                        });
                    });
                </script>
                <?php
		} else {
        ?>
                <h4><b>Description</b></h4>
                <p><?= apply_filters( 'the_content', get_the_content() ) ?></p>
                <?php
        }
        ?>
            </div>
        </div>
    </div>
</section>