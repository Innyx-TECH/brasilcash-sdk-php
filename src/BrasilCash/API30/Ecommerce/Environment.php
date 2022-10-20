<?php

namespace BrasilCash\API30\Ecommerce;

/**
 * Class Environment
 *
 * @package BrasilCash\API30\Ecommerce
 */
class Environment implements \BrasilCash\API30\Environment
{
    private $api;

    private $apiQuery;

    /**
     * Environment constructor.
     *
     * @param $api
     * @param $apiQuery
     */
    private function __construct($api, $apiQuery)
    {
        $this->api      = $api;
        $this->apiQuery = $apiQuery;
    }

    /**
     * @return Environment
     */
    public static function sandbox()
    {
        $api      = 'https://apisandbox.BrasilCashecommerce.BrasilCash.com.br/';
        $apiQuery = 'https://apiquerysandbox.BrasilCashecommerce.BrasilCash.com.br/';

        return new Environment($api, $apiQuery);
    }

    /**
     * @return Environment
     */
    public static function production()
    {
        $api      = 'https://api.BrasilCashecommerce.BrasilCash.com.br/';
        $apiQuery = 'https://apiquery.BrasilCashecommerce.BrasilCash.com.br/';

        return new Environment($api, $apiQuery);
    }

    /**
     * Gets the environment's Api URL
     *
     * @return string the Api URL
     */
    public function getApiUrl()
    {
        return $this->api;
    }

    /**
     * Gets the environment's Api Query URL
     *
     * @return string Api Query URL
     */
    public function getApiQueryURL()
    {
        return $this->apiQuery;
    }
}
