<?php 
$nrpasc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");asort($nrpasc);
$namaasc = array("Choirudin","Asyari","Prayoga","Alfatah","Aziz","Nugraha","Junia","Icha","Pratiwi","Bayu","Sherly","Sherly","Sabilillah","Alfuadi","Ediana","Luthfi","Jazuli","Bahrul","Alam","Syafiq","Sawqillah","Cintiya","Permana","Yuski","Rizaldi","Berlin","Mahendra","Astria","Arini","Faisal");
asort($namaasc);
$nrpdesc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");rsort($nrpdesc);
$namadesc= array("Choirudin","Asyari","Prayoga","Alfatah","Aziz","Nugraha","Junia","Icha","Pratiwi","Bayu","Sherly","Sherly","Sabilillah","Alfuadi","Ediana","Luthfi","Jazuli","Bahrul","Alam","Syafiq","Sawqillah","Cintiya","Permana","Yuski","Rizaldi","Berlin","Mahendra","Astria","Arini","Faisal");
rsort($namadesc);

// ASC
echo "<p>_________________________________________ASC_______________________________________________<p>";


function dataMhsasc($nrpasc,$namaasc){
	for ($i=0; $i <30 ; $i++) { 
	echo "<p>NRP $nrpasc[$i]<p>";
	echo "<p>Nama $namaasc[$i]<p>";
	echo "<hr>";
	
	}

}
dataMhsasc($nrpasc,$namaasc);

// DESC
echo "<p>_________________________________________DESC_______________________________________________<p>";

function dataMhsDesc($nrpdesc,$namadesc){
for ($i=0; $i <29 ; $i++) { 
	echo "<p>NRP $nrpdesc[$i]<p>";
	echo "<p>Nama $namadesc[$i]<p>";
	echo "<hr>";
	
	}


}
dataMhsasc($nrpdesc,$namadesc);

 ?>

