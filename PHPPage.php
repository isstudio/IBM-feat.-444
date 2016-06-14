<?php
    include("/index.php");
?>

<head>

<link href="bootstrap.min.js" rel="stylesheet">
<link href="/Styles/Divfor.css" rel="stylesheet">
<meta charset="utf-8">

</head>


<script>
        function Red() {

            if (document.getElementById('Red').checked) {
               document.getElementById('red').style.display='block';
            }
             else {
                document.getElementById('red').style.display='none';
            }
        }
        function Green() {

            if (document.getElementById('Green').checked) {
                document.getElementById('green').style.display='block';
            }
             else {
                document.getElementById('green').style.display='none';
            }
        }
        function Yellow() {

            if (document.getElementById('Yellow').checked) {
               document.getElementById('yellow').style.display='block';
            }
            else {
                document.getElementById('yellow').style.display='none';
            }
        }
    </script>

<div class="scroll">
<?php


const ProductionRed = 116;
const ProductionYellow = 120;
const ProductionGreen = 130;

const ProductRed = 116;
const ProductYellow = 120;
const ProductGreen = 130;

const Exp_ResultsRed = 110;
const Exp_ResultsYellow = 115;
const Exp_ResultsGreen = 125;



$query = "SELECT Production,Product,Exp_Results FROM practiceibm ";
$statement = $databaseConnection->prepare($query);
$statement->execute();
$statement->store_result();
$statement->bind_result($result,$result1,$result2);
$statement->fetch();


$res = (int) $result;
$res1 = (int) $result1;
$res2 = (int) $result2;

//Граница расчетной части

if ($res < ProductionYellow)
{
    $pr="    Красный";
     echo ' 
    

    
    <div class="div" id="red">
    <div class="topdiv">
    	Производство'.$pr.'
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Произв.Отд.'.$res.'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li>Red:'.ProductionRed.'</li>
            <li>Yellow:'. ProductionYellow.'</li>
            <li>Green:'. ProductionGreen.'</li>
        </ul>
    	</div>
    </div>
    </div>
    
   ';
    
}
elseif (($res >= ProductionYellow ) & ($res < ProductionGreen))
{
    $pr="    Желтый";
    echo ' 
    

    
    <div class="div" id="yellow">
    <div class="topdiv">
    	Производство'.$pr.'
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Произв.Отд.'.$res.'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li>Red:'.ProductionRed.'</li>
            <li>Yellow:'. ProductionYellow.'</li>
            <li>Green:'. ProductionGreen.'</li>
        </ul>
    	</div>
    </div>
    </div>
    
   ';
}
elseif ($res >= ProductionGreen)
{
    $pr="    Зеленый";
     echo ' 
    

    
    <div class="div" id="green">
    <div class="topdiv">
    	Производство'.$pr.'
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Произв.Отд.'.$res.'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li>Red:'.ProductionRed.'</li>
            <li>Yellow:'. ProductionYellow.'</li>
            <li>Green:'. ProductionGreen.'</li>
        </ul>
    	</div>
    </div>
    </div>
    
   ';
}

//Граница первого блока результата

if ($res1 < ProductYellow)
{
    $pr1="    Красный";
     echo ' 
    

    
    <div class="div" id="red">
    <div class="topdiv">
    	Товар'.$p1r.'
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Иссл.Отд.'.$res1.'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li>Red:'.ProductRed.'</li>
            <li>Yellow:'. ProductYellow.'</li>
            <li>Green:'. ProductGreen.'</li>
        </ul>
    	</div>
    </div>
    </div>
    
   ';
    
}
elseif (($res1 >= ProductYellow ) & ($res1 < ProductGreen))
{
    $pr1="    Желтый";
    echo ' 
    

    
    <div class="div" id="yellow">
    <div class="topdiv">
    	Товар'.$pr1.'
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Иссл.Отд.'.$res1.'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li>Red:'.ProductRed.'</li>
            <li>Yellow:'. ProductYellow.'</li>
            <li>Green:'. ProductGreen.'</li>
        </ul>
    	</div>
    </div>
    </div>
    
   ';
}
elseif ($res1 >= ProductGreen)
{
    $pr1="    Зеленый";
     echo ' 
    

    
    <div class="div"  id="green">
    <div class="topdiv">
    	Товар'.$pr1.'
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Иссл.Отд.'.$res1.'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li>Red:'.ProductRed.'</li>
            <li>Yellow:'. ProductYellow.'</li>
            <li>Green:'. ProductGreen.'</li>
        </ul>
    	</div>
    </div>
    </div>
    
   ';
}

//Граница второго блока результата


if ($res2 < Exp_ResultsRed)
{
    $pr2="    Красный";
     echo ' 

    
    <div class="div" id="red">
    <div class="topdiv">
    	Результаты Экспериментов'.$pr2.'
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Произв.Отд.'.$res2.'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li>Red:'.Exp_ResultsRed.'</li>
            <li>Yellow:'.Exp_ResultsYellow.'</li>
            <li>Green:'.Exp_ResultsGreen.'</li>
        </ul>
    	</div>
    </div>
    </div>
    
   ';
    
}
elseif (($res2 >= Exp_ResultsYellow ) & ($res2 < Exp_ResultsGreen))
{
    $pr2="    Желтый";
    echo ' 
    

    
    <div class="div" id="yellow">
    <div class="topdiv">
    	Результаты Экспериментов'.$pr2.'
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Произв.Отд.'.$res2.'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li>Red:'.Exp_ResultsRed.'</li>
            <li>Yellow:'.Exp_ResultsYellow.'</li>
            <li>Green:'.Exp_ResultsRed.'</li>
        </ul>
    	</div>
    </div>
    </div>
    
   ';
}
elseif ($res2 >= Exp_ResultsGreen)
{
    $pr2="    Зеленый";
     echo ' 
    

    
    <div class="div" id="green">
    <div class="topdiv">
    	Результаты Экспериментов'.$pr2.'
    </div>
    <div class="downdiv">
    	<div class="otd">
    		Произв.Отд.'.$res2.'
    	</div>
    	<div class="Static">
    		<ul class="ulll">
            <li>Red:'.Exp_ResultsRed.'</li>
            <li>Yellow:'.Exp_ResultsYellow.'</li>
            <li>Green:'.Exp_ResultsGreen.'</li>
        </ul>
    	</div>
    </div>
    </div>
   
   ';
}

//Граница третьего блока результата

?>
</div>
    </div>
</body>
      
</html>