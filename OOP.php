<?php
class Rectangle {
    protected $lenght;
    protected $width;
    public function __construct($lenght, $width)
    {
        $this->lenght = $lenght;
        $this->width = $width;
        
    }
    public function calArea()
    {
        return $this->lenght * $this->width;
    }
    public function calPerimeter()
    {
        return ($this->lenght * $this->width) * 2;

    }

}
$lenght = 13;
$width = 3;
$rectangle = new Rectangle($lenght, $width);
echo "Area of rectangle: ". $rectangle->calArea() . "\n";
echo "Perimeter of rectangle: ". $rectangle->calPerimeter();
//2. Bài tập Tạo lớp Điểm 2D:
//Tạo một lớp Diem2D với các thuộc tính x và y.
//Tạo phương thức để tính khoảng cách từ điểm hiện tại tới một điểm khác.
class Score {
    protected $x;
    protected $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function calDistance($otherScore)
    {
        $distanceX = $this -> x - $otherScore -> x;
        $distanceY = $this -> y - $otherScore -> y;
        $distance = sqrt(pow($distanceX,2) * pow($distanceY,2));
        return $distance;
    } 
}
$score1 = new Score(2,4);
$score2 = new Score(6,5);
$distance = $score1 -> calDistance($score2);
echo "Distance is: " . $distance;
//3. Bài tập Tạo lớp Mảng số nguyên:
//Tạo một lớp MangSoNguyen với thuộc tính là một mảng các số nguyên.
//Tạo các phương thức để tính tổng, trung bình, và phần tử lớn nhất của mảng.
class IntArray {
    protected $array;
    protected $sum;
    public function __construct($array)
    {
        $this->array = $array;
    }
    public function calSum()
    {
        return array_sum($this->array);
    } 
    public function calAvg()
    {
        $sum = $this->sum;
        $count = count($this->array);
        return $sum/$count;
    }
    public function maxElement()
    {
        return max($this->array);
    }
}
$array = [1, 2, 3, 4, 5];
$intArray = new IntArray($array);
echo "Sum is: " . $intArray->calSum();
echo "Avg is: " . $intArray->calAvg();
echo "MaxElement is: " . $intArray->maxElement();

//4. Bài tập Tạo lớp Đồng hồ:
//Tạo một lớp DongHo với các thuộc tính giờ, phút và giây.
//Tạo phương thức để hiển thị thời gian dưới định dạng "HH:MM:SS" và diễn tả chức năng tăng giây.
class Clock {
    protected $hour;
    protected $minute;
    protected $second;
    public function __construct($hour, $minute, $second)
    {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }
    public function showTime()
    {
        $showHour = $this->hour;
        $showMinute = $this->minute;
        $showSecond = $this->second;
        echo $showHour . ":" . $showMinute . ":" . $showSecond;
    } 
    public function increaseSecond()
    {
        $this->second++;
        if($this->second >= 60){
            $this->minute++;
            $this->second = 0;
            if($this->minute >= 60){
                $this->hour++;
                $this->minute = 0;
                if($this->hour >= 24){
                    $this->hour = 0;
                }
            }
        }
    }
}
$hour = 13;
$minute = 44;
$second = 20;
$clock = new Clock($hour, $minute, $second);
echo "HH:MM:SS " . sprintf('%02d' . $hour) . ":" . $minute . ":" . $second;

//5. Bài tập Tạo lớp Danh sách sinh viên:
//Tạo một lớp SinhVien với các thuộc tính mã số, họ và tên.
//Tạo lớp DanhSachSinhVien với các phương thức thêm sinh viên mới và hiển thị danh sách sinh viên.
class StudentList {
    protected $code;
    protected $fullname;
    protected $list;
    public function __construct()
    {
        $this->list =[];   
    }
    public function add($code, $fullname)
    {
        $this->list[$code] = $fullname;
    }
    public function show()
    {
        return $this->list;
    }
}
$studentList = new StudentList();
$studentList->add('SV01', 'Pham Phuong Thao');
$studentList->add('SV02', 'Pham Thi Hoa');

print_r($studentList->show());

foreach($studentList->show() as $value)
echo $value . '<br/>';

