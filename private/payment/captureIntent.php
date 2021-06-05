<?php





namespace payment\CaptureIntentExamples;

require '../../vendor/autoload.php';

//1. Import the PayPal SDK client that was created in `Set up Server-Side SDK`.
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use products\getData;

class CreateOrder
{

// dit is een test functie delete  later


// ------------------------------------------

// 2. Set up your server to receive a call from the client
  /**
   *This is the sample function to create an order. It uses the
   *JSON body returned by buildRequestBody() to create an order.
   */
  public static function createOrder()
  {
    $request = new OrdersCreateRequest();
    $request->prefer('return=representation');
    $request->body = self::buildRequestBody();


    $ini = parse_ini_file('../../settings.ini');
    $clientId = $ini['id'];
    $clientSecret = $ini['secret'];
    $envirement = new SandboxEnvironment($clientId, $clientSecret);
    $client= new PayPalHttpClient($envirement);





   // 3. Call PayPal to set up a transaction
    $response = $client->execute($request);
    
      // To print the whole response body, uncomment the following line
      echo json_encode($response->result, JSON_PRETTY_PRINT);
    

    // 4. Return a successful response to the client.
    return $response;
  }

  /**
     * Setting up the JSON request body for creating the order with minimum request body. The intent in the
     * request body should be "AUTHORIZE" for authorize intent flow.
     *
     */

private static function make($currCode,$name,$description,$price,$tax,$amount){
  return array(

    'name' => $name,

    'description' => $description,


    'unit_amount' =>

      array(

        'currency_code' => $currCode,

        'value' => $price,

      ),

    'tax' =>

      array(

        'currency_code' => $currCode,

        'value' => $tax,

      ),

    'quantity' => $amount,

    'category' => 'PHYSICAL_GOODS',

    );
}



    private static function buildRequestBody()
    {
      require_once('../../private/products/getData.php');
      $data = new getData;
      // echo $data->id(2);

    $countryCode="eur";
    $totalproducts=0;
    $shippingcost=2;
    $handling=0;
    $tax=0;
    $items =array();
    $cookies ;

    
    if(!isset($_COOKIE['products'])) {
        echo 'help';

    } else {
   
     $cookies = $_COOKIE['products'];
    }




     $decoded =json_decode ($cookies);
         //add products to list
    for($i=0;$i<count($decoded);$i++){
      $taxproduct =1*$decoded[$i]->amount;
      $tax += $taxproduct;
$totalproducts +=$decoded[$i]->amount;
$items[$i]=CreateOrder::make($countryCode,$decoded[$i]->id,"description",$decoded[$i]->amount,$taxproduct,1);
    }   

    $totalValuewhitTax=$tax+$handling+$shippingcost+$totalproducts;


         return array(

          'intent' => 'CAPTURE',

          'application_context' =>

              array(

                  'return_url' => 'localhost:90/',

                  'cancel_url' => 'localhost:90/books'

              ),

          'purchase_units' => 
          array(
            0=> 
            array(

      
              'description' => 'books in ido language',
      
              'soft_descriptor' => 'books',
      
              'amount' =>
      
                array(
      
                  'currency_code' => $countryCode,
      
                  'value' => $totalValuewhitTax,
      
                  'breakdown' =>
      
                    array(
      
                      'item_total' =>
      
                        array(
      
                          'currency_code' => $countryCode,
      
                          'value' => $totalproducts,
      
                        ),
      
                      'shipping' =>
      
                        array(
      
                          'currency_code' => $countryCode,
      
                          'value' => $shippingcost,
      
                        ),
      
                      'handling' =>
      
                        array(
      
                          'currency_code' => $countryCode,
      
                          'value' => $handling,
      
                        ),
      
                      'tax_total' =>
      
                        array(
      
                          'currency_code' => $countryCode,
      
                          'value' => $tax,
      
                        ),
      
                    ),
      
                ),
      
              'items' =>$items,
      
                
      
              'shipping' =>
      
                array(
      
                  'method' => 'United States Postal Service',
      
                  'address' =>
      
                    array(
      
                      'address_line_1' => '123 Townsend St',
      
                      'address_line_2' => 'Floor 6',
      
                      'admin_area_2' => 'San Francisco',
      
                      'admin_area_1' => 'CA',
      
                      'postal_code' => '94107',
      
                      'country_code' => 'US',
      
                    ),
      
                ),
      
            ),


            
          )
              
        );
    }



}


/**
 *This is the driver function that invokes the createOrder function to create
 *a sample order.
 */
if (!count(debug_backtrace()))
{
  CreateOrder::createOrder(true);
}


?>