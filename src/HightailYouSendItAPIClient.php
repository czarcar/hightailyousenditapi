<?php
/*
 * HightailYouSendItAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HightailYouSendItAPILib;

use HightailYouSendItAPILib\Controllers;

/**
 * HightailYouSendItAPILib client class
 */
class HightailYouSendItAPIClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct($apiKey = NULL)
    {
        Configuration::$apiKey = $apiKey ? $apiKey : Configuration::$apiKey;
    }
 
    /**
     * Singleton access to UserAPIs controller
     * @return Controllers\UserAPIsController The *Singleton* instance
     */
    public function getUserAPIs()
    {
        return Controllers\UserAPIsController::getInstance();
    }
 
    /**
     * Singleton access to SendReceiveTrackAPIs controller
     * @return Controllers\SendReceiveTrackAPIsController The *Singleton* instance
     */
    public function getSendReceiveTrackAPIs()
    {
        return Controllers\SendReceiveTrackAPIsController::getInstance();
    }
 
    /**
     * Singleton access to StorageAPIs controller
     * @return Controllers\StorageAPIsController The *Singleton* instance
     */
    public function getStorageAPIs()
    {
        return Controllers\StorageAPIsController::getInstance();
    }
 
    /**
     * Singleton access to ShareAPIs controller
     * @return Controllers\ShareAPIsController The *Singleton* instance
     */
    public function getShareAPIs()
    {
        return Controllers\ShareAPIsController::getInstance();
    }
}