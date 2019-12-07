<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Category;
use App\Product;
use App\Pelanggan;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        //'id_kategori' => $faker->id_kategori,
        'nama' => $faker->name,
    ];
});

$factory->define(Product::class, function (Faker $faker) {
    return [
    	//'id_produk' => $faker->produk,
        //'id_kategori' => $faker->id_kategori,
        'id_kategori'=>$faker->numberBetween(1,20),
        'nama' => $faker->name,
        'harga' => $faker->randomNumber,
    ];
});

$factory->define(Pelanggan::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'no_hp' => $faker->phoneNumber,
        'alamat' => $faker->address,
    ];
});
