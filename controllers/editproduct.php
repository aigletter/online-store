<?php
//ini_set('display_errors',1);

$categoryname = GetItems('SELECT id, name from categories' );
$passcategory = [];
$pass = [];
$product = [];

for($i = 0; $i < count($categoryname);$i++){
    $passcategory[$categoryname[$i]['id']] = $categoryname[$i]['name'];
}

for($i = 1; $i <= count($categoryname);$i++){
    $product['category'.$i.''] = getItems("SELECT id, name from products 
WHERE category_id = $i");
    $productcategopy{$i} = [];
    for ($j = 0; $j < count($product['category'.$i.'']); $j++){
        $productcategopy{$i}[$product['category'.$i.''][$j]['id']]
            = $product['category'.$i.''][$j]['name'];

    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputCategory = filterInput($_POST['category']);
    $inputProduct = filterInput($_POST['product']);
    $inputProductname = filterInput($_POST['productname']);
    $inputPrice = filterInput($_POST['price']);
    $inputSpecification = filterInput($_POST['specification']);}

$add = [];
$adderrors = [];
$messages = [];

if (!empty($inputCategory)) $add['category'] = $inputCategory;

if (!empty($inputProduct)) $add['product'] = $inputProduct;

if (validatePoductname($inputProductname)) $add['productname'] = $inputProductname;
else $adderrors['productname'] = $inputProductname;

if (validateSpecification($inputSpecification)) $add['specification'] = $inputSpecification;
else $adderrors['specification'] = $inputSpecification;

if (validatePrise($inputPrice)) $add['priсe'] = $inputPrice;
else $adderrors['priсe'] = $inputPrice;

if(uploadFile()) $add['photo'] = "uploads/" . $_FILES["avatar"]["name"];
else $adderrors['photo'] = "uploads/" . $_FILES["avatar"]["name"];;
//print_r($add);
//print_r($adderrors);
if(!empty($adderrors)) $messages['errors'] = 'Некоторые данные не введены либо введены некорректно';

$i = &$add['category'];

$passproduct = [];
asort($productcategopy{$i});
$passproduct = $productcategopy{$i};

$getproduct = GetItem("SELECT * from products WHERE id = '{$add['product']}'" );

$pass['id'] = array_key_exists('product', $add) ? $getproduct['id'] : ' ';
$pass['productname'] = array_key_exists('product', $add) ? $getproduct['name'] : ' ';
$pass['specification'] = array_key_exists('product', $add) ? $getproduct['description'] : ' ';
$pass['price'] =  array_key_exists('product', $add) ? $getproduct['price'] : ' ';
$pass['avatar'] = array_key_exists('product', $add) ? $getproduct['image'] : ' ';


if(!empty($add['productname']))
    $res = putItem("UPDATE products SET name = '{$add['productname']}'
WHERE id = '{$add['product']}'");
if($res) $messages['productname'] = 'Название товара успешно обновлено';

//if (!empty($add['price']) ||  $add['price'] === 0 )
    $res2 = putItem("UPDATE products SET price = '{$add['priсe']}'
WHERE id = '{$add['product']}'");
if($res2) $messages['price'] = 'Цена товара успешно обновлена';

if(!empty($add['specification']))
    $res3 = putItem("UPDATE products SET description = '{$add['specification']}'
WHERE id = '{$add['product']}'");
if($res3) $messages['specification'] = 'Описание товара успешно обновлено';

if(!empty($add['photo']))
    $res4 = putItem("UPDATE products SET image = '{$add['photo']}'
WHERE id = '{$add['product']}'");
if($res4) $messages['photo'] = 'Фото успешно обновлено';

view('editproduct',[
    'passcategory' => $passcategory,
    'pass' => $pass,
    'passproduct' => $passproduct,
    'messages' => $messages,
]);
