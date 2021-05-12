<?php
echo"<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
*{
 
  box-sizing: border-box;
  font-family: 'Josefin Sans', sans-serif;
}
.wrapper{
 
  
  padding:30px;
  padding-left:50px;
    width: 500px;
  display: block;
  background-color: #eee;
  margin-left: auto;
  margin-right: auto;
 
}
select{
	padding:5px;
}
.button {
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
    background-color: white;
  color: black;
  border: 2px solid #555555;
}
.button:hover {
  background-color: #555555;
  color: white;
}
</style>";

echo '<div class="wrapper"><h1>Pretraživač</h1><form name="form" method="post" action="noWsdlClient.php">
<p><b><div style=padding-bottom:4px;>Unesite vrijednost: </div></b></br> <input name="value" type="number" id="value" size="25"></p>
</select>
<p><input type="submit" name="submit" value="Pretraži" class="button " ></p></form></div>';


if((isset($_POST['submit']))&&($_POST['value']!=NULL)){
	
try{
	ini_set('soap.wsdl_cache_enabled',0);
	ini_set('soap.wsdl_cache_ttl',0);
	$value = $_POST['value'];
	
	
	 header("Location: http://localhost/NOWSDL/noWsdlServer.php?building_UID=".$value."");  



} catch(SoapFault $e){
  var_dump($e);
  echo $e;
}
}





?>