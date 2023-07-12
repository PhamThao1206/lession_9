<?php
//1.Tạo một class trừu tượng "Shape" (Hình dạng) có một phương thức trừu tượng 
//là "calculateArea". Tạo các lớp con "Circle" (Hình tròn) và "Rectangle" (Hình chữ nhật) 
//kế thừa từ lớp Shape và triển khai phương thức calculateArea cho từng hình.
abstract class Shape{
    abstract public function calculateArea();

}
class Circle extends Shape{
    protected $radius;

    public function __constract($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return 3.14*pow($this->radius, 2);
    }
}
class Rectangle extends Shape{
    protected $length;
    protected $width;
    public function __constract($length, $width)
    {
        $this->lenght = $length;
        $this->width = $width;
    }
    public function calculateArea1()
    {
        return $this->lenght * $this->width;
    }
}
$circle = new Circle(5);
echo "Circle: " . $circle->calculateArea();

$rectangle = new Rectangle(4, 8);
echo "Rectangle: " . $rectangle->calculateArea1();

//2. Tạo một abstract class "Animal" (Động vật) với một phương thức trừu tượng 
//là "makeSound". Tạo các lớp con "Dog" (Chó) và "Cat" (Mèo) kế thừa từ lớp Animal 
//và triển khai phương thức makeSound theo cách riêng của từng loại động vật.
abstract class Animal{
    abstract public function makeSound();
}
class Dog extends Animal{
    public function makeSound()
    {
        return "Bark";
    }
}
class Cat extends Animal{
    public function makeSound()
    {
        return "Meow";
    }
}
$dog = new Dog('Bark');
$cat = new Cat('Meow');
echo $dog->makeSound() . "<br>";
echo $cat->makeSound();

//3. Tạo một abstract class "Employee" (Nhân viên) với các thuộc tính trừu tượng 
//như "name" (tên) và "salary" (mức lương). Tạo các lớp con "Manager" (Quản lý) và "Staff" (Nhân viên) 
//kế thừa từ lớp Employee và triển khai các thuộc tính và phương thức theo cách riêng của từng lớp.
abstract class Employee{
    protected $name;
    protected $salary;
}
class Manager extends Employee{
    protected $name;
    protected $salary;
    public function __constract($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function show()
    {
        return $this->name;
        return $this->salary;
    }
}
class Staff extends Employee{
    protected $name;
    protected $salary;
    public function __constract($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function show()
    {
        return $this->name;
        return $this->salary;
    }
}
$manager = new Manager('Thao', 2000);
$staff = new Staff('Hoa', 1000);
echo "Manager: " . $manager->show() . "<br>";
echo "Staff: " . $staff->show();

//Tạo một abstract class "Vehicle" (Phương tiện) với một phương thức trừu tượng 
//là "start". Tạo các lớp con "Car" (Xe hơi) và "Motorcycle" (Xe máy) kế thừa 
//từ lớp Vehicle và triển khai phương thức start theo cách riêng của từng loại phương tiện.
abstract class Vehicle{
   abstract public function start();
}
class Car extends Vehicle{
    public function show()
    {
        return "BMW";
    }
}
class Motorcycle extends Vehicle{
    public function show()
    {
        return "Yamaha";
    }
}
$car = new Car("BMW");
$motorcycle = new Motorcycle("Yamaha");
echo $car->show();
echo $motorcycle->show();

//5. Tạo một abstract class "Database" (Cơ sở dữ liệu) với các phương thức trừu tượng 
//như "connect", "query" và "disconnect". Tạo các lớp con "MySQLDatabase" và "PostgreSQLDatabase" kế thừa từ lớp Database 
//và triển khai các phương thức theo cách riêng của từng loại cơ sở dữ liệu.
abstract class Database{
    abstract public function connect();
    abstract public function query();
    abstract public function disconnect();
 }
 class MySQLDatabase extends Database{
    protected $host;
    protected $username;
    protected $pass;
    protected $db;
    protected $type;
    protected $conn;
    public function __constract($host, $username, $pass, $db)
    {
        $this->host = $host;
        $this->username = $username;
        $this->pass = $pass;
        $this->db = $db;
        $this->type = 'mysql';
    }
    public function connect()
    {
        $this->conn = new PDO("$this->type:host=$this->host;dbname=$thisdb".$this->username.$this->pass);
        if ($this->conn){
            echo "Connected to $this->host successfull";
        }
    }
    public function query()
    {
        $stml = $this->conn->prepare("DELETE from sinhvien_list WHERE MaSV=:MaSV");
        $stml = ['MaSV' => 'SV001'];
        $result=$stml->excute($data);
        if (!$result){
            die("delete failed: " . mysqli_query());
        }else {
            echo "delete success";
        }
    }
 }

