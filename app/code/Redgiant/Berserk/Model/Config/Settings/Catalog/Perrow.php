<?php
namespace Redgiant\Berserk\Model\Config\Settings\Catalog;

class Perrow implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 2, 'label' => __('2')], 
            ['value' => 3, 'label' => __('3')], 
            ['value' => 4, 'label' => __('4')], 
            ['value' => 5, 'label' => __('5')], 
            ['value' => 6, 'label' => __('6')]
        ];
    }

    public function toArray()
    {
        return [
            2 => __('2'),
            3 => __('3'),
            4 => __('4'),
            5 => __('5'),
            6 => __('6')
        ];
    }
}