<?php

namespace App\Validation\Rules;


use Respect\Validation\Rules\AbstractRule;

class ConfirmPassword extends AbstractRule {

	protected $password;

	public  function __construct($password) {
		$this->password = $password;
	}

	public function validate($input) {
		// Checks whether two values, coming from a form, are identical
		return ($input === $this->password);
	}

}