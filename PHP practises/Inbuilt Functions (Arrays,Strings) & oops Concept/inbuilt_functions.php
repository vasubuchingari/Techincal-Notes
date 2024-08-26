
<?php
echo "<pre>";
// echo "Name:" . $_GET['username'] . "&nbsp;&nbsp;&nbsp;Mobile Number:" . $_GET['mobile_number'] . "&nbsp;&nbsp;&nbsp;&nbsp; Email:" . $_GET['email']. "&nbsp;&nbsp;&nbsp;&nbsp;Pincode:" . $_GET['pincode'];
// echo "<br>";
// echo "<br>";

echo "<h2>PHP-STRING INBUILT FUNCTIONS & CONCEPTS</h2>";
echo "<h4>STRLEN</h4>";
echo strlen("Hello World!");
echo "<br>";


echo "<h4>STR-WORD-COUNT</h4>";
echo str_word_count("Hello World");
echo "<br>";



echo "<h4>STRPOS</h4>";
echo strpos("Hello World", "World");
echo "<br>";



echo "<h4>STRTOLOWER</h4>";
$a = "Hello World!";
echo strtolower($a);
echo "<br>";
echo "<br>";
echo "<br>";




echo "<h4>STR-REPLACE</h4>";
$x = "Hello World! i am python language that is dynamically typed";
$search = "that";
$replace = "php";
echo str_replace($search, $replace, $x);
echo "<br>";





echo "<h4>TRIM</h4>";
$x = "    Hello    World!    ";
echo trim($x);
echo ("<br>");




echo "<h4>SUM</h4>";
function Sum($x, $y)
{
    $z = $y + $x;
    return ($z);
}
echo "sum of (5,10) =" . Sum(5, 10);
echo "<br>";
echo "sum of (10,16) =" . Sum(10, 16);
echo "<br>";
echo "sum of (20,30) =" . Sum(20, 30);
echo "<br>";
echo "<br>";




echo "<h4>ADD</h4>";
#pass by reference argument
function add(&$val)
{
    $val = $val + 10;
}
$num = 10;
echo "initial num value is $num <br>";
add($num);
echo "update value of num is $num <br>";
echo "<br>";





echo "<h4>SUM OF TOTAL</h4>";
#function if we dont know the how many arguments we pass
function sumofmynumbers(...$nums)
{
    $tot = 0;
    $leng = count($nums);
    for ($i = 0; $i < $leng; $i++) {
        $tot = $tot + $nums[$i];
    }
    return $tot;
}
$a = sumofmynumbers(10, 20, 30, 40);
echo $a;
echo "<br>";





echo "<h4>FIRST NAME & LAST NAME</h4>";
function myfamily($lastname, ...$firstname)
{
    $txt = "";
    $len = count($firstname);
    for ($i = 0; $i < $len; $i++) {
        $txt = $txt . "HI, $firstname[$i] $lastname . <br>";
    }
    return $txt;
}
$a = myfamily("bu", "vs", "as", "dv");
echo $a;





echo "<h4>ADD NUMBER</h4>";
function addnumb(float $a, float $b): float
{
    return $a + $b;
}
echo addnumb(1.2, 5.2);




echo "<h2>PHP-ARRAY INBUILT FUNCTIONS & CONCEPTS</h2>";
echo "<h4>print list</h4>";
$cars = array("volvo", "BMW", "toyoto");
print_r($cars);
echo "<br>";



echo "<h4>ARRAY-PUSH</h4>";
$cars = array("volvo", "BMW", "Toyoto");
foreach ($cars as $x) {
    echo "$x <br>";
}
array_push($cars, "Ford");
print_r($cars);
echo "<br>";




echo "<h4>print array</h4>";
$car = array("brand" => "ford", "model" => "Mustang", "year" => 1964);
print_r($car);




echo "<h4>print  model,year in the array</h4>";
echo $car["model"];
$car["year"] = 2002;
echo "<br>";
echo $car["year"];
echo "<br>";





