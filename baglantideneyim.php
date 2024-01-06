
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
    $adsoyaddeneyim = $_POST["adsoyad"];
    $epostadeneyim = $_POST["eposta"];
    $surusdeneyimi = $_POST["deneyim"];
    $enyuksekhiz = $_POST["hiz"];

  
    $sql = "INSERT INTO deneyim (adsoyaddeneyim, epostadeneyim,surusdeneyimi,enyuksekhiz) VALUES ('$adsoyaddeneyim', '$epostadeneyim', '$surusdeneyimi','$enyuksekhiz')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Gönderildi";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
