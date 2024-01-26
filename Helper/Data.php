<?php
declare(strict_types=1);

namespace Swirth\WhatsApp\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;

class Data extends AbstractHelper
{

    function __construct(Context $context)
    {
        parent::__construct($context);
    }

    function isModuleEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag("whatsapp/general/enabled");
    }

    function getPhoneNumber()
    {
        return $this->scopeConfig->getValue("whatsapp/general/whatsapp_number");
    }

    function getMessage()
    {
        return $this->scopeConfig->getValue("whatsapp/general/message");
    }

    function getPosition()
    {
        return $this->scopeConfig->getValue("whatsapp/general/position");
    }

    function getSize()
    {
        return $this->scopeConfig->getValue("whatsapp/general/size");
    }
}
