<?php

require "./app/views/dashboard-admin.view.php";

session_start();
if(isset($_POST['btn_new_admin'])){
    // $name = $_POST['name'];
    // $address = $_POST['address'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $role = 'sub-admin';
    // $status = $_POST['status'];

    $data = [
        $name => $_POST['name'],
        $address => $_POST['address'],
        $email => $_POST['email'],
        $password => $_POST['password'],
        $role => 'sub-admin',
        $status => $_POST['status'],
    ];

}
dd($data)


?>