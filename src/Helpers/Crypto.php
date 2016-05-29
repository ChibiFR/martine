<?php
namespace Martine\Helpers;

/**
 * Class Crypto
 * @package Martine\Helpers
 */
class Crypto
{
    /**
     * @var string
     */
    private $appKey;

    /**
     * Crypto constructor.
     * @param string $appKey
     */
    public function __construct(string $appKey)
    {
        $this->appKey = $appKey;
    }

    /**
     * Crypt a string with a appKey
     * 
     * @param string $str
     * @return string
     */
    public function encrypt(string $str): string
    {
        return crypt($str, $this->appKey);
    }

    /**
     * Checks if a given string matches a given crypt
     *
     * @param string $knowStr
     * @param string $cryptedStr
     * @return bool
     */
    public function equals(string $knowStr, string $cryptedStr): bool
    {
        return hash_equals($this->encrypt($knowStr), $cryptedStr);
    }
}
