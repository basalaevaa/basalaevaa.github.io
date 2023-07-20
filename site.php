<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "Luxembourg";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn) {
    die("Потеряно соединение с Базами Данных" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $contact_name = $_POST['contact_name'];
    $contact_phone = $_POST['contact_phone'];
    $contact_message = $_POST['contact_message'];

    $sql_query = "INSERT INTO Users(contact_name,contact_phone,contact_message)
    VALUES ('$contact_name','$contact_phone','$contact_message')";
    if (mysqli_query($conn, $sql_query)) 
    {
       echo "Ваши данные успешно сохранены!";
    } 
    else
    {
       echo "Что-то пошло не так! " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
