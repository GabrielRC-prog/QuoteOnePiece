<?php

$quotes = [
    [
        "text" => "Eu não quero conquistar nada, só acho que a pessoa com mais liberdade do mundo é o rei dos piratas!",
        "author" => "Monkey D. Luffy",
        "image" => "https://www.themarysue.com/wp-content/uploads/2022/04/One-Piece-1015-Luffy-Roger.jpg?fit=1200%2C675"
    ],
    [
        "text" => "Os sonhos das pessoas... não têm fim!",
        "author" => "Marshall D. Teach, o Barba Negra",
        "image" => "https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/04/one-piece-barba-negra.jpg"
    ],
    [
        "text" => "Não aconteceu nada...",
        "author" => "Roronoa Zoro",
        "image" => "https://wallpapers.com/images/featured/zoro-evd4js2kc5e55zli.jpg"
    ],
    [
        "text" => "Se apontou a pistola, você apostou sua vida.",
        "author" => "Shanks",
        "image" => "https://images4.alphacoders.com/133/thumb-1920-1338628.png"
    ],
    [
        "text" => "Alguém que quer fazer parte da tripulação do futuro rei dos piratas não pode ser intimidado por uma mera Younko!",
        "author" => "Jinbe",
        "image" => "https://criticalhits.com.br/wp-content/uploads/2022/08/One-Piece-Jinbe-Best-Attack-910x455.jpg"
    ],
    [
        "text" => "O One Piece existe!",
        "author" => "Edward Newgate, o Barba Branca",
        "image" => "https://preview.redd.it/87ni6geihla61.png?width=640&crop=smart&auto=webp&s=48ee5156d9636602f492282c4d34bfcbcaa6351f"
    ],
    [
        "text" => "Eu quero viver! Me levem para o mar com vocês!!",
        "author" => "Nico Robin",
        "image" => "https://i0.wp.com/bitsebaits.com/wp-content/uploads/2024/03/robin-eu-quero-viver.jpg?resize=640%2C360&ssl=1"    
    ],
    [
        "text" => "Oden não seria Oden... Se não fosse fervido! ",
        "author" => "Kozuki Oden",
        "image" => "https://i.ytimg.com/vi/vmowFc92tVo/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLAb3_wp0FrMURY0-yuJ6O2BiekLJw"
    ],
    [
        "text" => "Quando você acha que uma pessoa morre? Quando ela leva um tiro de um canhão? Não. Quando é atingida por uma doença? Não. Quando come uma sopa de cogumelos venenosos? Não! Uma pessoa morre... quando é esquecida!",
        "author" => "Dr. Hiluluk",
        "image" => "https://i0.wp.com/bitsebaits.com/wp-content/uploads/2024/09/Dr.-Hiluluk.jpg?resize=640%2C360&ssl=1"
    ],
    [
        "text" => "A morte é o que completa uma pessoa.",
        "author" => "Kaido",
        "image" => "https://pbs.twimg.com/media/Fdgh-kdX0AETdBg.jpg"
    ],
    [
        "text" => "Crianças que não sabem o que é a paz e crianças que nunca viram uma guerra têm valores diferentes. Quem quer que esteja no topo pode decidir o que é certo e o que é errado.",
        "author" => "Donquixote Doflamingo",
        "image" => "https://preview.redd.it/doflamingo-wallpaper-engine-customizable-a-little-bit-v0-qrgnbbongi0b1.gif?width=640&crop=smart&format=png8&s=6ef851260a8316513df4ebd21ab2761713556591"
    ],
    [
        "text" => "Existem coisas que você não pode ver a menos que você mude sua perspectiva.",
        "author" => "Trafalgar D. Water Law",
        "image" => "https://media.tenor.com/UbWFw3sA9r4AAAAe/trafalgar-law-room-law-luffy-kid.png"
    ],
    [
        "text" => "Existem três coisas que não podem ser interrompidas: o sonho dos homens, o fluxo do tempo e a vontade herdada.",
        "author" => "Gol D. Roger",
        "image" => "https://img.anime2you.de/2022/11/gold-roger.jpg"
    ],
    [
        "text" => "Meu tesoruo? quiserem, podem pega-lo. Procurem-no! Eu deixei tudo naquele lugar!",
        "author" => "Gol D. Roger",
        'image' => "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/92dc41d9-3e98-4010-a39f-e87a33468720/dh5iilw-4fda7cb6-747f-4495-b125-d191e152129c.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzkyZGM0MWQ5LTNlOTgtNDAxMC1hMzlmLWU4N2EzMzQ2ODcyMFwvZGg1aWlsdy00ZmRhN2NiNi03NDdmLTQ0OTUtYjEyNS1kMTkxZTE1MjEyOWMuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.gfoHwUPcL30gPzmRAK976F-gMJrnvFsPck5V4sE14ts"
    ]
];

$random_quote = $quotes[array_rand($quotes)];

// Ajuste os cabeçalhos
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

// Retorne a quote como JSON
echo json_encode($random_quote);

?>
