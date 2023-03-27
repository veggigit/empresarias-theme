<?php
/**
 * Template Name: Search Page
 */
?>
<?php get_header(); ?>

<section>
<div class="container">
    <div class="row">
        <div class="col-lg-8 resul-busqueda">

            <form class="row g-3 mt-4">
                <div class="col-sm-10">
                  <label for="search" class="visually-hidden">Password</label>
                  <input type="search" class="form-control form-control-somos" id="inputPassword2">
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-main mb-3">Buscar</button>
                </div>
              </form>


            <h1>Resultado de la búsqueda</h1>
        <!-- bucle -->

        <?php foreach ($noticias as $noticia) { ?>
            <div class="item d-flex flex-row mt-3 mb-3">
                <div class="w-25percent"><a href="#"><img src="<?php echo $noticia-> img ?>"></a> </div>
                <div class="w-75percent px-4"> 
                    <a class="migas" href="#"><?php echo $noticia-> miga ?></a>    
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
