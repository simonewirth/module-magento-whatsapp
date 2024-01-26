<?php
declare(strict_types=1);

namespace Swirth\WhatsApp\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Position implements ArrayInterface
{

    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'left',
                'label' => __('left')
            ],
            [
                'value' => 'right',
                'label' => __('right')
            ]
        ];
    }

    public function toArray(): array
    {
        return [
            'left' => __('left'),
            'right' => __('right')
        ];
    }
}
