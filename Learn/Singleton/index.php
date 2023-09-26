<?php 

require_once './Singleton.php';

// Sử dụng Singleton
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

// Kiểm tra xem hai biến có trỏ đến cùng một instance không
if ($singleton1 === $singleton2) {
    echo "singleton1 và singleton2 trỏ đến cùng một instance.";
} else {
    echo "singleton1 và singleton2 không trỏ đến cùng một instance.";
}

// Gọi một phương thức của Singleton
echo $singleton1->someMethod();