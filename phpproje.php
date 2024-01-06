<?php
echo"
<html>
    <head>
    <title>Mercedes-BENZ</title>
<style>
.giris{
    width: 100%;
    height: 120px;
    background-color:rgb(8, 8, 8);
}
.giris ul {
    display: flex;
    align-items: center;
    margin-left: 550px;    
}
.giris #yazi {
    display: inline-block;
    vertical-align: middle;
    font:tahoma;
    font-size:40px;
    text-align: center;
    color: white;
    
    
}
.giris #logo,
.giris #logo2{
    display: inline-block;
    vertical-align: middle;
    
}
.girisyazi{
    width: 100%;
    height: 65px;
    background-color: rgb(0, 0, 0);
    margin-top: -50px;
}
.girisyazi ul li{float: left;list-style-type: none}
.girisyazi ul li a{display: block;text-decoration:none;color:white;font-size: 35px;margin-left: 95px;font:tahoma}
.arama{
 width: 100%;
 height:50px;
background-color: rgb(251, 252, 253);  
}
.arama ul li{float:left;list-style-type: none}
.arama ul li a{display: block;color:rgb(0, 0, 0);text-decoration:none;font-size: 28px;margin-left: 135px;font:tahoma}
.arama ul li a:hover {color: white;background-color: black;}


.ortasayfa{
width: 100%;
height:760px;
background:url(mercedeslogo2.avif);
}
.yazi{
    font-family:Montserrat;
    color: #777;
    font-size: 140px;
    padding:62px;
}



body { overflow:-moz-scrollbars-vertical; overflow-x:hidden; overflow:-moz-scrollbars-vertical; overflow-y:hidden;}

    </style>
</head>
<body >
    <div class='giris'><ul>
        <li id='logo'><a href=''><img src='mercedess.jpg'></a></li>
        <li id='yazi'>MERCEDES-BENZ</li>
        <li id='logo2'><a href=''><img src='mercedess.jpg'></a></li>
        
    </ul>
</div>
    <div class='girisyazi'>
    <ul>
        <li id='sev'><a href='ensevilenler.php'>En Sevilenler</a></li>
        <li id='sat'><a href='satinalmadanismanligi.php' target='_blank'>Satin Alma Danismanligi</a></li>
        <li id='servis'><a href=''>Hos Geldiniz!</a></li>
        <li id='iletisim'><a href='iletisimproje.php' target='_blank'>Iletisim</a></li>
        <li id='deneyim'><a href='deneyim.php' target='_blank'>Deneyimlerini Aktar</a></li>
    </ul>
    </div>
    <div class='arama'> 
        <ul>
            <li id='sedan'><a href='Sedansayfa.php'>Sedan</a></li>
            <li id='suv'><a href='mercedessuv.php'>Suv</a></li>
            <li id='estate'><a href='mercedesestate.php'>Estate</a></li>
            <li id='kompakt'><a href='mercedeskompakt.php'>Kompakt</a></li>
            <li id='copue'><a href='mercedescoupe.php'>Copue</a></li>
            <li id='cabriolet'><a href='mercedescabriolet.php'>Cabriolet</a></li>
            <li id='mpvs'><a href='mercedesmvps.php'>Mpvs</a></li>
        </ul>
    </div>
</div>
    <div class='ortasayfa'>
        <div class='ortasayfa'><div class='yazi'>BEST<div>OR</div><div>NOTHING</div></div></div>
    </div>
  
    
</body>

</html>
";
?>