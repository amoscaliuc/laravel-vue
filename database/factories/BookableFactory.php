 <?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookable;
use Faker\Generator as Faker;

$factory->define(Bookable::class, function (Faker $faker) {
    $suffix = [
        'Villa',
        'House',
        'Cottage',
        'Luxury Villas',
        'Cheap House',
        'Rooms',
        'Cheap Rooms',
        'Luxury Rooms',
        'Fancy Rooms'
    ];

    return [
        'title' => $faker->city . ' ' . \Illuminate\Support\Arr::random($suffix),
        'description' => $faker->text()
    ];
});
