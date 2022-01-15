<?php

namespace Database\Factories;

use App\Models\Category;
use Faker\Generator as Faker;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    $factory->define(Category::class, function (Faker $faker) 
    {
        return [
        'name' => $faker->name,
        'description' => $faker->realText(100),
        'parent_id' => 1,
        'menu' => 1,
        ];
    });