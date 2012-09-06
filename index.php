<?php

function readMatrix($name)
{
    $count = 0;
    $matrix = array();
    $f=fopen ($name, "r");
    if ($f) {
        while(!feof($f)) {
            $row = fgets ($f);
            $row = explode (" ", $row);
            $matrix[$count] = $row;
            $count++;
            }
        return $matrix;	
        } else {
            echo "файла ".$name." не существует";
            exit;}
}

function multiplicate($a, $b)
{
	echo count($a);
	echo count($b[0]);

}

$a = readMatrix("a.php");
$b = readMatrix("b.php");
if (count($a[0]) ==  count($b)) {
  for($i=0;$i<count($a);$i++)
    for($j=0;$j<count($b[0]);$j++)
    {
      $resMatrix[$i][$j]=0;
      for ($k=0;$k<count($b);$k++) $resMatrix[$i][$j]+=$a[$i][$k]*$b[$k][$j];
    }
    print_r($resMatrix);
} else echo "число столбцов матрицы A должно равняться числу строк матрицы B ";
