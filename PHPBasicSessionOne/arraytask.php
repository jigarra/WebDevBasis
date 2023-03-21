<?php
echo "<br>";
$user = array(
    array(
        "id" => 1,
        "firstname" => "Developer",
        "email" => "dev@gmail.com"
    ),
    array(
        "id"=> 2,"firstname"=> "Fernan",
        "email"=> "fer@gmail.com"
    ),
    array(
        "id"=> 3,
        "firstname"=> "Ivan",
        "email"=> "iam70@gmail.com"
    ),
    array(
        "id"=> 4,
        "firstname"=> "Tourell",
        "email"=> "tour@gmail.com"
    ),
    array(
        "id"=> 5,
        "firstname"=> "Galbert",
        "email"=> "grc49@gmail.com"
    ),
    array(
        "id"=> 6,
        "firstname"=> "Jay",
        "email"=> "mjb3@gmail.com"
    ),
    array(
        "id"=> 7,
        "firstname"=> "Tony",
        "email"=> "treca@gmail.com"
    ),
    array(
        "id"=> 8,
        "firstname"=> "Jose",
        "email"=> "jose.e.gon@gmail.com"
    ),
    array(
        "id"=> 9,
        "firstname"=> "Geo",
        "email"=> "george@gmail.com"
    ),
    array(
        "id"=> 10,
        "firstname"=> "monica",
        "email"=> "monica.manzon@gmail.com"
    )
);
print_r($user[9]['firstname']);
echo "<br>";
$sortarr = krsort($user);
print_r($sortarr);


foreach ($user as $key => $childarrvalue) {
    print_r("<br>".$childarrvalue);
    
    echo "<br>";
    foreach ($childarrvalue as $key => $value) {
        print_r("|".$key." => ".ucfirst($value)."|<br>");
    }
}
?>