<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
	$company=App\Company::pluck('id')->toArray();
	$coname=App\Company::pluck('name')->toArray();
    $email = $faker->randomElement($coname);
	$name = $faker->unique()->name;
    return [
    	'first_name' => $faker->name,
        'last_name' => $faker->name,
        'company_id' =>$faker->randomElement($company),
        // 'email' => $name.$email.'crm.com',
        'email' => $name.$email.'crm.com',
        'phone' => $faker->phoneNumber
    ];
});