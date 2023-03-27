<?php
$arr = [
    'post_type' => 'empresarias',
    'posts_per_page' => 6,
    'status' => 'publish'
];

$customPosts = new WP_Query($arr);  
?>
<section>
    <div class="container">
        <div class="row mx-4">
            <?php
            if($customPosts->have_posts()) :
                while ( $customPosts->have_posts() ) : $customPosts->the_post();?>
                <div class="col-lg-4 box-home-empr">
                    <img src="mujer.png" class="card-img-top" alt="...">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php echo get_field('nombre_empresaria') ?></h2>
                    <p>
                        <?php the_excerpt() ?>
                        <a href="#"> Ver más</a>
                    </p>
                </div>
                <?php endwhile;
                else:
                foreach($empresarias as $fake) { ?>
                    <div class="col-lg-4 box-home-empr">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/fake-empresarias/'.rand(1,2).'.jpg' ?>" class="card-img-top" alt="...">
                        <h1><?php echo $fake->titulo; ?></h1>
                        <h2><?php echo $fake->empresa; ?></h2>
                        <p>
                            <?php echo $fake->bajada ?>
                            <a href="#"> Ver más</a>
                        </p>
                    </div>
                <?php } ?>
            <?php endif; ?>
        </div>
        <div class="row justify-content-center">
            <a href="#" class="btn-main w-25 text-center mt-4 mb-4">Ver todas</a>
        </div>
    </div>
</section>