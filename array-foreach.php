<?php

$names = [
    'pippo',
    'gino',
    'laura',
    'anna'
];

foreach($names as $name) {
    echo $name . ' ';
}

?>

<hr/>

<?php

$userDetails = [
    "city" => "Taranto",
    "age" => 34,
    "name" => "Ottavio"
];


foreach($userDetails as $key => $userDetail) {
    echo "{$key}: {$userDetail}<br/>";
}