<?php
session_start();
if ($_SESSION['login'] === true){
	echo $_SESSION['login'];
} 
else{
	header("Location: http://valera/login.php");
}
 ?>

<!DOCTYPE HTML>
<html>
 <head>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <title>Таблица размеров обуви</title>
 </head>
 <body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Шо сделать</th>
      <th scope="col">Когда сделать</th>
      <th scope="col">Валера?</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Почекать браузры на наличие вк ВАЛЕРЫ</td>
      <td>24/7</td>
      <td>Валера.</td>
      <td>
      	<form action="tododo.php" method="post">
      		<input type="hidden" name="task">
			<input type="submit">
      	</form>	
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Поставить клип "Валера"</td>
      <td>По воскресеньям</td>
      <td>ВАЛЕЕРАА ВАЛЕЕЕЕРААА</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Настукивать музыку на ноуте</td>
      <td>По воскресеньям</td>
      <td>Нет</td>
    </tr>
  </tbody>
</table>
 </body>
</html>