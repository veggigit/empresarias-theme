<?php
/*
 * Template Name: Single Empresarias
 * Template Post Type: post
 */

get_header();  ?>

<?php
/**
 * suffice_before_body_content hook
 */
do_action( 'suffice_before_body_content' ); ?>

<!--14MARZO-->
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <!--14MARZO-->
        <?php do_shortcode('[breadcrumbs_empr]'); ?>
        <!--14MARZO-->

	<?php
	$idDeGaleria = get_field ("galeria_de_fotos");

	if(!empty($idDeGaleria) && is_numeric($idDeGaleria)){
		$phoBlockShortCode = "[photoblocks id=$idDeGaleria]";
		echo do_shortcode( $phoBlockShortCode );
	}
	?>
<?php //echo get_field ("galeria_de_fotos"); ?> 

<?php
        $postTerms = get_the_terms( get_the_ID(),'category' );
        $elRubro = array(
		'name'=>'Rubro',
		'id'=>0,
		'url'=>'/',
	);
        $laRegion = array(
                'name'=>'Region',
                'id'=>0,
                'url'=>'/',
        );
        //print("<pre style='color:black;'>".print_r($laRegion,true)."</pre>");
        foreach ( $postTerms as $postTerm ){
                if ($postTerm->parent == 20){
			$elRubro['url'] = get_term_link( $postTerm->term_id );
                        $elRubro['name'] = $postTerm->name;
                        $elRubro['id'] = $postTerm->term_id;
		}
		else if ($postTerm->parent == 3){
                        $laRegion['url'] = get_term_link( $postTerm->term_id );
                        $laRegion['name'] = $postTerm->name;
                        $laRegion['id'] = $postTerm->term_id;
                }
        }

	$iconos = array(
		22 => 'bi bi-geo-alt',
		21 => 'bi bi-gift',
	);
	//print("<pre style='color:black;'>".print_r($elRubro,true)."</pre>");
	//print("<pre style='color:black;'>".print_r($iconos,true)."</pre>");
	//$elIcono = "bi bi-geo-alt";
	$elIcono = $iconos[$elRubro['id']];
	//print("<pre style='color:black;'>".print_r($elIcono,true)."</pre>");
?>

<!--14 MARZO 4-->
    <div class="row float-end">
        <div class="col-12 mb-4 mt-4 new-cat-empresarias">
        <?php echo get_field ("region_rubro"); ?>

        </div>
    </div>
<!--14 MARZO 4-->


<!--14 MARZO 2--> 
<div class="clearfix"></div>
<!--14 MARZO 2-->

<!--14 MARZO 3-->
<div class="row gx-5">

  <div class="col-lg-4 bajada-entrevista pt-bajada"><?php echo get_field ("bajada_entrevista"); ?></div>

<div class="col-lg-8">
  <div class="row">
    <h1 class="nombre-empresaria"><?php echo get_field ("nombre_empresaria"); ?> </h1>
    <h2 class="nombre-empresa"><?php echo get_field ("nombre_empresa"); ?></h2>
  </div>

<div class="row">

  <div class="col-lg-6 columnas-entrevistas"><?php echo get_field ("columna_1"); ?> </div>
 
  <div class="col-lg-6 columnas-entrevistas"><?php echo get_field ("columna_2"); ?> </div>
<span class="fecha-entrevista"> <?php echo get_field ("fecha_entrevista"); ?></span> 
</div>


<div class="row mt-4 mb-4">
  <?php echo get_field ("link_youtube"); ?>
</div>

<div class="row mt-4 mb-4">
        <div class=" d-flex flex-row">
                <div class="seccion-rrss mr-4"> Más sobre <strong> <?php echo get_field ("nombre_empresa"); ?></strong>  
                        <?php
                        if(get_field ("link_facebook") !== ''){
                        ?>
                        <a class="align-middle" href="<?php echo get_field ("link_facebook"); ?>" target="_blank"> <img src="/somosempresarias/wp-content/uploads/sites/7/2023/03/icon-facebook.png" height="30" width="30" alt="icon facebook">  </a>
                        <?php } ?>

                        <?php
                        if(get_field ("link_instagram") !== ''){
                        ?>
                        <a class="align-middle" href="<?php echo get_field ("link_instagram"); ?>" target="_blank"> <img src="/somosempresarias/wp-content/uploads/sites/7/2023/03/icon-instagram.png" height="30" width="30" alt="icon facebook">  </a>
                        <?php } ?>

                        <?php
                        if(get_field ("link_twitter") !== ''){
                        ?>
                        <a class="align-middle" href="<?php echo get_field ("link_twitter"); ?>" target="_blank"> <img src="/somosempresarias/wp-content/uploads/sites/7/2023/03/icon-twitter.png" height="30" width="30" alt="icon facebook">  </a>
                        <?php } ?>
                        <?php
                        if(get_field ("link_sitio_web") !== ''){
                        ?>
                        <a class="align-middle" href="<?php echo get_field ("link_sitio_web"); ?>" target="_blank"> <img src="/somosempresarias/wp-content/uploads/sites/7/2023/03/icon-web.png" height="30" width="30" alt="icon facebook">  </a>
                        <?php } ?>
                </div>
        </div>
</div>

</div>
</div>
<!--14 MARZO 3-->
<?php
        while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', get_post_format() );

                the_post_navigation();

                // If related post is active, then show related posts.
                if ( true == suffice_get_option( 'suffice_blog_single_show_related', true ) ) {
                        get_template_part( 'template-parts/related/related', 'post' );
                }

                /**
                 * suffice_before_comments_template hook
                 */
                do_action( 'suffice_before_comments_template' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                        comments_template();
                endif;

                /**
                 * suffice_after_comments_template hook
                 */
                do_action( 'suffice_after_comments_template' );

        endwhile; // End of the loop.
        ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
/**
 * suffice_after_body_content hook
 */
do_action( 'suffice_after_body_content' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
