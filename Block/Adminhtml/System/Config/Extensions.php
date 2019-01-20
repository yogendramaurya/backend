<?php

namespace Acodesh\Backend\Block\Adminhtml\System\Config;

/**
 * Class Extensions
 * @package Acodesh\Backend\Block\Adminhtml\System\Config
 */
class Extensions extends \Magento\Config\Block\System\Config\Form\Fieldset
{
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return '<iframe id="acodesh_store" width="100%" src="https://www.acodesh.com/store/index.html?id=' . uniqid() .'" ></iframe>';
    }
}
