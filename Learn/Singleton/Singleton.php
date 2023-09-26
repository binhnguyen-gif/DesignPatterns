<?php 

class Singleton {
    private static $instance; // Biến tĩnh để lưu trữ instance

    // Không cho phép tạo instance trực tiếp từ bên ngoài lớp
    private function __construct() {
    }

    // Phương thức để lấy instance hoặc tạo nếu chưa tồn tại
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Các phương thức khác của lớp
    public function someMethod() {
        return "This is a singleton instance.";
    }
}

