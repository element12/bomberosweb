<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Galeria</title>
<meta name="description" content="Pagina web del cuerpo de bomberos  Madrid Cundinamarca ">
<meta name="keywords" content="bomberos madrid capacitaciones bomberos madrid cundinamarca colombia bomberos madrid inspeciones numeros de emergencia de bomberos primeros auxilio empresas madrid bomberos cuerpo de bomberos b31 bomberos madrid">
<meta name="author" content="Jeisson Ortiz">
<link href="Imagen2.ico" rel="shortcut icon" type="image/x-icon">
<link href="Pagina.css" rel="stylesheet">
<link href="Galeria.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.stickylayer.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="wb.photocollage.min.js"></script>
<script>
$(document).ready(function()
{
   $("#Layer3").stickylayer({orientation: 6, position: [0, 0], delay: 500, keepOriginalPos: true});
   $("#PhotoCollage1").photocollage({ effect: 'scale', duration: 600, padding: 4, matrix: '2,0,1,0,0,1,1,1,1' });
});
</script>
</head>
<body>
<div id="container">
<div id="wb_Shape2" style="position:absolute;left:1px;top:43px;width:1359px;height:39px;z-index:3;">
<div id="Shape2"></div></div>
<div id="wb_Shape4" style="position:absolute;left:1px;top:0px;width:1359px;height:44px;z-index:4;">
<div id="Shape4"></div></div>
<div id="wb_menu2" style="position:absolute;left:131px;top:53px;width:1229px;height:29px;z-index:5;">
<ul role="menubar">
<li class="firstmain"><a role="menuitem" href="./index.html" target="_self">Inicio</a>
</li>
<li><a role="menuitem" href="./index.html" target="_self">Atenci&#243;n&nbsp;de&nbsp;emergencias</a>
</li>
<li><a role="menuitem" href="./Escuela-de-capacitaciones.html" target="_self">Escuela&nbsp;de&nbsp;Capacitaciones</a>
</li>
<li><a role="menuitem" href="./Inspecciones-tecnicas.html" target="_self" title="INSPECCIONES TECNICAS">Inspecciones&nbsp;T&#233;cnicas</a>
</li>
<li><a role="menuitem" href="./index.html" target="_self">Otros&nbsp;Servicios</a>
</li>
</ul>
</div>
<input type="submit" id="Button2" onclick="window.location.href='http://bomberosmadridb31.site/moodle/moodle/login/index.php';return false;" name="" value="Plataforma" style="position:absolute;left:1249px;top:10px;width:96px;height:25px;z-index:6;">
<div id="wb_menu" style="position:absolute;left:138px;top:11px;width:290px;height:33px;z-index:7;vertical-align:top;">
<ul id="menu">
<li class="active" aria-current="page">Galeria</li>
<li><a href="./Contacto.html">Contacto</a></li>
<li><a href="./Quienes-somos.html">&#191;Quienes somos?</a></li>
</ul>
</div>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:146px;height:146px;z-index:8;">
<img src="images/ESCUDO B31.png" id="Image1" alt=""></div>

<div id="wb_PhotoCollage1" style="position:absolute;left:345px;top:106px;width:801px;height:801px;z-index:10;">
<div id="PhotoCollage1">
<div class="thumbnails">
<?php
   $images_folder = "Galeria/";
   $html = "";
   $images = array();
   $dir = opendir($images_folder);
   while ($filename = readdir($dir))
   {
      $ext = pathinfo($filename, PATHINFO_EXTENSION);
      $ext = strtolower($ext);
      if ($ext == 'gif' || $ext == 'jpeg' || $ext == 'jpg' || $ext == 'png')
      {
         $images[] = $filename;
      }
   }
   closedir($dir);
   sort($images);
   $count = 0;
   foreach($images as $filename)
   {
      $count++;
      if ($count > 6)
         break;
      $exif = exif_read_data($images_folder.$filename);
      $title = trim($exif['ImageDescription']);
      $html .= "<div class=\"thumbnail\"><a href=\"$images_folder$filename\"><img alt=\"$title\" id=\"PhotoCollage1_img$count\" src=\"$images_folder$filename\" title=\"$title\"></a></div>";
   }
   echo $html;
?>
</div>
</div></div>
<div id="wb_Fondo" style="position:absolute;left:0px;top:937px;width:1360px;height:124px;z-index:11;">
<div id="Fondo"></div></div>
<div id="wb_Text3" style="position:absolute;left:61px;top:983px;width:776px;height:32px;z-index:12;">
<span style="color:#FFFFFF;font-family:Arial;font-size:27px;"><strong>CUERPO DE BOMBEROS DE MADRID CUNDINAMARCA</strong></span></div>
<div id="wb_Numeros" style="position:absolute;left:902px;top:963px;width:280px;height:57px;z-index:13;">
<span style="color:#FFFFFF;font-family:Arial;font-size:17px;"><strong>bomberosmadridb31@gmail.com <br>Teléfono: 7470306<br>Cel: 3213800353</strong></span></div>
<div id="wb_contacto" style="position:absolute;left:916px;top:959px;width:283px;height:20px;z-index:14;">
<span style="color:#FFFFFF;font-family:Verdana;font-size:17px;"><strong>CONTACTO EMERGENCIAS</strong></span></div>
<div id="wb_Escudo1" style="position:absolute;left:1227px;top:949px;width:101px;height:101px;z-index:15;">
<img src="images/ESCUDO B31.png" id="Escudo1" alt=""></div>
</div>
<div id="Layer3" style="position:absolute;text-align:left;left:1314px;top:292px;width:46px;height:169px;z-index:16;">
<div id="wb_Image9" style="position:absolute;left:0px;top:115px;width:46px;height:46px;z-index:0;">
<a href="https://twitter.com/madridbomberos" target="_blank"><img src="images/gorjeo (1).png" id="Image9" alt=""></a></div>
<div id="wb_Image10" style="position:absolute;left:0px;top:69px;width:46px;height:46px;z-index:1;">
<a href="https://www.instagram.com/madridbomberosb31/?hl=es-la" target="_blank"><img src="images/instagram (1).png" id="Image10" alt=""></a></div>
<div id="wb_Image12" style="position:absolute;left:0px;top:23px;width:46px;height:46px;z-index:2;">
<a href="https://www.facebook.com/bomberos.madridcundinamarca/" target="_blank"><img src="images/facebook (1).png" id="Image12" alt=""></a></div>
</div>
</body>
</html>