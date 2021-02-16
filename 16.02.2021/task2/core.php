<?php

$a     = 1;
$setir = [ 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H' ];
for ( $i = 1; $i <= 8; $i++ )
{
	$sutun = 9 - $i;
	echo "<tr class='classtr' id='$i'>";
	echo "<td>$sutun</td>";

	for ( $j = $a; $j < $a + 8; $j++ )
	{

		if ( $j % 2 === 0 )
		{
			if ( $a === 1 )
			{
				$yeni_j = $j-1;
				echo "<td>$setir[$yeni_j]</td>";
			}
			echo "<td class='black' id='$j'></td>";
		}
		else
		{
			if ( $a === 1 )
			{
				$yeni_j = $j-1;
				echo "<td>$setir[$yeni_j]</td>";
			}
			echo "<td class='white' id='$j'></td>";
		}
	}

	echo '</tr>';
	$a += 9;
}