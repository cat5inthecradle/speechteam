<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Team::class, function (Faker\Generator $faker) {
    include database_path('factories') . '/includes/adjectives.php';
    include database_path('factories') . '/includes/nouns.php';

    $adjective = function() use ($adjectives) {
        return $adjectives[array_rand($adjectives)];
    };
    $noun = function() use ($nouns) {
        return $nouns[array_rand($nouns)];
    };

    return [
        'title' => ucwords('The ' . $adjective() . ' ' . $noun())
    ];

    return [
        'title' => $faker->randomElement([
            'Founder Of The North',
            'Defender Of The Forest',
            'Boys Of Eternity',
            'Peasants Of The Plague',
            'Peons And Bringers',
            'Rats And Wives',
            'Product Of History',
            'Vengeance With Silver Hair',
            'Battle The Commander',
            'Searching For The Darkness',
            "Tree Of Winter",
            "Alien Of My Imagination",
            "Nymphs Of Sorrow",
            "Wolves Of Sorrow",
            "Invaders And Mice",
            "Mages And Heroes",
            "Future Of The Era",
            "Loss Without Time",
            "Whispers In My Leader",
            "Searching In The Past",
            "Spider In The Lake",
            "Blacksmith In The Mountains",
            "Slaves Of The Galaxy",
            "Vultures Of The Sun",
            "Enemies And Boys",
            "Knights And Owls",
            "Puzzle Of A Star",
            "Appearance Of An Insect",
            "Expert In The Depths",
            "Luck Of The World",
            "Leaders Of The Past",
            "Horses Of The Oceans",
            "Reptiles Of The Swamp",
            "Enemies Of Heaven",
            "Athletes And Amphibians",
            "Freaks And Children",
            "Wealth Of The Revolution",
            "Phones In Your Garden",
            "Excellence Of Your Family",
            "Harmful People",
            "Commander Of The Void",
            "Assassin Of Darkness",
            "Mercenaries Of The Worlds",
            "Foreigners Of Earth's Legacy",
            "Volunteers And Invaders",
            "Intruders And Cyborgs",
            "Signs On My Ship",
            "Destiny Of Death",
            "Abandoned On The New Planet",
            "Joy Of A Nuclear War",
            "Veteran With A Spaceship",
            "Creature With Spaceships",
            "Droids Of Our Ship",
            "Women In The Portal",
            "Women And Droids",
            "Martians And Pilots",
            "Culling Of The Droids",
            "End Of The Droids",
            "Disguised In Time Travel",
            "Mystery Of Technology",
            "Enemy Of Nature",
            "Hydra Without Glory",
            "Hobgoblins Of Perfection",
            "Wolves Without Shame",
            "Foes And Rogues",
            "Warlocks And Warriors",
            "Statue Of Autumn",
            "Fruit Without Shame",
            "Raised By The Phantoms",
            "Winning Time",
        ]),
    ];
});
