<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductImage;
use Faker\Generator as Faker;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        //http://placeimg.com/250/250/tech/sepia
        //'image'=> "$faker->imageURL(250,250,"cats")",
        //'image'=> $faker->imageURL(250,250,"cats"),
        'image'=> "http://placeimg.com/250/250/tech?".$faker->numberBetween(1,1000),
        'product_id'=>$faker->numberBetween(1,100)
    ];
});
