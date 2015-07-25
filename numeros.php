<?

$pruebaOrientadaObjetos = new GetMultiplos();
$pruebaOrientadaObjetos -> n();

class GetMultiplos{

public function n(){
$u = 0;
$acum = 0;

for($u = 0; $u<1000; $u++){
	$modCinco = $u%5;
	$modTres = $u%3;

	if($modCinco == 0 || $modTres == 0){
			echo 'Multiplo: '.$u.'<br>';
			$acum = $acum+$u;
	}
}
echo 'La suma es: '.$acum;
}
}
?>
