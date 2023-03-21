<?php
 ini_set("display_errors",1);
class User {
   
  // Properties
  public $name;
  public $email;

  // Methods
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
}
$student1 = new User();
$student2 = new User();

$student1->set_name("XYZ");
$student2->set_name("ABC");

echo $student1->get_name();
echo '<br>';
echo $student2->get_name();


echo "<br> <p>=================================================</p>";

class User1
{
  public $name;
  public $email;

  function __construct($name)
  {
	$this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
}

$userObj = new User1(10);

echo $userObj->get_name();

echo "<br> <p>=================================================</p>";


class User2 {
  public $name;
  public $email;

  function __construct($name)
  {
	$this->name = $name;
  }
  function __destruct()
  {
    echo "The fruit is {$this->name}.";
  }
}

$userObj = new User2("ABC");


class User3
{
  public $name;
  protected $email;
  private $gender;
}

$userObj = new User3();
$userObj->name = 'Mango'; // OK
// $userObj->email = 'Yellow'; // ERROR
// $userObj->gender = '300'; // ERROR

echo "<br> <p>=================================================</p>";

class A
{
    public function printItem($string)
    {
        echo ' Hi : ' . $string;
        echo '<br>';
    }
    public function printPHP()
    {
        echo 'I am from valuebound' . PHP_EOL;
        echo '<br>';
    }
}
class B extends A {
    public function printItem($string)
    {
        echo 'Hi: ' . $string . PHP_EOL;
        echo '<br>';
    }
    public function printPHP()
    {
        echo "I am from ABC";
        echo '<br>';
    }
 }
 $a = new A();
 $b = new B();
 $a->printItem('Raju');
 $a->printPHP();
 $b->printItem('savan');
 $b->printPHP();

 echo "<br> <p>=================================================</p>";

class Aa {
	public function myage()
    {
	return  ' age is 80';
	}
}
class Bb extends Aa
{
	public function mysonage()
    {
	return  ' age is 50';
	}
}
class C extends Bb {
	public function mygrandsonage()
    {
	return  'age is 20';
	   }
       public function myHistory()
       {
       echo "Class Aa " .$this->myage();
       echo '<br>';
       echo "Class Bb ".$this-> mysonage();
       echo '<br>';
       echo "Class C " . $this->mygrandsonage();
       }
}
$obj = new C();
$obj->myHistory();

echo "<br> <p>=================================================</p>";
?>