<?php

namespace Database\Factories\Models;

use App\Models\Project;
use Illuminate\Support\Str;
use Faker\Generator as Faker; 
use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $title = $faker->sentence,
        'url' => Str::slug($title),
        'description' => $faker->paragraph
    ];
});