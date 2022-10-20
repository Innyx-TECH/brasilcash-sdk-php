<?php

namespace BrasilCash\API30\Ecommerce;

/**
 * Interface BrasilCashSerializable
 *
 * @package BrasilCash\API30\Ecommerce
 */
interface BrasilCashSerializable extends \JsonSerializable
{
    /**
     * @param \stdClass $data
     *
     * @return mixed
     */
    public function populate(\stdClass $data);
}
