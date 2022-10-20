<?php

namespace BrasilCash\API30\Ecommerce\Request;

use BrasilCash\API30\Ecommerce\Sale;
use BrasilCash\API30\Environment;
use BrasilCash\API30\Merchant;
use Psr\Log\LoggerInterface;

/**
 * Class CreateSaleRequest
 *
 * @package BrasilCash\API30\Ecommerce\Request
 */
class CreateSaleRequest extends AbstractRequest
{

    private $environment;

	/**
	 * CreateSaleRequest constructor.
	 *
	 * @param Merchant $merchant
	 * @param Environment $environment
	 * @param LoggerInterface|null $logger
	 */
    public function __construct(Merchant $merchant, Environment $environment, LoggerInterface $logger = null)
    {
        parent::__construct($merchant, $logger);

        $this->environment = $environment;
    }

    /**
     * @param $sale
     *
     * @return null
     * @throws \BrasilCash\API30\Ecommerce\Request\BrasilCashRequestException
     * @throws \RuntimeException
     */
    public function execute($sale)
    {
        $url = $this->environment->getApiUrl() . '1/sales/';

        return $this->sendRequest('POST', $url, $sale);
    }

    /**
     * @param $json
     *
     * @return Sale
     */
    protected function unserialize($json)
    {
        return Sale::fromJson($json);
    }
}
