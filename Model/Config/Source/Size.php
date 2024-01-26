<?php
declare(strict_types=1);

namespace Swirth\WhatsApp\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Size implements ArrayInterface
{

    public function toOptionArray()
    {
        return [
            [
                'value' => 'small',
                'label' => __('small')
            ],
            [
                'value' => 'medium',
                'label' => __('medium')
            ],
            [
                'value' => 'large',
                'label' => __('large')
            ]
        ];
    }

    public function toArray()
    {
        return [
            'small' => __('small'),
            'medium' => __('medium'),
            'large' => __('large')
        ];
    }
}
