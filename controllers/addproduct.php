<?php
//ini_set('display_errors',1);

$categoryname = GetItems('SELECT id, name from categories' );

$passcategory = [];
$messeges = [];

for($i = 0; $i < count($categoryname);$i++){
    $passcategory[$categoryname[$i]['id']] = $categoryname[$i]['name'];
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputCategory = filterInput($_POST['category']);
    $inputProductname = filterInput($_POST['productname']);
    $inputPrise = filterInput($_POST['prise']);
    $inputSpecification = filterInput($_POST['specification']);}

$add = [];
$adderrors = [];

if (validateCategory($inputCategory)) $add['category'] = $inputCategory;
else $adderrors['category'] = $inputCategory;

if (validatePoductname($inputProductname)) $add['productname'] = $inputProductname;
else $adderrors['productname'] = $inputProductname;

if (validateSpecification($inputSpecification)) $add['specification'] = $inputSpecification;
else $adderrors['specification'] = $inputSpecification;

if (validatePrise($inputPrise)) $add['prise'] = $inputPrise;
else $adderrors['prise'] = $inputPrise;

if(uploadFile()) $add['photo'] = "uploads/" . $_FILES["avatar"]["name"];
else $adderrors['photo'] = "uploads/" . $_FILES["avatar"]["name"];;

//print_r($add);
//print_r($adderrors);

if(empty($adderrors)) {
    $res = putItem("INSERT INTO products (category_id, name, description, price, image)
VALUES( '{$add['category']}', '{$add['productname']}', '{$add['specification']}', '{$add['prise']}', '{$add['photo']}')");
}
if($res) $messages['add'] = "Товар успешно добавлен"; else  $messages['add'] ="Товар не добавлен,
некорректные данные либо введены не полностью";
view('addproduct',[
    'passcategory' => $passcategory,
    'messages' => $messages
]);