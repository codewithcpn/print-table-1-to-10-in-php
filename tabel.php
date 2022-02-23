<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>

<body>
    <h2 align="center">Print multiplication table from 1 to 10 by codewithcpn</h2>
    <table align="center" border='1' width="900px">
        <?php

$num = 10;

for($i = 1; $i <= 10; $i++)
{	
    echo "<tr>";
	
	for($j =1; $j <= $num; $j++)
	{
		$multiplication_table = $i * $j;
		echo "<td>$j  x $i =  $multiplication_table </td>";
	}
	
	echo "<tr/>";
}
?>
    </table>
</body>

</html>
