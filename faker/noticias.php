<?php
$faker = Faker\Factory::create();

$noticias = [];
for ($i = 0; $i < 5; $i++) {
    $categoria = $faker->word;
    $item = (object)[
        'titulo' => $faker->text(80),
        'resumen' => $faker->text(200),
        'img' => 'https://placekitten.com/g/1000/1000',
        'categoria' => $categoria,
        'miga' => 'inicio >' . $categoria
    ];
    array_push($noticias, $item);
  }
?>