<?php

require_once('Vindi.php');

$vindClass = new Vindi('api_key');


$id_customer = $vindClass->createCustomer('Custumer name', 'custumer@email.com', 123);

if($id_customer)
{
	$product_id = $vindClass->createProduct('Custumer name', 'custumer@email.com', 123);
	if($product_id)
	{
		//Boleto bancário
		$vindClass->createBill($id_customer, 'bank_slip', 1, $product_id);
	}
}

/*

{"payment_methods":[{"id":1110,"public_name":"Cartão de crédito","name":"Cartão de crédito","code":"credit_card","type":"PaymentMethod::CreditCard","status":"active","settings":{},"set_subscription_on_success":true,"allow_as_alternative":true,"payment_companies":[{"id":2,"name":"Visa","code":"visa"},{"id":1,"name":"MasterCard","code":"mastercard"}],"maximum_attempts":5,"created_at":"2015-04-08T17:35:03.000-03:00","updated_at":"2015-04-08T17:35:03.000-03:00"},{"id":1111,"public_name":"Boleto bancário","name":"Boleto bancário","code":"bank_slip","type":"PaymentMethod::BankSlip","status":"inactive","settings":{"payment_company_id":5,"bank_slip_type":"175","branch":"1111","account":"11111-1","due_days":3},"set_subscription_on_success":false,"allow_as_alternative":false,"payment_companies":[],"maximum_attempts":1,"created_at":"2015-04-08T17:35:03.000-03:00","updated_at":"2015-04-08T17:35:03.000-03:00"},{"id":1112,"public_name":"Dinheiro","name":"Dinheiro","code":"cash","type":"PaymentMethod::Cash","status":"inactive","settings":{},"set_subscription_on_success":false,"allow_as_alternative":false,"payment_companies":[],"maximum_attempts":1,"created_at":"2015-04-08T17:35:03.000-03:00","updated_at":"2015-04-08T17:35:03.000-03:00"}]}

*/