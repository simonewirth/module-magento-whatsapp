# Mage2 Module Swirth Whatsapp

    ``swirth/module-whatsapp``

 - [Description](#markdown-header-description)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)


## Description
Basically, this module makes a WhatsApp chat button.

## Installation
\* = in production please use the `--keep-generated` option
> - `composer require swirth/module-whatsapp`
> - `bin/magento setup:upgrade `
> - Navigate to "Shop->Configuration->Swirth->Whatsapp" and configure the options.
> - Clear the cache.
### Type 1: Zip file

 - Unzip the zip file in `app/code/Swirth`
 - Enable the module by running `php bin/magento module:enable Swirth_Whatsapp`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`



