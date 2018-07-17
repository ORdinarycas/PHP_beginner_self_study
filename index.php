<?php
  // $_GET['page'] = 'main';
  // if(isset($_GET['page']) && !empty($_GET['page'])){
  //   $page = $_GET['page'];
  // }else {
  //   $page = $_GET["main"];
  // }
  require_once(__DIR__ . '.\head.html');

  $order_total = array();
  $order_total['1221000'] = 100;  
  // 1221000 是訂單編號, 100 是訂單金額，以下以此類推;
  $order_total['1221001'] = 200;  
  $order_total['1221002'] = 300; 
  $order_total['1221003'] = 200;
  $order_total['1221004'] = 250;
  $order_total['1221005'] = 150;
  $order_total['1221006'] = 300;
  $order_total['1221007'] = 250;
  $order_total['1221008'] = 330;
  
  $order_receive = array();
  $order_receive['1221000'] = 100; 
  // 1221000 是訂單編號, 100 是黑貓貨到付款代收金額;
  $order_receive['1221001'] = 0;
  $order_receive['1221002'] = 300;
  $order_receive['1221003'] = 200;
  $order_receive['1221004'] = 250;
  $order_receive['1221005'] = 150;
  $order_receive['1221006'] = 300;
  $order_receive['1221008'] = 0;
  $order_receive['1130199'] = 200; 

  $order_not_exist = array(); 
  // 這個陣列我們預計拿來裝黑貓收款列表中不存在的訂單編號
    $order_zero = array();
// 這個陣列我預計拿來裝黑貓代收款，對方不取貨不付款的單號


  // switch ($page) {
  //   case "main":
  //     include('main.php');
  //     break;

  //   case "list":
  //     include('list.php');
  //     break;
    
  //   default:
  //     include('error.php');
  //     break;
  // }

  require_once(__DIR__ . '.\footer.html');
?>
