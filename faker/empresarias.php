<?php
$faker = Faker\Factory::create();

$empresarias = [];
for ($i = 0; $i < 6; $i++) {
    $name = $faker->name;
    $item = (object)[
        'titulo' => $name,
        'id_galeria' => 1,
        'bajada' => $faker->text(200),
        'nombre' => $name,
        'empresa' => $faker->text(10),
        'columna_1' => $faker->text(300),
        'columna_2' => $faker->text(300),
        'fecha_entrevista' => '10 septiembre',
        'facebook' => 'https://www.facebook.com/' . $name,
        'instagram' => 'https://www.instagram.com/' . $name,
        'linkedin' => 'https://www.linkedin.com/' . $name,
        'youtube_video' => 'https://www.youtube.com/watch?v=M9slbMGuKKg',
        'resumen' =>  $faker->text(180),
        'img' => 'https://placekitten.com/g/1000/1000'

    ];
    array_push($empresarias, $item);
  }
?>