<?php
ini_set('display_errors',1);
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

$arrayB = [];
foreach ($user as $key => $childarrvalue) {
    $arrayB[$childarrvalue["id"]] = $childarrvalue["firstname"]." ,".$childarrvalue["email"];
}

$j = array_keys($arrayB ?? []);

array_multisort($j , SORT_DESC);

echo '<pre>';




?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/style.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Array Task</title>
    </head>

    <body>
        <div id="tablearea" class="border ml-6">
            <table class="table table-hover border-0" aria-describedby="mydesc">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($arrayB as $key => $childarrvalue) { ?>
                    <tr>
                        <th scope="row">
                            <?php print_r($key); ?>
                        </th>
                        <td>
                            <?php print_r($childarrvalue); ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>
    </body>

</html>