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
</head>
<body>
<div>
<header>
<h1></h1>
</header>
<main>
<form action="<?php echo $forms[0]["action"] ?>" method="<?php echo $forms[0]["action"] ?>">
<?php 
foreach($forms as $property=>$val){
    <input 
    
}
?>
</form>
</main>
</div>
</body>
</html>