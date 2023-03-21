<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ini_set("display_errors",1);
    echo "<h1>File handling</h1>";
    echo "<br>";
    //echo  readfile("test.txt");
   
    $mtfile = fopen("test.txt", "r")or die("Unable to open file!");
    echo "<h1>fopen()</h1>";
    echo fread($mtfile, filesize("test.txt"));
    echo "<br>";
    fclose($mtfile);

    $gtfile = fopen("test.txt", "r")or die("Unable to open file!");
    echo "<h1>gfile()</h1>";
    echo "<br>"; echo "<br>";
    echo fgets($gtfile);

    fclose($gtfile);
    echo "<br>"; echo "<br>";
    echo "<h1>file()</h1>";
    $arrrayfile = file("test.txt");
    echo '<pre>';
    print_r($arrrayfile);

    $fileappend = fopen("test.txt","a")or die("Unable fille oneping");
    $txt ="<br>I m a appended test from write method";
    echo "<h1>fwrite()</h1>";
    fwrite($fileappend, $txt);
    fclose($fileappend);

    //$strfile = fopen("test.txt", "r")or die("Uanable to load");
    $inopnstr = file_get_contents("test.txt");
    echo "<h1>file_get_contents()</h1>";
    echo $inopnstr;
    //fclose("test.txt");

    
    ?>
</body>
</html>

