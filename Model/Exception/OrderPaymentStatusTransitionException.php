<?php

namespace Paynow\PaymentGateway\Model\Exception;

use Exception;

/**
 * Class OrderPaymentStatusTransitionException
 *
 * @package Paynow\PaymentGateway\Model\Exception
 */
class OrderPaymentStatusTransitionException extends Exception
{
    const EXCEPTION_MESSAGE = 'Order status transition is incorrect %s - %s';

    public function __construct($orderPaymentStatus, $paymentStatus)
    {
        parent::__construct(sprintf(self::EXCEPTION_MESSAGE, $orderPaymentStatus, $paymentStatus));
    }
}
