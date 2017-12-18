<form method="post">

	<input type="" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php 

$_POST['busca']='<a href="#"><strong>Oi</strong></a><script>alert("ok")</script>';

if(isset($_POST['busca'])){

	//echo $_POST['busca'];
	/*
	 strip_tags - transforma tags em texto de algumas não todas
	*/
	//echo strip_tags($_POST['busca'],"<strong>");

	 /*
	 htmlentities - transform todas as tags encontradas em texto
	 */
	echo htmlentities($_POST['busca']);	 

}


 ?>