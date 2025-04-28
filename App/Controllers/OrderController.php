<?php
class OrderController
{
    public function checkout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $config = require 'config.php';
        $baseURL = $config['baseURL'];

        // 1. Neu nguoi dung chua login ==>yeu cau login
        if (!isset($_SESSION['user_id'])) {
            header('Locaion' . $baseURL . 'user/login');
            exit();
        }
        // 2. Tao Order
        // 3. Tao Order Detail
        // 4. Xoa gio hang
        include __DIR__ . '/../Views/Order/checkout.php';
    }
}
