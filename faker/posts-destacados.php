<?php
$faker = Faker\Factory::create();

$postsDestacados = [];
for ($i = 0; $i < 6; $i++) {
    $item = (object)[
        'titulo' => $faker->text(80),
        'resumen' => $faker->text(200),
        'img' => get_the_post_thumbnail_url() . '/assets/images/fake-post-destacados/'.rand(1,3).'.png',
        'categoria' => 'destacados',
        'miga' => 'inicio >' . $categoria
    ];
    array_push($postsDestacados, $item);
  }
?>