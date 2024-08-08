<?php

namespace App\Helper;


class PhoneHelper
{
    /**
     * Check and modify phone number based on its prefix.
     *
     * @param string $phoneNumber
     * @return string
     */
    public static function formatPhoneNumber($phoneNumber)
    {
        $phoneNumber = trim($phoneNumber);

        if (strpos($phoneNumber, '0') === 0) {
            $phoneNumber = '255' . substr($phoneNumber, 1);
        }

        return $phoneNumber;
    }
}
