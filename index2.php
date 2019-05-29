<?php
include __DIR__ . '/vendor/autoload.php';

use FilippoToso\Travelport;
use FilippoToso\Travelport\System;

// Create the API client
$travelport = new Travelport\Travelport(
    'Universal API/uAPI3304653990-389045cb', // Travelport User ID 
    '3Dd}Jy!9+7', // Travelport Password     
    'P7110410', // Travelport Target Branch
    Travelport\Endpoints::REGION_EMEA, // Region
    false // Set to false to use pre-production endpoints
);

// Create a Time request on the System service
$request = (new System\TimeReq())
    ->setBillingPointOfSaleInfo(new System\BillingPointOfSaleInfo('UAPI')); // Don't know what this is, but it's required to complete a call :(

// Execute the request
$response = $travelport->execute($request);
printf('The current system time is %s', $response->getSystemTime());

// Create a Ping request on the System service
$request = (new System\PingReq())
    ->setPayload('Hello World!')
    ->setBillingPointOfSaleInfo(new System\BillingPointOfSaleInfo('UAPI')); // Don't know what this is, but it's required to complete a call :(

// Execute the request
$response = $travelport->execute($request);
printf('Travelport pinged back: %s', $response->getPayload());
?>