<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Swirth\Whatsapp\Model\Config\Source;

class Size implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [['value' => 'small', 'label' => __('small')],['value' => 'medium', 'label' => __('medium')],['value' => 'large', 'label' => __('large')]];
    }

    public function toArray()
    {
        return ['small' => __('small'),'medium' => __('medium'),'large' => __('large')];
    }
}
