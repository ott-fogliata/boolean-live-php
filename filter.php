<?php 

// lista studenti
$students = [
    [
        "name" => "Pippo",
        "surname" => "Baudo",
        "liceo" => "scientifico"
    ],
    [
        "name" => "Mimmo",
        "surname" => "Maccio",
        "liceo" => "scientifico"
    ],
    [
        "name" => "Gino",
        "surname" => "Paoli",
        "liceo" => "scientifico"
    ],
    [
        "name" => "Anna",
        "surname" => "Maccio",
        "liceo" => "classico"
    ],
    [
        "name" => "Laura",
        "surname" => "Paoli",
        "liceo" => "classico"
    ],
];

// restituire solo gli studenti del classico

/*
$result = array_filter($students, function($v, $k) {
    var_dump($k);
    var_dump($v);
}, ARRAY_FILTER_USE_BOTH);
*/

/*
$result = array_filter($students, function($v) {
    // ritorna true solo se vogliamo che l'item passi all'array finale ($result)
    if($v["liceo"] === "classico") {
        return true;
    } else {
        return false;
    }
});
*/

$liceoType = 'classico';

$result = array_filter($students, function($item) use ($liceoType) {
    // ritorna true solo se vogliamo che l'item passi all'array finale ($result)
    return $item["liceo"] === $liceoType;
});

var_dump($result);

?>

<hr/>

<?php 

$filterLiceoType = function($item) use ($liceoType) {
    // ritorna true solo se vogliamo che l'item passi all'array finale ($result)
    return $item["liceo"] === $liceoType;
}; 

$result = array_filter($students, $filterLiceoType);

var_dump($result);