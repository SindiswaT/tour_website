<?php 

$connection = mysqli_connect('localhost','root','','book_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $departures = $_POST['departures'];

    $request = " INSERT INTO `book_form`(`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `departures`) VALUES (NULL,'$name','$email','$phone','$address','$location','$guests','$arrivals','$departures') ";

    mysqli_query($connection, $request);

    if($request){
        header("Location: book.php?msg=Booking created successfully");
    }
    else{
        echo "Failed: something went wrong, try again ";
    }
}
?>