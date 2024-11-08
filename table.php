<!DOCTYPE html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<style>
table, th, td {
  border:1px solid black;
}
</style>

<table>
<?php
$nmbr = (int)$_GET["nmbr"]; 
$C = 1;
$R = 0;
do{
$R = $nmbr * $C;
echo "
  <tr>
    <td> $nmbr x $C = </td> <td>   $R </td></td>
  </tr>

" ;
$C += 1;
} while ($C != 11)

?>
</table>
</body>
</html>