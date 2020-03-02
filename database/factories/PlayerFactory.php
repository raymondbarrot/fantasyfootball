<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
            'id' => 1,
            'first_name' => $faker->name,
            'second_name' => $faker->name,
            'form' => $faker->randomFloat(2, 0, 9),
            'total_points' => 50,
            'influence' => $faker->randomFloat(2, 0, 9),
            'creativity' => $faker->randomFloat(2, 0, 9),
            'threat' => $faker->randomFloat(2, 0, 9),
            'ict_index' => $faker->randomFloat(2, 0, 9),

            //other columns
            'minutes' => 50,
            'goals_scored' => 10,
            'assists' => 10,
            'goals_conceded' => 5,
            'own_goals' => 5,
            'penalties_saved' => 5,
            'penalties_missed' => 5,
            'yellow_cards' => 5,
            'red_cards' => 5,
            'web_name' => $faker->name
    ];
});