echo "<h4>print keys & values</h4>";
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}
echo "<br>";






echo "<h4>print keys & values</h4>";
$frnds = [
    "monin" => "moye moye",
    "govi" => "history repeats",
    "gun" => "vundu status pettestha",
    "hem" => "maruthi sir",
    "vomm" => "pilla na koduku",
];
foreach ($frnds as $x => $y) {
    echo "$x : $y <br>";
}





echo "<h4>Append into the list</h4>";
$cars = [];
$cars[0] = "tata1";
$cars[1] = "tata2";
$cars[2] = "tata2";
$cars[3] = "tata2";

print_r($cars);
echo "<br>";





echo "<h4>Add into the list</h4>";
$fruits = [];
$fruits[0] = "apple";
$fruits[1] = "banana";
$fruits[2] = "cherry";
$fruits["fruits"] = "guava";
print_r($fruits);
echo "<br>";





echo "<h4>List fetch</h4>";
$cars = ["volvo", "BMW", "Toyoto"];
echo $cars[2];
echo "<br>";




echo "<h4>Get year from the list</h4>";
$cars = [
    "brand" => "tata",
    "model" => "nano",
    "year" => "2003"
];
echo "<br>";
echo $cars["year"];
echo "<br>";

// function demo()
// {
//     echo "i come from a function";
// }
// echo "<br>";




echo "<h4>UNSET referenced(&)</h4>";
$cars = ["volvo", "BMW", "Toyoto"];
//as it references it cannot be removed
foreach ($cars as &$x) {
    $x = "ford";
}
unset($x); //clears the memory reference removes the item itself
print_r($cars);
echo "<br>";


echo "<h4>UNSET bmw</h4>";
$cars = [
    "volvo", "bmw", "toyoto"
];
unset($cars[1]);
print_r($cars);
echo "<br>";





echo "<h3>ARRAY-SPLICE</h3>";
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
print_r($cars);
echo "<br>";
echo "<br>";



echo "<h3>UNSET (model)</h3>";
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
print_r($cars);
echo "<br>";





echo "<h3>ARRAY-COLUMNS</h3>";
$records = [
    ["id" => 1, "name" => "john", "age" => 26],
    ["id" => 2, "name" => "jane", "age" => 30],
    ["id" => 3, "name" => "jos", "age" => 43]
];
$names = array_column($records, "name");
print_r($names);
echo "<br>";
echo "<br>";
$id = array_column($records, "id");
print_r($id);
echo "<br>";




echo "<h3>ARRAY-COMBINE</h3>";
$keys = ["a", "b", "c"];
$values = [1, 2, 3];
$combined = array_combine($keys, $values);
print_r($combined);
echo "<br>";




echo "<h3>ARRAY-COUNT-VALUES</h3>";
$colors = ["yello", "red", "pink", "green", "green", "pink", "green"];
$counted = array_count_values($colors);
print_r($counted);
echo "<br>";





echo "<h3>ARRAY-DIFF</h3>";
$array1 = [1, 2, 3, 4, 5, 6];
$array2 = [3, 4, 5, 6, 7];
$arr_diff = array_diff($array1, $array2);
print_r($arr_diff);
echo "<br>";





echo "<h3>ARRAY-KEY-EXISTS</h3>";
$user = ["name" => "vasu", "age" => "14"];
if (array_key_exists("name", $user)) {
    echo "name exists";
} else {
    echo "no such name";
}
echo "<br>";




echo "<h3>ARRAY-KEYS</h3>";
$ages = ["john" => 30, "jas" => 40, "zooa" => 45];
$keys = array_keys($ages);
print_r($keys);
echo "<br>";





echo "<h3>ARRAY-MERGE</h3>";
$fruits1 = ["apple", "banana", "orange"];
$fruits2 = ["grape", "kiwi", "orange"];
$mergedFruits = array_merge($fruits1, $fruits2);
print_r($mergedFruits);
echo "<br>";




