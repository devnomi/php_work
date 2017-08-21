<?php
//arithematic Operator + - * / %
//assignment operator =
//logical operator > < == === != >= <= !
// && || and or xor

//$country = "india";
//$city = "jaksd";
//
//if($country == "baharat" || $country=="india" || $country="hindustan")
//{
//    if($city == "peshawar")
//    {
//        echo "Pakhair raghle<br>";
//    }else
//    {
//        echo "Kesi ho<br>";
//    }
//    
//}else
//{
//  echo "Hello world";  
//}

/*
1 home
2 php
3 css
*/
$choice  = 2;

//if($choice == 1)
//{
//    echo "Home";
//}else
//{
//    if($choice == 2)
//    {
//        echo "php";
//    }else
//    {
//        if($choice == 3)
//        {
//            echo "css";
//        }else
//        {
//            echo "unknown";
//        }
//    }
//}

//if($choice == 1)
//{
//    echo "Home";
//}elseif($choice == 2)
//{
//    echo "php";
//}elseif($choice == 3)
//{
//    echo "css";
//}else
//{
//    echo "unknown";
//}

switch($choice)
{
    case 1:
        echo "Home";
        break;
    case 2:
        echo "php";
        break;
    case 3:
        echo "css";
        break;
    default:
        echo "unknown";
}








?>