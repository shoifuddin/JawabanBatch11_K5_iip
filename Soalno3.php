<?php
function cetak_gambar($batas)
{
	$batas = $batas;
	echo "<table>";
	$matrix=array();

	echo"--- Panjang ---";
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

	// membuat kolom tengah menjadi dua
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

						echo "<td>";
						echo $matrix[$j][$i];
						echo "</td>";


		}
		echo "</tr>";
	}
	echo "</table>";
}

cetak_gambar(5);
?>