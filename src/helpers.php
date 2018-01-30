<?php
/**
 * src/helpers.php.
 *
 * @author      Austin Heap <me@austinheap.com>
 * @version     v0.1.0
 */


if (! function_exists('database_encryption')) {
    /**
     * @return \AustinHeap\Database\Encryption\EncryptionHelper
     */
    function database_encryption()
    {
        return \AustinHeap\Database\Encryption\EncryptionFacade::getInstance();
    }
}

if (! function_exists('db_encryption')) {
    /**
     * @return \AustinHeap\Database\Encryption\EncryptionHelper
     */
    function db_encryption()
    {
        return database_encryption();
    }
}

if (! function_exists('dbencryption')) {
    /**
     * @return \AustinHeap\Database\Encryption\EncryptionHelper
     */
    function dbencryption()
    {
        return database_encryption();
    }
}

if (! function_exists('database_encrypt')) {
    /**
     * @return null|string
     */
    function database_encrypt($value = null)
    {
        return __FUNCTION__.': FUNCTION-NOT-IMPLEMENTED';
    }
}

if (! function_exists('db_encrypt')) {
    /**
     * @return null|string
     */
    function db_encrypt($value = null)
    {
        return database_encrypt($value);
    }
}

if (! function_exists('dbencrypt')) {
    /**
     * @return null|string
     */
    function dbencrypt($value = null)
    {
        return database_encrypt($value);
    }
}

if (! function_exists('database_decrypt')) {
    /**
     * @return null|string
     */
    function database_decrypt($value)
    {
        return __FUNCTION__.': FUNCTION-NOT-IMPLEMENTED';
    }
}

if (! function_exists('db_decrypt')) {
    /**
     * @return null|string
     */
    function db_decrypt($value)
    {
        return database_decrypt($value);
    }
}

if (! function_exists('dbdecrypt')) {
    /**
     * @return null|string
     */
    function dbdecrypt($value)
    {
        return database_decrypt($value);
    }
}
