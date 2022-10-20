<?php

namespace BrasilCash\API30\Ecommerce\Request;

/**
 * Class BrasilCashRequestException
 *
 * @package BrasilCash\API30\Ecommerce\Request
 */
class BrasilCashRequestException extends \Exception
{

    private $BrasilCashError;

    /**
     * BrasilCashRequestException constructor.
     *
     * @param string $message
     * @param int    $code
     * @param null   $previous
     */
    public function __construct($message, $code, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return mixed
     */
    public function getBrasilCashError()
    {
        return $this->brasilCashError;
    }

    /**
     * @param BrasilCashError $BrasilCashError
     *
     * @return $this
     */
    public function setBrasilCashError(BrasilCashError $BrasilCashError)
    {
        $this->BrasilCashError = $BrasilCashError;

        return $this;
    }
}
