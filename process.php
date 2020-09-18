<?php
if (isset($_POST['email'])){
  $admin_email = "anthony.aarroy2@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $name = $_POST['name'];
  $message = $_POST['message'];

  mail($admin_email, "New Form Submission", $message . '-' . $phone, "From" . $email)

  header('Location: http://cvn-realty.herokuapp.com/success.html')
}