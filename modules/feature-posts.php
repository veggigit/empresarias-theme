<?php
$args = [
    'posts_per_page' => 6,
    'category_name' => 'destacados',
    'post_status' => 'publish'
];

$feturePosts = new WP_Query($args);
?>
<section class="destacados-loop">
    <h1> Destacados</h1>
    <div class="glide d-block">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php
                if ($feturePosts->have_posts()):
                    while (have_posts()): the_post(); ?>
                        <li class="glide__slide">
                            <div class="row">
                                <div class="col-lg-8 mt-6 vertical-align">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_excerpt() ?></p>
                                    <a class="leermas" href="#"> Leer más</a>
                                </div>
                                <div class="col-lg-4">
                                    <img class="foto-descatada" src="<?php echo get_the_post_thumbnail_url() ?>">
                                </div>
                            </div>
                        </li>
                        <?php
                    endwhile;
                else:
                    foreach($postsDestacados as $pd)
                        {?>
                        <li class="glide__slide">
                            <div class="row">
                                <div class="col-lg-8 mt-6 vertical-align">
                                    <h2><?php echo $pd->titulo ; ?></h2>
                                    <p><?php echo $pd->resumen ?></p>
                                    <a class="leermas" href="#"> Leer más</a>
                                </div>
                                <div class="col-lg-4">
                                    <img class="foto-descatada" src="<?php echo get_template_directory_uri() . '/assets/images/fake-post-destacados/'.rand(1,3).'.png' ?>">
                                </div>
                            </div>
                        </li>
                    <?php }endif; ?>
            </ul>
        </div>
        <div data-glide-el="controls" class="control-posicion">
            <button class="arrow-link" data-glide-dir="<">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arrow-left.png' );?>" 
                width="60" height="40">
            </button>
            <button class="arrow-link" data-glide-dir=">">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arrow-right.png' );?>"
                width="60" height="40">
            </button>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    new Glide('.glide',{}).mount();
</script>