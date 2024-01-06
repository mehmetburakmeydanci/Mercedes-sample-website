<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$database = "localhost"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adsoyadsatis = $_POST["adsoyad"];
    $epostasatis = $_POST["eposta"];
    $ozellik = $_POST["deneyim"];
    $butcesatis = $_POST["hiz"];

  
    $sql = "INSERT INTO satisdanismanligi (adsoyadsatis, epostasatis,ozelliksatis,butcesatis) VALUES ('$adsoyadsatis', '$epostasatis', '$ozellik','$butcesatis')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Gönderildi";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
