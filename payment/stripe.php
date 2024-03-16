<?php

require_once __DIR__ . '/vendor/autoload.php'; // Include autoload file

\Stripe\Stripe::setApiKey('sk_test_51NkQgqAXdU3BS2DARAOty1Olm51Ue1oKbJRzYgk4OlwmqDQv2UDzOTO7gofScKmjsrbhsLfAe1Hby0Uoad9YYl3T007eVMMgQj'); // Initialize Stripe API with your Secret API key

$amount = 100;
		$amount *= 100;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'AED',
			'description' => 'Payment From All About Laravel',
			'payment_method_types' => ['card'],
		]);

echo json_encode(['sessionId' => $payment_intent->id]);
