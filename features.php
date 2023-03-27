<?php
/**
 * Template Name: Features Page
 */
?>
<?php get_header(); ?>

<section>
<div class="container">
    <div class="row">
        <div class="col-lg-8 resul-busqueda">
            <h1>Destacados</h1>
        <!-- bucle -->
        <?php foreach ($noticias as $noticia) { ?>
            <div class="item d-flex flex-row mt-3 mb-3">
                <div class="w-25percent"><a href="#"><img src="<?php echo $noticia-> img ?>"></a> </div>
                <div class="w-75percent px-4"> 
                    <h2><a href="#"><?php echo $noticia-> titulo ?></a> </h1>
                    <p><?php echo $noticia-> resumen ?></p>      
                </div>
                <hr>
            </div>   
           
        <?php } ?>
        <!-- end bucle -->

            <!--paginacion-->
                <div class="paginacion-somos d-flex justify-content-center">
                         <a class="active" href="#">1</a> 
                         <a href="#">2</a>
                         <a href="#">3</a>                
                </div>
            <!--paginacion-->
        </div>

        <div class="col-lg-4 sidebar-somos">
            aqui va sidebar
        </div>
    </div>
</div>
</section>
 <?php get_footer(); ?>
