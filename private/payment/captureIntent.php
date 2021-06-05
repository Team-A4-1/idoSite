<?php

namespace payment\CaptureIntentExamples;

require '../../vendor/autoload.php';

//1. Import the PayPal SDK client that was created in `Set up Server-Side SDK`.
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
class CreateOrder
{

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
    private static function buildRequestBody()
    {





         return array(

          'intent' => 'CAPTURE',

          'application_context' =>

              array(

                  'return_url' => 'localhost:90/',

                  'cancel_url' => 'localhost:90/books'

              ),

          'purchase_units' =>

              array(

                  0 =>

                      array(

                          'amount' =>

                              array(

                                  'currency_code' => 'eur',

                                  'value' => '220'

                              )

                      )

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