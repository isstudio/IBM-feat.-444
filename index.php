    <?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");          
     ?>
<!DOCTYPE HTML>
<html>
<head>

<link href="/Styles/bootstrap.min.js" rel="stylesheet">
<link href="/Styles/style.css" rel="stylesheet">
<meta charset="utf-8">



</head>
    <body class="body">
       <div class="main">
       <div class="head">
           <p class="writing">Добро пожаловать в сервис подсчета эффективности Вашей компании.</p>
       </div>
       	<div class="mainbuttondiv">
               <form action="Proba.php" method="POST">
       		<div class="button">
       			<input  type="submit" name="Count" class="btn btn-primary btnVery" data-toggle="button" aria-pressed="false" autocomplete="off" value="Рассчитать">
</input>
       		</div>
                   </form>
               
       		<div class="button">
                   <form action="Stat.php" method="POST">
       			<input type="submit" class="btn btn-primary btnVery" data-toggle="button" aria-pressed="false" autocomplete="off" value="Статистика">

</input>
                   </form>
       		</div>
       		<div class="button">
       		 <form action="Table.php" method="POST">
       			<input type="submit" class="btn btn-primary btnVery" data-toggle="button" aria-pressed="false" autocomplete="off" value=" Таблица">
</input>
                    </form>
       		</div>
       		<div class="button">
       		 <form action="Tree.php" method="POST">
       			<input type="submit" class="btn btn-primary btnVery" data-toggle="button" aria-pressed="false" autocomplete="off" value="Дерево">
</input>
     </form>
       		</div>
               <div class="button">
       		 <form action="Help.php" method="POST">
       			<input type="submit"  class="btn btn-primary btnVery" data-toggle="button" aria-pressed="false" autocomplete="off" value="Помощь">
</input>
                    </form>
       		</div>
          <div class="down">
          <div class="filtr">
            Фильтр
          </div>
       		<div class="chet">
       			<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary lol">
    <input type="checkbox" id="Green"  onchange="Green()" autocomplete="off" checked> Зеленое 
  </label>
  <label class="btn btn-primary lol">
    <input type="checkbox" id="Yellow"  onchange="Yellow()" autocomplete="on" checked>Желтое
  </label>
  <label class="btn btn-primary  lol">
    <input type="checkbox" id="Red" onchange="Red()" autocomplete="off" checked>Красное
  </label>
       		</div>
       	</div>
       	</div>
                     </div>

