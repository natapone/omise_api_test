<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;


// require_once dirname(__FILE__).'/../../vendor/omise/omise-php/lib/omise/OmiseAccount.php';
// require_once dirname(__FILE__).'/../../vendor/omise/omise-php/lib/Omise.php';

use Omise;
use OmiseAccount;



class PaymentController extends AppController {

  public function initialize() {
    parent::initialize();

    define('OMISE_PUBLIC_KEY', Configure::read('App.omise.OMISE_PUBLIC_KEY'));
    define('OMISE_SECRET_KEY', Configure::read('App.omise.OMISE_SECRET_KEY'));
    define('OMISE_API_VERSION', Configure::read('App.omise.OMISE_API_VERSION'));
  }

  public function index() {

    $account = OmiseAccount::retrieve();
    // print_r($account);

    $this->set(compact('account'));
  }


}
