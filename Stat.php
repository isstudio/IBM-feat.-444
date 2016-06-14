<?php
    include("/index.php");
    require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");   
?>

<head>

<link href="bootstrap.min.js" rel="stylesheet">
<link href="/Styles/Divfor.css" rel="stylesheet">
<meta charset="utf-8">
 <script src="https://www.google.com/jsapi"></script>
  <script>
      google.load("visualization", "1", { packages: ["corechart"] });
      google.setOnLoadCallback(drawChart);
      function drawChart() {
          var obj1 = document.getElementById('1red').value;
          var obj2 = document.getElementById('2yellow').value;
          var obj3 = document.getElementById('3green').value;
          var data = google.visualization.arrayToDataTable([
         ['Показатель', 'Вес'],
         ['Красный', obj1/100],
         ['Желтый', obj2/100],
         ['Зеленый', obj3/100]
        ]);
          var options = {
              title: 'Процент успешности',
              is3D: true
          };
          var chart = new google.visualization.PieChart(document.getElementById('scroll'));
          chart.draw(data, options);
      }
  </script>

</head>

<div class="scroll" id="scroll" >
<?php
$query = "SELECT * FROM practice_ibm";
$query1 = "SELECT * FROM constantsgreen";
$query2 = "SELECT * FROM constantsyellow";
$query3 = "SELECT * FROM constantsred";
$query4 = "SELECT * FROM companynodes";

$statement = $databaseConnection ->query($query);
$statement1 = $databaseConnection ->query($query1);
$statement2 = $databaseConnection ->query($query2);
$statement3 = $databaseConnection ->query($query3);
$statement4 = $databaseConnection ->query($query4);


$row = $statement->fetch_row();
$row1 = $statement1->fetch_row();
$row2 = $statement2->fetch_row();
$row3 = $statement3->fetch_row();
$row4 = $statement4->fetch_row();
 

for ($i = 0; $i <= count($row)-2 ; $i++)
{
    
    if ( (int)$row[$i] < (int)$row2[$i])
{
$red++;
}
elseif (( (int)$row[$i] >=  (int)$row2[$i] ) & ( (int)$row[$i] < (int)$row1[$i]))
{
    $yellow++;
}
elseif ( (int)$row[$i] >= (int)$row1[$i])
{
    $green++;
}
}


?>
</div>
<input id="1red" type="hidden" value="<?php echo $red; ?>">
</input>
<input id="2yellow" type="hidden" value="<?php echo $yellow; ?>">
</input>
<input id="3green" type="hidden" value="<?php echo $green; ?>">
</input>
</div>
</body>
</html>