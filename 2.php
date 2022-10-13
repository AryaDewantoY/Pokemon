<!-- {C} -->
<?php
$kalimat='Masing-masing anak mendap[atkan uang jajan ya=ng be&rbeda.';
$kata = explode(" ", $kalimat);
$totalKata=0;
foreach($kata as $kt){
  $adaSpecialChar=preg_match('/[^a-zA-Z,?.-]/', $kt);
  if(!$adaSpecialChar){
    $totalKata++;    
  }
}
echo $totalKata;
?>

<!-- {B} -->
<?php
$kalimat='Berapa u(mur minimal[ untuk !mengurus ktp?';
$kata = explode(" ", $kalimat);
$totalKata=0;
foreach($kata as $kt){
  $adaSpecialChar=preg_match('/[^a-zA-Z,?.-]/', $kt);
  if(!$adaSpecialChar){
    $totalKata++;    
  }
}
echo $totalKata;
?>

<!-- {A} -->
<?php
$kalimat='Saat menge*ecat tembok, Agung dib_antu oleh Raihan.';
$kata = explode(" ", $kalimat);
$totalKata=0;
foreach($kata as $kt){
  $adaSpecialChar=preg_match('/[^a-zA-Z,?.-]/', $kt);
  if(!$adaSpecialChar){
    $totalKata++;    
  }
}
echo $totalKata;
?>