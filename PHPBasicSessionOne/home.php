<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>TaskOne </title>
    </head>

    <body>
        <div class="main">
            <form method="post" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">1: Check Number In Even Odd</label>
                    <input type="number" class="form-control" name="oddeven" value="" id="exampleInputEmail1">
                </div>
                <button type="submit" name="oddevenBtn" class="btn btn-primary">Submit</button>
            </form>
            <div class="card mt-4">
                <div class="card-body">
                    <?php
                        if (isset($_POST['oddevenBtn'])) {
                            $number = $_POST["oddeven"];
                            if ($number%2==0) {
                                echo "Yes ".$number." is Even";
                            } else {
                                echo "Yes ".$number." is Odd";
                            }
                        }
                    ?>
                </div>
            </div>
            <form class="mt-3" id="form2" method="post">
                <div class="mb-3">
                    <label for="exampleInputnumber" class="form-label">2: Reverse Number</label>
                    <input type="number" class="form-control" name="reverce" value="" id="exampleInputnumber">
                </div>
                <button type="submit" name="reverseBtn" class="btn btn-primary">Submit</button>
            </form>
            <div class="card mt-4">
                <div class="card-body">
                    <?php
                    if (isset($_POST['reverseBtn'])) {
                        $revercenum = $_POST["reverce"];
                        $convertStr = (string)$revercenum;
                        echo strrev($convertStr);
                    }
                    ?>
                </div>
            </div>
            <form class="mt-3" method="post">
                <div class="mb-3">
                    <label for="exampleInputyear" class="form-label">3 : Year</label>
                    <input type="number" class="form-control" name="year" value="" id="exampleInputyear">
                </div>
                <button type="submit" name="yearBtn" class="btn btn-primary">Submit</button>
            </form>
            <div class="card mt-4">
                <div class="card-body">
                    <?php
                    if (isset($_POST['yearBtn'])) {
                        $leapyear =$_POST["year"];
                        if ((0 == $leapyear % 4) & (0 != $leapyear % 100) | (0 == $leapyear % 400)){
                            echo "$leapyear This is Leap  year";
                        } else {
                            echo "$leapyear This is Not Leap  year";
                        }
                    }
                    ?>
                </div>
            </div>
            <form class="mt-3" method="post">
                <div class="mb-3">

                    <label for="lstltr" class="form-label">4 : Enter String</label>
                    <input type="text" class="form-control" name="lastletter" value="" id="lstltr">
                </div>
                <button type="submit" name="lstlerBtn" class="btn btn-primary">Submit</button>
            </form>
            <div class="card mt-4">
                <div class="card-body">
                    <?php
                    if (isset($_POST['lstlerBtn'])) {
                        $lstltr =$_POST["lastletter"];
                        echo substr($lstltr,-3);
                    }
                    ?>
                </div>
            </div>
            <form class="mt-3" method="post">
                <div class="mb-3">

                    <label for="revstr" class="form-label">5 : Enter String & Reverse IT</label>
                    <input type="text" class="form-control" name="revstr" value="" id="revstr">
                </div>
                <button type="submit" name="revstrBtn" class="btn btn-primary">Submit</button>
            </form>

            <div class="card mt-4">
                <div class="card-body">
                    <?php
                    if (isset($_POST['revstrBtn'])) {
                        $inpStr = $_POST['revstr'];
                        $inpStrArray = explode(" ", $inpStr);
                        $revArr = array_reverse($inpStrArray);
                        echo  $revStr = implode(" ", $revArr);
                    }
                    ?>
                </div>
            </div>

            <form class="mt-3" method="post">
                <div class="mb-3">

                    <label for="Paragrapth" class="form-label">6 : Enter Paragrapth</label>
                    <input type="text" class="form-control" name="paragrapth" value="" id="Paragrapth">

                    <label for="revstr" class="form-label">Enter Index</label>
                    <input type="text" class="form-control" name="indexarr" value="" id="revstr">
                </div>
                <button type="submit" name="endprg" class="btn btn-primary">Submit</button>
            </form>

            <div class="card mt-4">
                <div class="card-body">
                    <?php
                    if (isset($_POST['endprg'])) {
                        $inpStr = $_POST['paragrapth'];
                        $inxedarr = $_POST['indexarr'];

                        $inpStrArray = explode(" ", $inpStr);
                        print_r($inpStrArray);
                        echo "<br>";
                        $search = array_search($inxedarr, $inpStrArray);
                        echo "Find at index".$search;
                    }
                    ?>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>