<?php 

$arr = ["Əli","Vəli","Pirvəli","Zülfəli"];

echo "<pre>";
print_r($arr);
echo "</pre>";

for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
}

echo "<br />";
foreach($arr as $key){
	echo $key." ";
}

echo "<br />";

$arr =["Əli"=>"1500 AZN","Vəli"=>"1100 AZN","Pirvəli"=>"1700 AZN"];
echo "<pre>";
print_r($arr);
echo "</pre>";


foreach($arr as $key=>$value){
	echo $key.": ".$value."<br / >";
}

echo "<br />";

$arr =[
       [1,2,3],
       [4,5,6],
       [7,8,9],

];
echo "<pre>";
print_r($arr);
echo "</pre>";

$emp = [
	"Ad_Soyad"=>["Zarema .N","Fehmin .Sh", "Eynur Necef"],
	"Maas"=>[1500,1300,4567],
	"Vezife"=>["Developer","HR","Help Desk"]

];

echo "<pre>";
print_r($emp);
echo "</pre>";









 ?>