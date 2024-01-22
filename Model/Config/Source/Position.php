<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Swirth\Whatsapp\Model\Config\Source;

class Position implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [['value' => 'left', 'label' => __('left')], ['value' => 'right', 'label' => __('right')]];
    }

    public function toArray()
    {
        return ['left' => __('left'), 'right' => __('right')];
    }
}
