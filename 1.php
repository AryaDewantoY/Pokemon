<!-- {A} -->
<?php
$kaoskaki=[10,20,20,10,10,30,50,10,20];
$sepasang=[];
$_kaoskaki=[];
foreach($kaoskaki as $kki => $kk){
  if(in_array($kk,$_kaoskaki)){
    $sepasang[]=$kk;
    unset($_kaoskaki[array_search($kk,$_kaoskaki)]);
  }else{
      $_kaoskaki[]=$kk;
  }
}

print_r($sepasang);
echo count($sepasang);
?>

<!-- {B}  -->
<?php
$kaoskaki=[6,5,2,3,5,2,2,1,1,5,1,3,3,3,5];
$sepasang=[];
$_kaoskaki=[];
foreach($kaoskaki as $kki => $kk){
  if(in_array($kk,$_kaoskaki)){
    $sepasang[]=$kk;
    unset($_kaoskaki[array_search($kk,$_kaoskaki)]);
  }else{
      $_kaoskaki[]=$kk;
  }
}

print_r($sepasang);
echo count($sepasang);
?>

<!-- {C} -->
<?php
$kaoskaki=[1,1,3,1,2,1,3,3,3,3];
$sepasang=[];
$_kaoskaki=[];
foreach($kaoskaki as $kki => $kk){
  if(in_array($kk,$_kaoskaki)){
    $sepasang[]=$kk;
    unset($_kaoskaki[array_search($kk,$_kaoskaki)]);
  }else{
      $_kaoskaki[]=$kk;
  }
}

print_r($sepasang);
echo count($sepasang);
?>