//6.Bài tập Tạo lớp Xe hơi:
//Tạo một lớp XeHoi với các thuộc tính là hãng xe, màu sắc và năm sản xuất.
//Tạo phương thức để hiển thị thông tin đầy đủ của xe
class Car {
    protected $brand = 'BMW';
    protected $color = 'Đen';
    protected $year = '2023';
    public function setCar($value)
    {
        $this->brand = $value;
    }
    public function getCar()
    {
        return $this->brand;
        return $this->color;
        return $this->year;
    }
}
$car = new Car();
$car1 = new Car();
$car2 = new Car();
$car->setCar('BMW');
$car1->setCar('Đen');
$car2->setCar('2023');
echo $car->getCar() . "<br/>";
echo $car1->getCar()  . "<br/>";
echo $car2->getCar();

//7 Bài tập Tạo lớp Phân số:
//Tạo một lớp PhanSo với các thuộc tính tử số và mẫu số.
//Tạo các phương thức để thực hiện các phép toán cộng, trừ, nhân và chia giữa các phân số.
class Fraction {
    protected $numerator;
    protected $denominator;

    public function __construct($numerator, $denominator) {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function add($fraction) {
        $resultNumerator = $this->numerator * $fraction->denominator + $fraction->numerator * $this->denominator;
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function subtract($fraction) {
        $resultNumerator = $this->numerator * $fraction->denominator - $fraction->numerator * $this->denominator;
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function multiply($fraction) {
        $resultNumerator = $this->numerator * $fraction->numerator;
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function divide($fraction) {
        $resultNumerator = $this->numerator * $fraction->denominator;
        $resultDenominator = $this->denominator * $fraction->numerator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function display() {
        return $this->numerator . "/" . $this->denominator;
    }
}
echo "<br><br>Bài 7:<br>";
$fraction1 = new Fraction(3, 4);
$fraction2 = new Fraction(2, 3);

$addResult = $fraction1->add($fraction2);
echo "Add is: ". $fraction1->display() . " + " . $fraction2->display() . " = " . $addResult->display() . "<br>";

$subResult = $fraction1->subtract($fraction2);
echo "Subtract is: ". $fraction1->display() . " - " . $fraction2->display() . " = " . $subResult->display() . "<br>";

$mulResult = $fraction1->multiply($fraction2);
echo "Multiply is: ". $fraction1->display() . " x " . $fraction2->display() . " = " . $mulResult->display() . "<br>";

$divResult = $fraction1->divide($fraction2);
echo "Divide is: ". $fraction1->display() . " / " . $fraction2->display() . " = " . $divResult->display() . "<br>";

//8 Bài tập Tạo lớp Người:
//Tạo một lớp Nguoi với các thuộc tính tên, tuổi và địa chỉ.
//Tạo phương thức để hiển thị thông tin người.
class People {
    protected $name;
    protected $age;
    protected $address;
    
    public function setName($value)
    {
        $this->name = $value;
    }
    public function getName()
    {
        return $this->name;
        return $this->age;
        return $this->address;
    }
}
$name = 'Thảo';
$age = '21';
$address = 'Hải Dương';
$people = new People();
$people1 = new People();
$people2 = new People();
$people->setName('Thảo');
$people1->setName('21');
$people2->setName('Hải Dương');
echo $people->getName() . "<br/>";
echo $people1->getName()  . "<br/>";
echo $people2->getName();

//9. Bài tập Tạo lớp Sản phẩm:
//Tạo một lớp SanPham với các thuộc tính tên, giá và mô tả.
//Tạo phương thức để hiển thị thông tin chi tiết của sản phẩm.
class Product {
    protected $name;
    protected $price;
    protected $describe;
    
    public function setName($value)
    {
        $this->name = $value;
    }
    public function getName()
    {
        return $this->name;
        return $this->price;
        return $this->describe;
    }
}
$name = 'Quần';
$price = '200';
$describe = 'Quần bò dài ống đứng';
$product = new Product();
$product1 = new Product();
$pruduct2 = new Product();
$product->setName('Quần');
$product1->setName('200');
$product2->setName('Quần bò dài ống đứng');
echo $product->getName() . "<br/>";
echo $product1->getName()  . "<br/>";
echo $product2->getName();

//10. Bài tập Tạo lớp Đặt phòng khách sạn:
//Tạo một lớp DatPhong voi các thuộc tính tên, ngày đến và số đêm ở lại.
//Tạo phương thức để tính tổng số tiền cần thanh toán dựa trên giá phòng.
class BookHotel {
    protected $name;
    protected $arrival;
    protected $number;
    protected $price;
    public function __construct( $number, $price)
    {
        $this->number = $number;
        $this->price = $price;
    }
    public function calMoney()
    {
        return $this->price * $this->number;
    }
}
$price = 3000;
$number = 2;
$bookHotel = new BookHotel($price, $number);
echo "Số tiền cần thanh toán: " . $bookHotel->calMoney();
?>