<?php

$config	= array
		(
			'identifier'			=>	'', //A unique identifier for the transaction
			'inv_num'				=>	'',
			'refund_type'			=>	'', //Can be Full or Partial
			'amt'					=>	'',  //Do not set amount if refund type is Full
			'currency_code'			=>	'',
			'note'					=>	'',
			'last_4_digits'			=>	'', //Last 4 digits of the credit card used		
		);

return $config;