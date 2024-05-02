<?php

namespace Checkout\Payments\Request\Source\Apm;

use Checkout\Common\AccountHolder;
use Checkout\Common\PaymentSourceType;
use Checkout\Payments\Request\Source\AbstractRequestSource;

/**
 * @deprecated use Checkout\Payments\Request\Source\Common\RequestKlarnaSource instead.
 */
class RequestKlarnaSource extends AbstractRequestSource
{
    public function __construct()
    {
        parent::__construct(PaymentSourceType::$klarna);
    }

    /**
     * @var AccountHolder
     */
    public $account_holder;
}
