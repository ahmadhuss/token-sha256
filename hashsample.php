<?php
$trading_id = "444421";
$payment_type = "02";
$fix_params = "";
$id = "2";
$seq_merchant_id = "999999";
$payment_term_day = "1";
$payment_term_min = "";
$payment_class = "1";
$use_card_conf_number = "0";
$customer_id = "cust001";
$threedsecure_ryaku = "";
$hash_key = "abc123";

// create hash hex string
$org_str = $trading_id .
          $payment_type .
          $fix_params .
          $id .
          $seq_merchant_id .
          $payment_term_day .
          $payment_term_min .
          $payment_class .
          $use_card_conf_number .
          $customer_id .
          $threedsecure_ryaku .
          $hash_key;
$hash_str = hash("sha256", $org_str);

// create random string
$rand_str = "";
$rand_char = array('a','b','c','d','e','f','A','B','C','D','E','F','0','1','2','3','4','5','6','7','8','9');
for($i=0; ($i<20 && rand(1,10) != 10); $i++){
  $rand_str .= $rand_char[rand(0, count($rand_char)-1)];
}

print $hash_str . $rand_str;
?>

