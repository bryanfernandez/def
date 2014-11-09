<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>tarea web services</title>
</head>





<body>

<h1>TAREA GIT Y HEORKU</h1>
<form class="for" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="reserva">

<fieldset>
  
<label>valor 1</label><input type="text" name="v1" /></br></br>
<label>valor 2</label><input type="text" name="v2" /></br></br>


 <button class="submit" type="submit" name="enviar">Enviar</button>
  <button class="submit" type="submit" name="cancelar">Cancelar</button>
  
 

</fieldset>
</form>



<?php
   
    
    
    if (isset($_POST['enviar']))
    {
       
        $valor1=$_POST['v1'];
        $valor2=$_POST['v2'];
		$suma=$valor1+$valor2;
		$resta=$valor1-$valor2;
		$pro=$valor1*$valor2;
		if($valor2!=0){
		$div=$valor1/$valor2;}
		
		echo"la suma es".$suma;
		echo"</br>";
		echo"la resta es ",$resta;
		echo"</br>";
		echo"el producto es ",$pro;
		echo"</br>";
		echo"la division ",$div;
		echo"</br>";
		
        
        
       
        
        
    }
    else if (isset($_POST['cancelar'])){
    echo "sirve cancelar";}
    
    ?>
</body>
</html>