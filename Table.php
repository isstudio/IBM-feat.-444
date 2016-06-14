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

<?php
    $query = "SELECT * FROM practice_ibm";
    $statement = $databaseConnection ->query($query);
    $row = $statement->fetch_row();
    $finfo = $statement->fetch_field();

    for ($i = 0; $i <= count($row)-2 ; $i++)
{
    $finfo = $statement->fetch_field();
    echo '
    <table>
    <tr>
    <td><b>Отдел компании: </b></td>
    <td><p><b>Введенный вами показатель: </b></p></td>
   </tr>
   <tr>
   <td>'.$finfo->name.'</td>
   <td>'.$row[$i].' </td>
   </tr>
    </table>
    ';
}
?>
</div>
    </div>
</body>
      
</html>
