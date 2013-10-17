<?php
	require __DIR__ . '/bootstrap.php';
	use PayPal\Api\Address;
	use PayPal\Api\Amount;
	use PayPal\Api\CreditCard;
	use PayPal\Api\Payer;
	use PayPal\Api\Payment;
	use PayPal\Api\FundingInstrument;
	use PayPal\Api\Transaction;


	$info = array(
		'setPaymentMethod' => 'credit_card',
		'address' => array(
			'setLine1' 		=> "3909 Witmer Road",
			'setLine2' 		=> "Niagara Falls",
			'setCity' 		=> "Niagara Falls",
			'setState' 		=> "NY",
			'setPostalCode' => "14305",
			'setCountryCode'=> "US",
			'setPhone' 		=> "716-298-1822",
		),
		'credit_card' => array(
			'setType' 		=> "visa",
			'setNumber' 	=> "4417119669820331",
			'setExpireMonth'=> "11",
			'setExpireYear' => "2019",
			'setCvv2' 		=> "012",
			'setFirstName' 	=> "Joe",
			'setLastName' 	=> "Shopper",
		),
		'amount' => array( 
			'setTotal' => '0.01', 
			'setCurrency' => 'USD',
		),
		'transaction' => array( 
			'setDescription' => 'Payment description',
		),
		'payment' => array( 
			'setIntent' => 'authorize', /*sale or authorize*/
		),
	);

	$addr = new Address();
	$addr->setLine1($info['address']['setLine1'])
		->setLine2($info['address']['setLine2'])
		->setCity($info['address']['setCity'])
		->setState($info['address']['setState'])
		->setPostalCode($info['address']['setPostalCode'])
		->setCountryCode($info['address']['setCountryCode'])
		->setPhone($info['address']['setPhone']);

	$card = new CreditCard();
	$card->setType($info['credit_card']['setType'])
		->setNumber($info['credit_card']['setNumber'])
		->setExpireMonth($info['credit_card']['setExpireMonth'])
		->setExpireYear($info['credit_card']['setExpireYear'])
		->setCvv2($info['credit_card']['setCvv2'])
		->setFirstName($info['credit_card']['setFirstName'])
		->setLastName($info['credit_card']['setLastName'])
		->setBillingAddress($addr);

	$fi = new FundingInstrument();
	$fi->setCreditCard($card);

	$payer = new Payer();
	$payer->setPaymentMethod($info['setPaymentMethod'])
		->setFundingInstruments(array($fi));

	$amount = new Amount();
	$amount->setCurrency($info['amount']['setCurrency'])
		->setTotal($info['amount']['setTotal']);

	$transaction = new Transaction();
	$transaction->setAmount($amount)
		->setDescription($info['transaction']['setDescription']);

	$payment = new Payment();
	$payment->setIntent($info['payment']['setIntent'])
		->setPayer($payer)
		->setTransactions(array($transaction));

	$result = array();
	$response = array();		
	try {
		$payment->create($apiContext);
	} catch (PayPal\Exception\PPConnectionException $ex) {
		// echo "Exception: " . $ex->getMessage() . PHP_EOL;
		$result = json_decode($ex->getData(), true);
	}
	
	if(empty($result)){
		$result = $payment->toArray();
	}

	if(isset($result['state']) && $result['state'] == 'approved'){
		//  ยืนยันผ่าน
		//$response['status'] = 'approved';
		echo 'Approve';
	}else{
		//  ยืนยันไม่ผ่าน
		//$response['status']  = 'error';
		echo 'ERROR';
	}

	/* เอาคอมเม้นออกเพื่อจะดูผลลัพธ์ */
	// print json_encode($result);
	// Open facebook

?>