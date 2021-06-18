<?php
   include 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    $technician_name = $_POST['name'];
    $technician_email = $_POST['email'];
    $technician_mobilno = $_POST['mobilno'];
    $technician_state = $_POST['state'];
    $technician_city = $_POST['city'];
    $technician_address = $_POST['address'];
    $technician_pincode = $_POST['pincode'];
    $technician_password = $_POST['password'];

    $sql = "SELECT technician_email FROM technician_details WHERE technician_email = '$technician_email'";
    $num = mysqli_num_rows($conn->query($sql));
    if($num>0){
        echo "<script>alert(Already registered emailid)</script>";  
    }else{
    $sql = "INSERT INTO technician_details(technician_name,technician_email,technician_password,technician_phonenumber,technician_address,technician_city, technician_state,technician_pincode) 
                VALUES('$technician_name', $technician_email','$technician_password','$technician_mobilno','$technician_address','$technician_city','$technician_state', '$technician_pincode')";
    if(mysqli_query($conn, $sql)){
        header("Location:index.php");
    }else{
        echo 'rocord id not added' . mysqli_error($conn);
    }

    mysqli_close($conn);
    }
}
?>