<?php
    include("/index.php");
    require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");   
?>

<head>

<link href="bootstrap.min.js" rel="stylesheet">
<link href="/Styles/Divfor.css" rel="stylesheet">
<meta charset="utf-8">

</head>


<script>
    function Red() {

        if (document.getElementById('Red').checked) {
            // document.getElementsByClassName('.red').style.display = 'block';
              var nameList = document.querySelectorAll('.red');

              var i = nameList.length;
              while (i--) 
              {
              nameList[i].style.display = 'block';
              } 
         }
        else {
            var nameList = document.querySelectorAll('.red');

            var i = nameList.length;
            while (i--) 
            {
             nameList[i].style.display = 'none';
            }
            // document.getElementsByClassName('.red').style.display = 'none';          
        }
    }
    function Green() {

        if (document.getElementById('Green').checked) {
            // document.getElementsByClassName('.green').style.display = 'block';
           var nameList = document.querySelectorAll('.green');

              var i = nameList.length;
              while (i--) 
              {
              nameList[i].style.display = 'block';
              } 
        }
        else {
            // document.getElementsByClassName('.green').style.display = 'none';
            var nameList = document.querySelectorAll('.green');

              var i = nameList.length;
              while (i--) 
              {
              nameList[i].style.display = 'none';
              } 
        }
    }
    function Yellow() {

        if (document.getElementById('Yellow').checked) {
            //document.getElementsByClassName('.yellow').style.display = 'block';
            var nameList = document.querySelectorAll('.yellow');

              var i = nameList.length;
              while (i--) 
              {
              nameList[i].style.display = 'block';
              } 
        }
        else {
            // document.getElementsByClassName('.yellow').style.display = 'none';
            var nameList = document.querySelectorAll('.yellow');

              var i = nameList.length;
              while (i--) 
              {
              nameList[i].style.display = 'none';
              } 
        }
    }
    </script>

<div class="scroll">
<?php
$query = "SELECT * FROM practice_ibm";
$query1 = "SELECT * FROM constantsgreen";
$query2 = "SELECT * FROM constantsyellow";
$query3 = "SELECT * FROM constantsred";
$query4 = "SELECT * FROM companynodes";

//$st = $databaseConnection ->query($q);
$statement = $databaseConnection ->query($query);
$statement1 = $databaseConnection ->query($query1);
$statement2 = $databaseConnection ->query($query2);
$statement3 = $databaseConnection ->query($query3);
$statement4 = $databaseConnection ->query($query4);

//$finfo = $statement->fetch_field();

$row = $statement->fetch_row();
$row1 = $statement1->fetch_row();
$row2 = $statement2->fetch_row();
$row3 = $statement3->fetch_row();
$row4 = $statement4->fetch_row();
 

for ($i = 0; $i <= count($row)-2 ; $i++)
{
  //  while ($finfo = $statement->fetch_field()) {
    
    if ( (int)$row[$i] < (int)$row2[$i])
{
    $finfo = $statement->fetch_field();

    $pr="    Красный";
$red++;
     echo ' 
    

    <div class="red">
    <div class="div" >
    <div class="topdiv">
    	<b>'.$finfo->name.''.$pr.'</b>
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Отдел:'.$row4[$i].'   КПЭ:'.$row[$i].'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li><font color=red>Red:'.$row3[$i].'</font></li>
            <li><font color=yellow>Yellow:'.$row2[$i].'</font></li>
            <li><font color=green>Green:'.$row1[$i].'</font></li>
        </ul>
    	</div>
    </div>
    </div>
    </div>
   ';
}
elseif (( (int)$row[$i] >=  (int)$row2[$i] ) & ( (int)$row[$i] < (int)$row1[$i]))
{
    $pr="    Желтый";
    $yellow++;
    $finfo = $statement->fetch_field();
    echo ' 
  

    <div class="yellow">
    <div class="div" >
    <div class="topdiv">
    	<b>'.$finfo->name.''.$pr.'</b>
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Отдел:'.$row4[$i].'   КПЭ:'.$row[$i].'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li><font color=red>Red:'.$row3[$i].'</font></li>
            <li><font color=yellow>Yellow:'.$row2[$i].'</font></li>
            <li><font color=green>Green:'.$row1[$i].'</font></li>
        </ul>
    	</div>
    </div>
    </div>
    </div>
   ';
}
elseif ( (int)$row[$i] >= (int)$row1[$i])
{
    $pr="    Зеленый";
    $green++;
    $finfo = $statement->fetch_field();
     echo ' 
    
    
    <div class="green">
    <div class="div">
    <div class="topdiv">
    	<b>'.$finfo->name.''.$pr.'</b>
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Отдел:'.$row4[$i].'   КПЭ:'.$row[$i].'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li><font color=red>Red:'.$row3[$i].'</font></li>
            <li><font color=yellow>Yellow:'.$row2[$i].'</font></li>
            <li><font color=green>Green:'.$row1[$i].'</font></li>
        </ul>
    	</div>
    </div>
    </div>
    </div>
   ';
}
}

//Граница расчетной части




?>
</div>
    </div>
</body>
      
</html>