<?php
function cetak_gambar($batas)
{
	$batas = $batas;
	echo "<table>";
	$matrix=array();

	echo"<tr><td colspan=".$batas."><center>--- Panjang ---</center></td></tr>";
	//membuat semua elemen matrix menjadi =
	for ($i=1;$i<=$batas;$i++)
	{

		for ($j=1;$j<=$batas;$j++)
		{
			$matrix[$i][$j]="=";
		}
	}

	//membuat kolom pertama elemen matrix menjadi *
	for ($i=1;$i<=$batas;$i++)
	{

		for ($j=1;$j<=$batas;$j++)
		{
			$matrix[1][$j]="*";
		}
	}
	//membuat kolom terahir elemen matrix menjadi *
	for ($i=1;$i<=$batas;$i++)
	{

		for ($j=1;$j<=$batas;$j++)
		{
			$matrix[$batas][$j]="*";
		}
	}

	// mengganti kolom tengah menjadi *
	$tengah=round($batas/2);
	for ($i=1;$i<=$batas;$i++)
	{

		for ($j=1;$j<=$batas;$j++)
		{
			$matrix[$i][$tengah]="*";
		}
	}

	//

	for ($i=1;$i<=$batas;$i++)
	{
		echo "<tr>";
		for ($j=1;$j<=$batas;$j++)
		{

						echo "<td width=30px>";
						echo $matrix[$j][$i];
						echo "</td>";


		}
		echo "</tr>";
	}
	echo "</table>";
}

cetak_gambar(5);
?>
