<?php

echo "
<html>

<head>
    <title>Iletisim Sayfasi</title>
   <style>
   body {
    font-family: Arial, sans-serif;
    color:#e2d;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 800px;
    background-image: url('mercedesarkaplan3.jpg'); 
    background-size: cover; 
    background-repeat: no-repeat;
}

.iletisimkutusu {
    width: 400px;
    background-color: #133ab9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.iletisim .formlar {
    margin-bottom: 20px;
}

.iletisim etiket {
    display: block;
    margin-bottom: 5px;
}

.iletisim input[type='text'],
.iletisim input[type='email'] {
    width: calc(100% - 12px);
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.iletisim button {
    padding: 10px 20px;
    background-color: #f2a;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.iletisim button:hover {
    background-color: #0cdb05;
}

   </style> 
</head>

<body>
    <div class='kutu'>
        <form action='#' method='POST' class='iletisim'>
            <div class='formlar'>
                <label for='adsoyad'>Ad Soyad:</label>
                <input type='text' id='adsoyad' name='adsoyad' required>
            </div>
            <div class='formlar'>
                <label for='eposta'>E-posta:</label>
                <input type='email' id='eposta' name='eposta' required>
            </div>
            <div class='formlar'>
                <label for='konu'>Konu:</label>
                <input type='text' id='konu' name='konu' required>
            </div>
            <div class='formlar'>
                <button type='submit'>Gönder</button>
            </div>
        </form>
    </div>
</body>
</html>";?>
<?php
include ("baglanti.php");
?>
