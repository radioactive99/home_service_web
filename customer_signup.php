<?php
session_start();
if(isset($_POST['submit'])){
    include 'config.php';
    $customer_first_name = $_POST['firstname'];
    $customer_last_name = $_POST['lastname'];
    $customer_email_id = $_POST['email'];
    $customer_password = $_POST['password'];
    $customer_mobile_number = $_POST['mobileno'];

    $sql = "SELECT customer_email FROM customers WHERE customer_email='$customer_email_id'";
    $num = mysqli_num_rows($conn->query($sql));
    if($num>0){
        echo "<script>alert(Already registered emailid)</script>";  
    }else{
    $sql = "INSERT INTO customers(customer_email,customers_password,customers_firstname,customers_lastname,customers_status, customers_mobile_number) 
                VALUES('$customer_email_id','$customer_password','$customer_first_name','$customer_last_name','TRUE','$customer_mobile_number')";
    if(mysqli_query($conn, $sql)){
        header("Location:index.php");
    }else{
        echo 'rocord id not added' . mysqli_errno($conn);
    }

    mysqli_close($conn);
    }
}
?>