echo "<h3>ARRAY-SUM</h3>";
$numbers = [1, 2, 3, 4, 5, 7];
$sum_of = array_sum($numbers);
print_r($sum_of);
echo "<br>";




echo "<h3>ARRAY-UNIQUE</h3>";
$numbers = [1, 2, 3, 4, 4, 4, 4, 6, 7];
$unq_numbers = array_unique($numbers);
print_r($unq_numbers);
echo "<br>";




echo "<h3>ARRAY-COMPACT</h3>";
$name = "vasy";
$age = 12;
$city = "nellore";
$data = compact("name", "age", "city");
print_r($data);
echo "<br>";





echo "<h3>ARRAY-COUNT</h3>";
$numbers = [1, 2, 3, 4, 5];
$count = count($numbers);
echo $count;
echo "<br>";




echo "<h3>ARRAY-(SHUFFLE)</h3>";
$cards = ["Ace", "King", "Queen", "Jack", "10", "9", "8"];
shuffle($cards);
print_r($cards);
echo "<br>";



echo "<h3>SORT</h3>";
$numbers = [4, 2, 8, 6, 3];
sort($numbers);
print_r($numbers);
echo "<br>";




echo "<h3>RSORT</h3>";
$numbers = [4, 2, 8, 6, 3];
rsort($numbers);
print_r($numbers);
echo "<br>";





echo "<h3>ASORT</h3>";
$ages = ["John" => 25, "Alice" => 30, "Bob" => 20];
//sorts an associative array in ascending order, according to the value
asort($ages);
print_r($ages);
echo "<br>";




echo "<h3>ARSORT</h3>";
$ages = ["John" => 25, "Alice" => 30, "Bob" => 20];
arsort($ages);
print_r($ages);
echo "<br>";




echo "<h3>KSORT</h3>";
$ages = ["John" => 25, "Alice" => 30, "Bob" => 20];
//sort an array in ascending order according to its key values.
ksort($ages);
print_r($ages);
echo "<br>";





echo "<h3>KRSORT</h3>";
$ages = ["John" => 25, "Alice" => 30, "Bob" => 20];
krsort($ages);
print_r($ages);
echo "<br>";





echo "<h3>USORT</h3>";
function customSort($a, $b)
{
    return strlen($a) - strlen($b);
}
$names = ["John", "Alice", "Bob"];
//sorts an array by values using a user-defined comparison function.
usort($names, "customSort");
print_r($names);
echo "<br>";




echo "<h3>UASORT</h3>";
function custom($a, $b)
{
    return $a - $b;
}
$numbers = ["John" => 25, "Alice" => 30, "Bob" => 20];
//used to sort an array such that array indices maintain their correlation with the array elements 
//they are associated with, using a user-defined comparison function
uasort($numbers, "custom");
print_r($numbers);















//LEARN CLASSES IN PHP
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h2>PHP-OOPS-CONCEPT</h2>";
class MyClass
{
    public $publicProperty = 'Public property';
    public function publicMethod()
    {
        return 'Public method';
    }
}
$obj = new MyClass();
echo $obj->publicProperty;
echo $obj->publicMethod();



class My
{
    protected $protectedProperty = 'Protected property';
    protected function protectedMethod()
    {
        return 'Protected method';
    }
}
class SubClass extends My
{
    public function accessProtected()
    {
        return $this->protectedProperty;
    }
}
$obj = new SubClass();
// echo $obj->protectedProperty;
// echo $obj->protectedMethod();
echo "<br>";
echo $obj->accessProtected();



class MyCl
{
    private $privateProperty = 'Private property';
    private function privateMethod()
    {
        return 'Private method';
    }
    public function accessPrivate()
    {
        return $this->privateProperty;
    }
}
$obj = new MyCl();
// echo $obj->privateProperty;
// echo $obj->privateMethod();
echo "<br>";
echo $obj->accessPrivate();



echo "<pre>";
?>
