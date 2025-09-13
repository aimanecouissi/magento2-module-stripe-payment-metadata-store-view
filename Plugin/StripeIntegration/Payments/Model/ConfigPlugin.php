<?php
/**
 * Aimane Couissi - https://aimanecouissi.com
 * Copyright © Aimane Couissi 2025–present. All rights reserved.
 * Licensed under the MIT License. See LICENSE for details.
 */

declare(strict_types=1);

namespace AimaneCouissi\StripePaymentMetadataStoreView\Plugin\StripeIntegration\Payments\Model;

use Magento\Sales\Model\Order;
use StripeIntegration\Payments\Model\Config;

class ConfigPlugin
{
    /**
     * Adds store view name to Stripe payment metadata.
     *
     * @param Config $subject
     * @param array $result
     * @param Order $order
     * @return array
     */
    public function afterGetMetadata(Config $subject, array $result, Order $order): array
    {
        $result['Store View'] = $order->getStore()->getname();
        return $result;
    }
}
