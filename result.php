<?php
var_dump($_POST);
function createrAddress(){
for($i =1; $i<=$_POST["num_Addresses"];$i++){
    $_POST["address"]=$_POST;
    var_dump([$_POST]);
    $streetIsValid=street($_POST["street$i"]);
    $zipcodeIsValid=zipcode($_POST["zipcode$i"]);
}
$info = $_POST;
if($streetIsValid["isValid"] && $zipcodeIsValid["isValid"]){
    if(count($info>0)){
        foreach($info as $key => $value){
            echo"<input type='text' name='$key' value='$value' readonly>";
        }

    }
    if(isset($_POST) &&(!empty($_POST))){
        $iMax = (int)$_POST["num_address"];
    }
    for($i;$i<=$iMax; $i++){
    $data = [
        'street'=>$_POST["street".$i],
        'street_nb'=>$_POST["street_nb".$i],
        'type'=>$_POST["type".$i],
        'city'=>$_POST["city".$i],
        'zipcode'=>$_POST["zipcode".$i]
      ];
      var_dump($data);
    }
      if ($isValid) {
        echo '<br><br> Ça a marché je devrai avoir un address en plus';
        createrAddress($data);
      }
      
}
};
?>
<form action="connection.php" method="post">
    <button type="submit">Validation</button>
</form>