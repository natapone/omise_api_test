<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

class PaymentController extends AppController {

  public function index() {
    printf(Configure::read('App.omise.OMISE_PUBLIC_KEY'));
    // printf("xxxxxxx");
    // $payment = $this->Paginator->paginate($this->Articles->find());
    $payment = "";
    $this->set(compact('payment'));
  }


}
