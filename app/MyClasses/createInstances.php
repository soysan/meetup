<?php
namespace App\MyClasses;

use App\MyClasses\User;
use App\MyClasses\Meeting;
use Faker\Factory as FakerFactory;

class Data {
    public static $faker;

    public function __construct()
    {
        $this->faker = FakerFactory::create();
    }

    public static function getUserArr(): array {
        $users = [];
        for($i = 0; $i < 10; $i++){
            $currUser = new User(
                Data::$faker->name,
                Data::$faker->firstName,
                Data::$faker->lastName,
                Data::$faker->gender,
                Data::$faker->birthday,
                Data::$faker->languageCode(),
                Data::$faker->languageCode(),
                Data::$faker->languageCode(),
                []
            );
            array_push($users, $currUser);
        }
        return $users;
    }

    public static function getMeetingArr(): array {
        $meetups = [];
        for($j = 0; $j < 10; $j++){
            $currMeetup = new Meeting(
                Data::$faker->name,
                Data::$faker->title(),
                Data::$faker->date(),
                Data::$faker->locale(),
                Data::$faker->languageCode(),
                Data::$faker->languageCode(),
                [],
                6,
                2
            );
            array_push($meetups, $currMeetup);
        }
        return $meetups;
    }
}