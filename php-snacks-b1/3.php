<?php

/*

Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.

https://www.codepile.net/pile/R2K5d68z
*/


$posts = [

    '10-01-2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10-02-2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15-05-2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


 // 1. estrapolare l'array di chiavi (posizionale) dall'array posts
 // 2. cicliamo con il for le chiavi in maniera incrementale 0, 1, 2
 // 3. per ogni step prendiamo i valori che ci servono dall'array originale 
 // per la chiave che io sto ciclando in questo esatto momento

$postsKeys = array_keys($posts);

for($x = 0; $x < count($postsKeys); $x++) {

    $originalKey = $postsKeys[$x];
    echo "{$originalKey}<br/>";

    // var_dump($posts[$originalKey]);

    for($i = 0; $i < count($posts[$originalKey]); $i++) {
        //var_dump($posts[$originalKey][$i]);
        $post = $posts[$originalKey][$i];
        echo "<h2>{$post['title']}</h2>";
        echo "<p>{$post['text']}</p>";
        echo "<div>{$post['author']}</div><hr/>";
    }
    
   

}

