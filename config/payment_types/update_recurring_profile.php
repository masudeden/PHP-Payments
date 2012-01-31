<?php

$config	= array(
			'identifier'				=>	'',	//Required.
			'note'						=>	'',	
			'subscriber_name'			=>	'',
			'profile_reference'			=>	'',
			'additional_billing_cycles'	=>	'',
			'desc'						=>	'',	
			'max_failed_payments'		=>	'',
			'auto_bill_amt'				=>	'',
			'profile_start_date'		=>	'',  //The subscription start date.			
			'billing_period'			=>	'', //Required.  Year, month, week
			'billing_frequency'			=>	'',	//Required.  Number of times to bill per period
			'total_billing_cycles'		=>	'',
			'amt'						=>	'',	//Required.  Amount to bill
			'trial_billing_cycles'		=>	'',
			'trial_amt'					=>	'',						
			'currency_code'				=>	'',
			'shipping_amt'				=>	'',
			'tax_amt'					=>	'',
			'outstanding_amt'			=>	'',
			'failed_init_action'		=>	'',	//What to do if the initial bill failes.  Continue or Cancel.
			'ship_to_first_name'				=>	'',
			'ship_to_last_name'			=>	'',
			'ship_to_company'			=>	'',
			'ship_to_street'			=>	'',
			'ship_to_street2'			=>	'',
			'ship_to_city'				=>	'',
			'ship_to_state'				=>	'',
			'ship_to_zip'				=>	'',
			'ship_to_country'			=>	'',
			'cc_type'					=>	'',	//Required.  Credit card type.
			'cc_number'					=>	'',	//Required.  Credit card number.
			'exp_date'					=>	'',	//Required.  Credit card expiration date.
			'cc_code'					=>	'',	//Required.  Credit Card CVV code.
			'start_date'				=>	'',	
			'issue_number'				=>	'',
			'email'						=>	'',
			'first_name'				=>	'',
			'last_name'					=>	'',
			'street'					=>	'',  //Required.  Buyer's street address.
			'street2'					=>	'',
			'city'						=>	'',	//Required.  Buyer's city.
			'state'						=>	'',	//Required.  Buyer's state or province.
			'country_code'				=>	'',
			'postal_code'				=>	'',	//Required.  Buyer's postal code.
			'phone'			=>	'',	
			'fax'			=>	'',
			'inv_num'		=>	'',
			'business_name'		=>	'',
			'countrycode'		=>	'',
		);

return $config;