 //INTERFACE
 //1. Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". 
 //Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable để thay đổi kích thước của hình chữ nhật.
 interface Resizable{
    public function resize($size);
}

class Rectangle implements Resizable {
    protected $length;
    protected $width;


    public function __construct($length, $width) {
        $this->lenght = $length;
        $this->width = $width;
    }

    public function resize($size){
        $this ->lenght *= $size;
        $this ->width *= $size;
    }

    public function getLength(){
        return $this ->lenght;
    }

    public function getWidth(){
        return $this ->width;
    }
}

$rectangle = new Rectangle(2,5);
echo "Kích thước ban đầu của H.C.N: " . $rectangle->getLength() ."x" .  $rectangle->getWidth() . "<br>";

$rectangle -> resize(4);
echo "Kích thước sau khi thay đổi của H.C.N:" . $rectangle->getLength() ."x" .  $rectangle->getWidth() . "<br>"; 

//2. Tạo một interface "Logger" với các phương thức "logInfo", "logWarning" và "logError". 
//Tạo một lớp "FileLogger" (Ghi log vào file) và một lớp "DatabaseLogger" (Ghi log vào cơ sở dữ liệu) 
//và triển khai interface Logger cho cả hai lớp.
interface Logger {
    public function logInfor();
    public function logWarning();
    public function logError();
}
class FileLogger implements Logger{
    public function logInfor(){

    }
    public function logWarning(){

    }
    public function logError(){

    }
    protected $name;
    public function __constract($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
class DatabaseLogger implements Logger{
     public function logInfor(){

    }
    public function logWarning(){

    }
    public function logError(){
        
    }
    protected $name;
    public function __constract($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
$fileLogger = new FileLogger('Pham Phuong Thao');
$databaseLogger = new DatabaseLogger('Pham Phuong Thao');
function getName(Logger $fileLogger){
    echo $fileLogger->getName() . "<br>";
}
getName($fileLogger);
getName($databaseLogger);

//3. Tạo một interface "Drawable" (Có thể vẽ) với phương thức "draw". 
//Tạo một lớp "Circle" (Hình tròn) và một lớp "Square" (Hình vuông) kế thừa từ interface Drawable 
//và triển khai phương thức draw cho mỗi hình.
interface Drawable {
    public function draw();
}

class Circle implements Drawable{
    protected $radius;

    public function __construct($radius)
    {
        $this -> radius = $radius;
    }

    public function draw(){
        echo "Vẽ đường tròn với bán kính " . $this -> radius . " cm" . "<br>";
    }
}

class Square implements Drawable{
    protected $length;
    protected $width;

    public function __construct($length, $width){
        $this -> length = $length;
        $this -> width = $width;
    }

    public function draw(){
        echo "Vẽ hình chữ nhật có chiều dài là " . $this -> length . " cm chiều rộng là " . $this -> width . "cm" ;
    }
}

$circle = new Circle(8);
$circle -> draw();

$square = new Square(4,9);
$square -> draw();

//4. Tạo một interface "Sortable" với phương thức "sort". Tạo một lớp "ArraySorter" (Sắp xếp mảng) 
//và một lớp "LinkedListSorter" (Sắp xếp danh sách liên kết) và triển khai interface Sortable cho cả hai lớp.
interface Sortable {
    public function sort();
}
class ArraySorter implements Sortable{
    protected $array;
    public function __construct($array) {
        $this->array = $array;
    }
    public function sort() {
        sort($this->array);
        return $this->array;
    }

}
class LinkedListSorter implements Sortable{
    protected $array;
    public function __construct($array) {
        $this->array = $array;
    }
    public function sort() {
        sort($this->array);
        return $this->array;
    }

}
$array = [1, 6, 8, 6, 4, 2];
$array = new ArraySorter();
echo $array->sort();
?>