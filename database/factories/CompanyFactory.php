<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
	$name = $faker->unique()->name;
    return [
        // 'user_id' => $faker->randomElement($user),
        // 'tea_id' => $faker->number,
        'name' =>$name,
        'email' => $name.'crm.com',
        // 'logo' => ,
        'website' => $name.'co.ke',
    ];
});
