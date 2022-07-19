<?php
$date = date("Y-m-d");
$name= $_POST['name'];
$adress= $_POST['adress'];
$message= $_POST['message'];
if ($message == NULL) $message="-";
$email= $_POST['email'];
$pizza= (int)$_POST['pizza']*50000;
if ($pizza == NULL) $pizza=0;
$brick= (int)$_POST['burger']*10000;
if ($brick == NULL) $brick=0;
$chicken= (int)$_POST['chicken']*35000;
if ($chicken == NULL) $chicken=0;
$french= (int)$_POST['french']*10000;
if ($french == NULL) $french=0;
$spaghetti= (int)$_POST['spaghetti']*20000;
if ($spaghetti == NULL) $spaghetti=0;
$sushi= (int)$_POST['sushi']*25000;
if ($sushi == NULL) $sushi=0;
$hotdog= (int)$_POST['hotdog']*15000;
if ($hotdog == NULL) $hotdog=0;
$mie= (int)$_POST['mie']*10000;
if ($mie == NULL) $mie=0;
$eskrim= (int)$_POST['eskrim']*5000;
if ($eskrim == NULL) $eskrim=0;
$donat= (int)$_POST['donat']*2000;
if ($donat == NULL) $donat=0;
$nugget= (int)$_POST['nugget']*3000;
if ($nugget == NULL) $nugget=0;
$bacon= (int)$_POST['bacon']*1000;
if ($bacon == NULL) $bacon=0;
$total = $pizza+$brick+$chicken+$french+$spaghetti+$sushi+$hotdog+$mie+$eskrim+$donat+$nugget+$bacon;
$fp = fopen("struk.txt", "a+");
fputs($fp, "$date|$name|$email|$adress|$pizza|$brick|$chicken|$french|$spaghetti|$sushi|$hotdog|$mie|$eskrim|$donat|$nugget|$bacon|$total|$message\n");
fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Sucess Page</title>
    <link rel="stylesheet" href="./dist/output.css">
</head>
<body>
  <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed">
    <div class="flex justify-center items-center h-full">
      <div class="text-dark">
        <h2 class="font-semibold text-4xl mb-4">Successfully</h2>
        <h4 class="font-semibold text-xl mb-6">Ordered</h4>
        <a class="inline-block px-7 py-3 mb-1 border-2 border-primary text-primary font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="./index.html" role="button">Back To Home</a>
        <a class="inline-block px-7 py-3 mb-1 border-2 border-primary text-primary font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="./lihat.php" role="button">Purchase History</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>