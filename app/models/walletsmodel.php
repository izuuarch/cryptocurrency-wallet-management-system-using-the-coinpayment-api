<?php
class walletsmodel{
   private $db;
   public function __construct(){
       $this->db = new Database;
       $private_key = '';
       $public_key = '';
       $this->cps_api = new CoinpaymentsAPI($private_key, $public_key, 'json');
   }

   public function createtransaction(){
      if(isset($_POST['sendbtn'])){
         try {
            $information = $this->cps_api->GetBasicInfo();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            exit();
        }
        if ($information['error'] == 'ok') {
           show($information);
         // Prepare start of sample HTML output
         // $output = '<table><tbody><tr><td>Username</td><td>Merchant ID</td><td>Email</td><td>Public Name</td></tr>';
         // $output .= '<tr><td>' . $information['result']['username'] . '</td><td>' . $information['result']['merchant_id'] . '</td><td>' . $information['result']['email'] . '</td><td>' . $information['result']['public_name'] . '</td></tr>';
         
         // // Close the sample output HTML and echo it onto the page
         // $output .= '</tbody></table>';
         // echo $output;
     } else {
         // Throw an error if both API calls were not successful
         echo 'There was an error returned by the API call: ' . $information['error'];
     }
      }
   }
}