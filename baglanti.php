
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
    $adsoyad = $_POST["adsoyad"];
    $eposta = $_POST["eposta"];
    $konu = $_POST["konu"];

  
    $sql = "INSERT INTO iletisim (adsoyad, eposta, konu) VALUES ('$adsoyad', '$eposta', '$konu')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Gönderildi";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
