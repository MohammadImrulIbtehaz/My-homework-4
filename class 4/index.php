<?php

// array

$info = [
    [
    "name"=> "Orvee",
    "age"=> 25,
    "eduYear"=> [
        "ssc"=> 2016,
        "hsc"=> 2018,
        "b. sc."=> 2024
    ],
    ],
    [
    "name"=> "Tazwer",
    "age"=> 25,
    "eduYear"=> [
        "ssc"=> 2016,
        "hsc"=> 2018,
        "b. sc."=> 2024,
        "m. sc."=> 2026,
    ],
    ],
    [
    "name"=> "Fahim",
    "age"=> 25,
    "eduYear"=> [
        "ssc"=> 2016,
        "hsc"=> 2018,
        "b. sc."=> 2024,
        "m. sc."=> 2025,
        "p.h.d"=> 2030,
    ],
    "social_account"=>[
        "facebook"=> "www.facebook.com",
        "instagram"=> "www.instagram.com",
    ],
    ],
];

//Array push
$info[1]["social_account"][]["twitter"]="www.twitter.com";

echo "<pre>";

print_r($info[0]["eduYear"]);
print_r($info[1]);
print_r($info[2]["social_account"]);

echo "</pre>";


//String Functions

echo strtoupper("the daily star<br>");

echo strtolower("IMRULIBTEHAZ8@.COM<br>");

echo ucwords("imrul ibtehaz<br>");

echo ucfirst("imrul ibtehaz<br>");

function number_check($num){
if($num==strrev($num)){
    echo "success";
}else{
    echo "failed";
}
echo "<br>";
}
number_check(121);
number_check(122);

$email="imrulibtehaz8@gmail.com";

if(stripos($email,"@") != false){
    echo "valid email";
}else{
    echo "in-valid email";
}
echo "<br>";


$msg= "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, modi. Dolorem perferendis, necessitatibus vitae modi, praesentium quasi ratione nihil vel quisquam commodi temporibus ab similique reiciendis! Explicabo aliquam illo beatae.";
echo substr($msg,0,120) . "...";
echo "<br>";


$comment="Apnar product baje. delivery time faltu. service kharap";
$bad_comment=["kharap", "faltu", "baje"];
$good_comment=["valo", "joss", "excellent"];

echo str_replace($bad_comment,$good_comment,$comment);
echo "<br>";



$pass="123 ";
// echo trim($pass);

var_dump(password_hash($pass,PASSWORD_BCRYPT));
echo "<br>";


function phone($phone_num){
    echo strlen($phone_num) == 11 ? "Yes, valid phone number":"No, in-valid phone number";
    echo "<br>";
}
phone("01617794123");
phone("018762205");

?>