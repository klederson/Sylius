<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Core\TokenAssigner;

use Sylius\Component\Core\Model\OrderInterface;

/**
 * @author Arkadiusz Krakowiak <arkadiusz.krakowiak@lakion.com>
 */
final class UniqueIdBasedOrderTokenAssigner implements OrderTokenAssignerInterface
{
    /**
     * {@inheritdoc}
     */
    public function assignTokenValue(OrderInterface $order)
    {
        $order->setTokenValue(uniqid());
    }
}
