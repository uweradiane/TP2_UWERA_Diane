<?php
session_start();
//$num_addresses=$_POST["num_addresses"];
//echo $_POST["num_Addresses"];
var_dump($_POST);
function createrUser(){
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
    $data = [
        'street'=>$_POST['street'],
        'street_nb'=>$_POST['street_nb'],
        'type'=>$_POST['type'],
        'city'=>$_POST['city'],
        'zipcode'=>$_POST['zipcode']
      ];
      if ($isValid) {
        echo '<br><br> Ça a marché je devrai avoir un user en plus';
        
        createUser($data);
      }else {
        //redirect vers signUp page
        header('Location: ../pages/signup.php');
        exit;
      }}
}
?>
<form action="connection.php" method="post">
    <button type="submit">Validation</button>
</form>