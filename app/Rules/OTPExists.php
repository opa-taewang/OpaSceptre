<?php

namespace App\Rules;

use App\OTP;
use Illuminate\Contracts\Validation\Rule;

class OTPExists implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public $email;
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
       $find = OTP::where('email', $this->email)
            ->where('token', $value)
            ->first();
        return $find;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please Enter a valid OTP.';
    }
}
