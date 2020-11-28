<?php

namespace App\Rules;

use App\OTP;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class OTPExpired implements Rule
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
        if(!$find){
            return true;
        }
        $startDate = Carbon::createFromFormat('Y-m-d H:i:s', $find->created_at);
        $endDate = Carbon::createFromFormat('Y-m-d H:i:s', now());
        // Return If the time difference is lesser than 10 minutes
        return $startDate->diffInMinutes($endDate) <= 10;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The OTP entered has expired, please generate a new one.';
    }
}
