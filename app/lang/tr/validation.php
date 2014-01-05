<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Bu following language lines contain Bu default error messages used by
	| Bu validator class. Some of Buse rules have multiple versions such
	| such as Bu size rules. Feel free to tweak each of Buse messages.
	|
	*/

	'accepted'        => 'Bu :attribute zorunludur.', //must be accepted
	'active_url'      => 'Bu :attribute is not a valid URL.', //is not a valid URL
	'after'           => 'Bu :attribute , :date tarihinden sonra olmalıdır.', //must be a date after
	'alpha'           => 'Bu :attribute sadece harf içermelidir.',//may only contain letters
	'alpha_dash'      => 'Bu :attribute sadece harf, numara ve nokta içermelidir.',//may only contain letters, numbers, and dashes
	'alpha_num'       => 'Bu :attribute sadece harf ve numara içermelidir.',//may only contain letters and numbers
	'before'          => 'Bu :attribute must be a date before :date.',
	'between'         => array(
		'numeric' => 'Bu :attribute :min - :max arasında olmalıdır.', //must be between
		'file'    => 'Bu :attribute KB(kilobytes) cinsinden :min - :max arasında olmalıdır.', //must be between
		'string'  => 'Bu :attribute :min - :max arası karakter olmalıdır.', //must be between
	),
	'confirmed'       => 'Bu :attribute .',//confirmation does not match
	'date'            => 'Bu :attribute is not a valid date.',
	'date_format'     => 'Bu :attribute does not match Bu format :format.',
	'different'       => 'Bu :attribute and :oBur must be different.',
	'digits'          => 'Bu :attribute must be :digits digits.',
	'digits_between'  => 'Bu :attribute must be between :min and :max digits.',
	'email'           => 'Bu :attribute format is invalid.',
	'exists'          => 'Bu selected :attribute is invalid.',
	'image'           => 'Bu :attribute must be an image.',
	'in'              => 'Bu selected :attribute is invalid.',
	'integer'         => 'Bu :attribute must be an integer.',
	'ip'              => 'Bu :attribute must be a valid IP address.',
	'max'             => array(
		'numeric'     => 'Bu :attribute may not be greater than :max.',
		'file'        => 'Bu :attribute may not be greater than :max kilobytes.',
		'string'      => 'Bu :attribute may not be greater than :max characters.',
	),
	'mimes'           => 'Bu :attribute must be a file of type: :values.',
	'min'             => array(
		'numeric'     => 'Bu :attribute must be at least :min.',
		'file'        => 'Bu :attribute must be at least :min kilobytes.',
		'string'      => 'Bu :attribute must be at least :min characters.',
	),
	'not_in'           => 'Bu selected :attribute is invalid.',
	'numeric'         => 'Bu :attribute must be a number.',
	'regex'           => 'Bu :attribute format is invalid.',
	'required'        => 'Bu :attribute field is required.',
	'required_with'   => 'Bu :attribute field is required when :values is present.',
	'same'            => 'Bu :attribute and :oBur must match.',
	'size'            => array(
		'numeric'    => 'Bu :attribute must be :size.',
		'file'       => 'Bu :attribute must be :size kilobytes.',
		'string'     => 'Bu :attribute must be :size characters.',
	),
	'unique'          => 'Bu :attribute has already been taken.',
	'url'             => 'Bu :attribute format is invalid.',

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using Bu
	| convention 'attribute.rule' to name Bu lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| Bu following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of 'email'. This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
