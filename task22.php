<?php
try{
$response = file_get_contents("users.json");
$data= json_decode($response);
echo '<pre>';
print_r($data);
echo '<pre>';
}catch(Exception $e){
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<body>
</body>
</html>