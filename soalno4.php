<?php
function count_vowels($kalimat)
{
	$a=0;
	$data=array('pro', 'gram', 'merit', 'program', 'it', 'programmer','mer');
	foreach ($data as $key => $isi ) {
		$posisi=strpos($kalimat,$isi);
		$p_kalimat=strlen($kalimat);
		if ($posisi!== FALSE && $posisi==0)
		{
		  	$kalimat=substr($kalimat, strlen($isi),strlen($kalimat)-1);
			$a++;
		}
		else {
		  //echo "Tidak ketemu";
		}	
	}
	return $a;
}
echo count_vowels("programmer");
?>