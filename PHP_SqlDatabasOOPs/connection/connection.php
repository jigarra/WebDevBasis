<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'root');
define('DBNAME', 'mySite');

class DB_con
{
    function __construct()
    {
        $conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DBNAME);
        $this->dbh = $conn;
        if (mysqli_connect_error()) {
            echo "Not connect". mysqli_connect_error();
        }
    }
    function insert($fname, $lname, $email, $password, $address, $country, $state, $city, $zipcode, $filename) {
        $insertdata = mysqli_query($this->dbh, "INSERT INTO MyGuests(firstname, lastname, email, password,Address, Country, State, City, zip,image) VALUES ('$fname','$lname','$email','$password','$address','$country','$state','$city','$zipcode','$filename')");
        return $insertdata;
    }
    public function fetchdata()
	{
        $result = mysqli_query($this->dbh, "select * from MyGuests");
        return $result;
	}

    public function fetchonerecord($userid)
	{
	$oneresult = mysqli_query($this->dbh, "select * from MyGuests where id=$userid");
	return $oneresult;
	}

    public function update($firstname, $lastname, $email, $password, $address, $country, $state, $city,$zipcode, $filename, $user_id)
	{
        $updaterecord = mysqli_query($this->dbh, "UPDATE `MyGuests` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`Address`='$address',`Country`='$country',`State`='$state',`City`='$city',`zip`='$zipcode',`image`='$filename' WHERE `id`='$user_id'");
        return $updaterecord;
	}

    public function delete($rid)
	{
        $deleterecord = mysqli_query($this->dbh, "delete from MyGuests where id=$rid");
        return $deleterecord;
	}

    public function login($uname, $pass)
    {
        $login = mysqli_query($this->dbh, "SELECT * FROM register WHERE email='$uname' AND password='$pass'");
        return $login;
    }

    public function register($fname, $lname, $email, $phone, $password)
    {
        $register = mysqli_query($this->dbh, "INSERT INTO register(firstname, lastname, email, phone, password) VALUES ('$fname','$lname','$email','$phone','$password')");
        return $register;
    }
    public function fetcheRegister($email)
	{
        $result = mysqli_query($this->dbh, "select * from register WHERE email= '$email'");
        return $result;
	}
}
?>