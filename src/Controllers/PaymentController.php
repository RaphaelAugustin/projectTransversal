<?php
/**
 * Created by PhpStorm.
 * User: Taf
 * Date: 29/05/2015
 * Time: 00:37
 */

namespace Taf\Controllers;


class PaymentController {

    public function payment()
    {
        $products = array(
            0 => array(
                'name' => 'Abonnement week',
                'description' => 'fonctionnalité pendant 1 semaines',
                'quantity' => 1,
                'price' => 8.0
            ),
            1 => array(
                'name' => 'Abonnement month',
                'description' => 'fonctionnalité pendant 1 mois',
                'quantity' => 1,
                'price' => 20.0
            ),
            2 => array(
                'name' => 'Abonnement year',
                'description' => 'fonctionnalité pendant 1 years',
                'quantity' => 1,
                'price' => 96.0
            )
        );


        $PaypalConfig = new \AlexandreSimonet\PaypalComponent\PaypalConfig([
            'USER' => 'testmerchant_api1.rush.fr',
            'PASSWORD' => 'NVHC8VQGUSV9LKVX',
            'SIGNATURE' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31AO9Fm95QT0Ypg-B1g6PddV-gO0JC',

            // /!\ CHANGE URL WITH EVERY SERVER OR COMPUTER !!!!!!!!!!!!!!
            'RETURNURL' => 'http://project.transversal/web/index.php?p=paymentSuccess',
            'CANCELURL' => 'http://project.transversal/web/index.php?p=paymentCancel',
            'CURRENCYCODE' => 'EUR',
            'TOTALPAYMENT' => '20.00'
        ]);


        $SetExpressChekout = new \AlexandreSimonet\PaypalComponent\SetExpressCheckout($PaypalConfig, $products);
        $responseArray = [];
        parse_str($SetExpressChekout->getRequest(), $responseArray);
var_dump($responseArray);

        $url = 'https://www.sandbox.paypal.com/webcr?cmd=_express-checkout&useraction=commit&token=' . $responseArray['TOKEN'];


        echo "<a href = \"<?= $url ?>\" target = \"_blank\" > Payer</a >";
        }
}