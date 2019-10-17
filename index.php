<?php
$forms = [
    ["action"=>"management.php", "method"=>"post"],
    ["type" => "text" , "name" => "lastName", "label" => "LastName"],
    ["type" => "text" , "name" => "firstName", "label" => "FirstName"],
    ["type" => "password" , "name" => "pwd", "label" => "Password"],
    ["type" => "checkbox" , "name" => "leasure","value"=>"roller" , "label" => "Roller"],
    ["type" => "checkbox" , "name" => "leasure","value"=>"running" , "label" => "Rourse"],
    ["type" => "submit" , "name" => "input", "value" => "Sent"],
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>Form building</title>
<style>
div {
    background-color:#45a049;
    width:30%;

}

header,label{
    color:white;
}
input[type=text],input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>

</head>
<body>
<div>
<header>
<h1>add input in array</h1>
</header>
<main>
<?php 
$i=0;
$string="<form ";
$cntfields=count($forms);

foreach ($forms as $inputs) {
    $propstr="";
    $cnt=count($inputs);
    
    foreach ($inputs as $property=>$val) {
        if($cnt==1){
            $label=$val;
        }else{
            $propstr.=$property."=".$val." ";
        }
        $cnt--;
    }
    if (strpos($propstr,"submit") !== false) {
        $string.="<br>";
    }
     $cntfields--;
    if ($i==0) {
        $string.=$propstr.">\n";
    }
    else {
        if($cntfields!=0||$cntfields==count($forms)){
            $string.="<label>".$label."</label>";
    
        }
        $string.= "<input ".$propstr.">\n";
    }
   
    $i++;
}
echo $string;
?>

</form>
</main>
</div>
</body>
</html>