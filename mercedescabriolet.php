<?php
$arabalar = [
    [
        "Marka" => "Mercedes",
        "Model" => "Cabriolet",
        "Yil" => 2021,
        "Fiyat" => 200000,
        "Resim" => "mercedescabriolet.jpg"
    ],
    [
        "Marka" => "Mercedes",
        "Model" => "Cabriolet",
        "Yil" => 2014,
        "Fiyat" => 95000,
        "Resim" => "mercedescabriolet2.jpg"
    ],
    [
        "Marka" => "Mercedes",
        "Model" => "C Serisi",
        "Yil" => 2018,
        "Fiyat" => 150000,
        "Resim" => "mercedescabriolet3.jpg"
    ]
    ,
    [
        "Marka" => "Mercedes",
        "Model" => "E-Class",
        "Yil" => 2023,
        "Fiyat" => 220000,
        "Resim" => "mercedescabriolet4.jpg"
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mercedes Cabriolet</title>
    <style>
        body {
            background-image: url('mercedesarkaplansedan.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
        }

        .araba-container {
            width: 45%;
            background-color: rgba(255, 255, 255, 0.8);
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
        }

        .araba {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .araba .resim {
        margin-right: 20px;
        flex: 0 0 700px; 
        }
        
        .araba .resim  img{
            width: 100%; 
             height: auto
        }

        .araba .bilgi {
            font-family: Arial, sans-serif;
            border-left: 3px groove black;
            padding: 10px;
        }

        .araba .bilgi p {
            margin: 5px 0;
            font-size: 16px;
        }

        .araba .baslik {
            font-family: Arial, sans-serif;
            border: 3px groove black;
            padding: 10px;
            margin-bottom: 10px;
        }

        .araba .baslik h2 {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="araba-container">
        <?php foreach (array_slice($arabalar, 0, ceil(count($arabalar) / 2)) as $araba): ?>
            <div class='araba'>
                <div class='resim'>
                    <img src='<?php echo $araba["Resim"]; ?>'>
                </div>
                <div>
                    <div class='baslik'>
                        <h2><?php echo "{$araba['Marka']} {$araba['Model']}"; ?></h2>
                    </div>
                    <div class='bilgi'>
                        <p><?php echo "Marka: {$araba['Marka']}"; ?></p>
                        <p><?php echo "Model: {$araba['Model']}"; ?></p>
                        <p><?php echo "Yıl: {$araba['Yil']}"; ?></p>
                        <p><?php echo "Fiyat: {$araba['Fiyat']} TL"; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="araba-container">
        <?php foreach (array_slice($arabalar, ceil(count($arabalar) / 2)) as $araba): ?>
            <div class='araba'>
                <div class='resim'>
                    <img src='<?php echo $araba["Resim"]; ?>'>
                </div>
                <div>
                    <div class='baslik'>
                        <h2><?php echo "{$araba['Marka']} {$araba['Model']}"; ?></h2>
                    </div>
                    <div class='bilgi'>
                        <p><?php echo "Marka: {$araba['Marka']}"; ?></p>
                        <p><?php echo "Model: {$araba['Model']}"; ?></p>
                        <p><?php echo "Yıl: {$araba['Yil']}"; ?></p>
                        <p><?php echo "Fiyat: {$araba['Fiyat']} TL"; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>