<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Horari d'un dia</title>
</head>
 
<body>
<h2>Horari</h2>
<?php 
    $horari = array("dilluns" =>
    array("08:00-09:00"=>"M2","09:00-10:00"=>"M2","10:00-11:00"=>"M3","11:30-12:30"=>"M3","12:30-13:30"=>"M4","13:30-14:30"=>"M4"),
    "dimarts" =>
    array("08:00-09:00"=>"M3","09:00-10:00"=>"M2","10:00-11:00"=>"M2","11:30-12:30"=>"M2","12:30-13:30"=>"M2","13:30-14:30"=>"M2"),
    "dimecres"=>
    array("08:00-09:00"=>"M4","09:00-10:00"=>"M2","10:00-11:00"=>"M2","11:30-12:30"=>"M2","12:30-13:30"=>"M2","13:30-14:30"=>"M2"),
    "dijous" =>
    array("08:00-09:00"=>"M5","09:00-10:00"=>"M2","10:00-11:00"=>"M2","11:30-12:30"=>"M2","12:30-13:30"=>"M2","13:30-14:30"=>"M2"),
    "divendres" =>
    array("08:00-09:00"=>"M6","09:00-10:00"=>"M2","10:00-11:00"=>"M2","11:30-12:30"=>"M2","12:30-13:30"=>"M2","13:30-14:30"=>"M2")
    );
?>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Tria un dia:<p />
<select name="selectDia">
   <?php
    foreach($horari as $numero=>$dia)
        echo  "<option value='".$numero."'>".$numero."</option>";
   ?>   
</select>
<p />
<input type="submit" name="submit" value="Go"/>
</form>
 
<?php
if (isset($_POST['selectDia'])){

    $numeroDia = $_POST['selectDia'];
    echo "<h3>Horari de $numeroDia</h3>";
    if(isset($horari[$numeroDia]))
    {
          $HorariDia=$horari[$numeroDia];
          echo "<table>";
          foreach($HorariDia as $hora=>$modul)
          {
            echo "<tr><td>".$hora."</td><td>".$modul."</td></tr>";
            
          }
          echo "</table>";
    }
   else
   {
       echo "No hi ha horari per aquest dia!";
   }
}
?>

