<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
	'role' => $faker->word,
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Restaurant::class, function (Faker $faker) {
    //static $password;

    return [
        'title' => $faker->sentence,
 	'type' => $faker->word,
 	'description' => $faker->text,
 	'status' => $faker->boolean,
	'image' => $faker->imageUrl($width = 640, $height = 480),
 	'user_id' => $faker->numberBetween($min = 1, $max = 100),
    ];
});


$factory->define(App\Category::class, function (Faker $faker) {
    //static $password;

    return [
        'title' => $faker->sentence,
 	'description' => $faker->text,
 	'status' => $faker->boolean,
	'image' => $faker->imageUrl($width = 640, $height = 480),
 	'user_id' => $faker->numberBetween($min = 1, $max = 100),
	'restaurant_id' => $faker->numberBetween($min = 1, $max = 100),
    ];
});


$factory->define(App\Seat::class, function (Faker $faker) {
    //static $password;

    return [
        'title' => $faker->sentence,
	'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
 	'description' => $faker->text,
 	'status' => $faker->boolean,
	'image' => $faker->imageUrl($width = 640, $height = 480),
 	'user_id' => $faker->numberBetween($min = 1, $max = 100),
	
    ];
});



$factory->define(App\Customer::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
	'email' => $faker->safeEmail,
	'address' => $faker->address,
	'city' => $faker->city,
	'phone' => $faker->e164PhoneNumber,
	'password' => $password ?: $password = bcrypt('secret'),
	//'remember_token' => str_random(10),
    ];
});



$factory->define(App\Booking::class, function (Faker $faker) {
    //static $password;

    return [
        'total' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
	'status' => $faker->boolean,
	'payment' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
	'change' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
	'cashIn' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
 	'customer_id' => $faker->numberBetween($min = 1, $max = 100),
	
    ];
});



$factory->define(App\Comment::class, function (Faker $faker) {
    //static $password;

    return [
        'title' => $faker->sentence,
 	'description' => $faker->text,
 	'status' => $faker->boolean,
	'rate' => $faker->numberBetween($min = 1, $max = 5),
	'image' => $faker->imageUrl($width = 640, $height = 480),
 	'customer_id' => $faker->numberBetween($min = 1, $max = 25),
	'booking_id' => $faker->numberBetween($min = 10, $max = 45),

    ];
});


$factory->define(App\SeatCategory::class, function (Faker $faker) {
    //static $password;

    return [
        'discount' => $faker->numberBetween($min = 1, $max = 100),
 	'category_id' => $faker->numberBetween($min = 1, $max = 100),
	'seat_id' => $faker->numberBetween($min = 1, $max = 100),

    ];
});


$factory->define(App\BookingCategory::class, function (Faker $faker) {
    //static $password;

    return [

 	'category_id' => $faker->numberBetween($min = 1, $max = 100),
	'booking_id' => $faker->numberBetween($min = 50, $max = 125),

    ];
});


$factory->define(App\BookingSeat::class, function (Faker $faker) {
    //static $password;

    return [

 	'seat_id' => $faker->numberBetween($min = 1, $max = 100),
	'booking_id' => $faker->numberBetween($min = 50, $max = 150),

    ];
});

$factory->define(App\BookingUser::class, function (Faker $faker) {
    //static $password;

    return [

 	'user_id' => $faker->numberBetween($min = 10, $max = 150),
	'booking_id' => $faker->numberBetween($min = 50, $max = 120),
	'type' => $faker->word,

    ];
});


