<?php

namespace App\Validation\Rules;

use App\Models\Member;

use Respect\Validation\Rules\AbstractRule;

class MatchesPassword extends AbstractRule {

	protected $password;

	public  function __construct($password) {
		$this->password = $password;
	}

	public function validate($input) {
		// Checks whether an input value, coming from a form, matches the
		// hashed value in database
		return password_verify($input, $this->password);
	}

}