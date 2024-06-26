<?php 

//$json = file_get_contents('assets/anime.json');
//$datas = json_decode($json, true);
// print_r($datas["info"]);


$datas = [
    'jjk' => [
        'info' => [
            'title' => 'Jujutsu Kaisen',
            'author' => 'Akutami Gege',
            'slug' => 'jjk',
            'description' => 'The story of Jujutsu Kaisen is set in a world where Cursed Spirits feed on unsuspecting humans and fragments of the legendary and feared demon Ryomen Sukuna have been lost and scattered about. Should any curse consume Sukuna\'s body parts, the power they gain could destroy the world as we know it. Fortunately, there exists a mysterious school of Jujutsu Sorcerers who exist to protect the precarious existence of the living from the supernatural!',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/6/6a/Jujutsu_Kaisen_logo_in_Japan.png',
        ],
        'characters' => [
            [
                'name' => 'Yuji Itadori',
                'age' => 15,
                'height' => 173,
                'photo' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/7/75/Yuji_Itadori_%28SJ_2020-43%29.png',
            ],
            [
                'name' => 'Megumi Fushiguro',
                'age' => 16,
                'height' => 175,
                'photo' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/0/08/Megumi_Fushiguro.png',
            ],
            [
                'name' => 'Gojo Satoru',
                'age' => 29,
                'height' => 190,
                'photo' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/5/53/Satoru_Gojo_%28Full%29.png',
            ],
            [
                'name' => 'Maki Zenin',
                'age' => 16,
                'height' => 170,
                'photo' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/3/39/Maki_Zenin_%28Volume_22%29.png',
            ],
            [
                'name' => 'Toge Inumaki',
                'age' => 16,
                'height' => 170,
                'photo' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/4/41/Toge_Inumaki_with_a_megaphone.png',
            ],
            [
                'name' => 'Yuta Okkotsu',
                'age' => 17,
                'height' => 171,
                'photo' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/7/79/Yuta_Okkotsu_%28Chapter_137%29.png',
            ],
            [
                'name' => 'Fraudkuna',
                'age' => 1000,
                'height' => 180,
                'photo' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/0/07/Sukuna_%28Full%29.png',
            ],
            [
                'name' => 'Choso',
                'age' => 150,
                'height' => 181,
                'photo' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/4/49/Choso.png',
            ],
            [
                'name' => 'Kento Nanami',
                'age' => 28,
                'height' => 184,
                'photo' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/9/96/Kento_Nanami_%28Volume_11%29.png',
            ],
            [
                'name' => 'Suguru Geto',
                'age' => 27,
                'height' => 187,
                'photo' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/6/61/Suguru_Geto.png',
            ],
            [
                'name' => 'Yuki Tsukumo',
                'age' => 32,
                'height' => 190,
                'photo' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/c/c4/Yuki_Tsukumo_%28Volume_23%29.png',
            ],
        ],
    ],
    'chw' => [
        'info' => [
            'title' => 'Chainsaw Man',
            'author' => 'Fujimoto Tatsuki',
            'slug' => 'chw',
            'description' => 'When his father died, Denji was stuck with a huge debt and no way to pay it back. Thanks to a Devil dog he saved named Pochita, he\'s able to survive through odd jobs and killing Devils for the Yakuza. Pochita\'s chainsaw powers come in handy against these powerful demons. When the Yakuza betrays him and he\'s killed by the Zombie Devil, Pochita sacrifices himself to save his former master. Denji is then reborn as a Devil-Human hybrid known as Chainsaw Man.',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/4/4b/Chainsaw_Man_logo.png',
        ],
        'characters' => [
            [
                'name' => 'Denji',
                'age' => 17,
                'height' => 180,
                'photo' => 'https://static.wikia.nocookie.net/chainsaw-man/images/7/7e/Denji_anime_design_2.png',
            ],
            [
                'name' => 'Makima',
                'age' => 25,
                'height' => 172,
                'photo' => 'https://static.wikia.nocookie.net/chainsaw-man/images/d/d9/Makima_anime_design_2.png',
            ],
            [
                'name' => 'Power',
                'age' => 15,
                'height' => 168,
                'photo' => 'https://static.wikia.nocookie.net/chainsaw-man/images/a/ac/Power_anime_design_2.png',
            ],
            [
                'name' => 'Hayakawa Aki',
                'age' => 22,
                'height' => 185,
                'photo' => 'https://static.wikia.nocookie.net/chainsaw-man/images/2/2b/Aki_anime_design_2.png',
            ],
            [
                'name' => 'Himeno',
                'age' => 25,
                'height' => 170,
                'photo' => 'https://static.wikia.nocookie.net/chainsaw-man/images/9/91/Himeno_anime_design.png',
            ],
        ],
    ],
    'bsd' => [
        'info' => [
            'title' => 'Bungou Stray Dogs',
            'author' => 'Sango Harukawa',
            'slug' => 'bsd',
            'description' => 'Nakajima Atsushi was kicked out of his orphanage, and now he has no place to go and no food. While he is standing by a river, on the brink of starvation, he rescues a man who whimsically attempting suicide. That man is Dazai Osamu, and he and his partner Kunikida are members of a very special detective agency. They have supernatural powers and deal with cases that are too dangerous for the police or the military. They\'re tracking down a tiger that has appeared in the area recently, around the time Atsushi came to the area. The tiger seems to have a connection to Atsushi, and by the time the case is solved, it is clear that Atsushi\'s future will involve much more of Dazai and the rest of the detectives!',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/a/a2/Bungou_Stray_Dogs_logo.svg',
        ],
        'characters' => [
            [
                'name' => 'Osamu Dazai',
                'age' => 22,
                'height' => 181,
                'photo' => 'https://static.wikia.nocookie.net/bungostraydogs/images/2/27/Osamu_Dazai_%282023_Anime%29.png',
            ],
            [
                'name' => 'Chuya Nakahara',
                'age' => 22,
                'height' => 160,
                'photo' => 'https://static.wikia.nocookie.net/bungostraydogs/images/2/25/Chuya_Nakahara_%282023_Anime%29.png',
            ],
            [
                'name' => 'Atsushi Nakajima',
                'age' => 18,
                'height' => 170,
                'photo' => 'https://static.wikia.nocookie.net/bungostraydogs/images/1/11/Atsushi_Nakajima_%282023_Anime%29.png',
            ],
            [
                'name' => 'Ryunosuke Akutagawa',
                'age' => 20,
                'height' => 172,
                'photo' => 'https://static.wikia.nocookie.net/bungostraydogs/images/1/17/Ryunosuke_Akutagawa_%28Anime%29.png',
            ],
            [
                'name' => 'Doppo Kunikida',
                'age' => 22,
                'height' => 189,
                'photo' => 'https://static.wikia.nocookie.net/bungostraydogs/images/5/51/Doppo_Kunikida_%282023_Anime%29.png',
            ],
        ],
    ],
    'sxf' => [
        'info' => [
            'title' => 'Spy x Family',
            'author' => 'Endou Tatsuya',
            'slug' => 'sxf',
            'description' => '\'Twilight\' is assigned possibly his hardest mission yet: Operation Strix. As part of this mission, he needs to marry and have a child in order to get close to his target Donovan Desmond. He ends up adopting Anya, a telepath, and marrying Yor, an assassin, however, all of them are hiding their identities from one another. To complete his mission, \'Twilight\' needs to get Anya enrolled in the prestigious Eden Academy so that she can get close to his target\'s son, Damian Desmond. To do that, Anya will need to become an Imperial Scholar by earning 8 Stella Stars, but the real challenge for \'Twilight\' though is making sure she doesn\'t get 8 Tonitrus Bolts and get expelled!',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/3/31/Spy_%C3%97_Family_logo.png',
        ],
        'characters' => [
            [
                'name' => 'Loid Forger',
                'age' => 28,
                'height' => 187,
                'photo' => 'https://static.wikia.nocookie.net/spy-x-family9171/images/c/cd/Loid_Forger_Anime_3.png',
            ],
            [
                'name' => 'Anya Forger',
                'age' => 6,
                'height' => 99.5,
                'photo' => 'https://static.wikia.nocookie.net/spy-x-family9171/images/f/ff/Anya_Forger_Anime.png',
            ],
            [
                'name' => 'Yor Forger',
                'age' => 27,
                'height' => 170,
                'photo' => 'https://static.wikia.nocookie.net/spy-x-family9171/images/5/53/Yor_Forger_Anime_3.png',
            ],
            [
                'name' => 'Damian Desmond',
                'age' => 6,
                'height' => 110,
                'photo' => 'https://static.wikia.nocookie.net/spy-x-family9171/images/3/35/Damian_Desmond_Anime.png',
            ],
            [
                'name' => 'Becky Blackbell',
                'age' => 6,
                'height' => 104,
                'photo' => 'https://static.wikia.nocookie.net/spy-x-family9171/images/c/c7/Becky_Blackbell_Anime.png',
            ],
        ],
    ],
];

array_push($datas["chw"]['characters'],
    [
        'name' => 'Spongebob',
        'age' => 6,
        'height' => 104,
        'photo' => 'https://id.wikipedia.org/wiki/Berkas:Spongebob-squarepants.png',
    ]
    );
?>