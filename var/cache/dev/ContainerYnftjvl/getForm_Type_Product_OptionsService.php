<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.product.options' shared service.

return $this->services['form.type.product.options'] = new \PrestaShopBundle\Form\Admin\Product\ProductOptions(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : ($this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.product']) ? $this->services['prestashop.adapter.data_provider.product'] : ($this->services['prestashop.adapter.data_provider.product'] = new \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.supplier']) ? $this->services['prestashop.adapter.data_provider.supplier'] : ($this->services['prestashop.adapter.data_provider.supplier'] = new \PrestaShop\PrestaShop\Adapter\Supplier\SupplierDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->load('getPrestashop_Adapter_DataProvider_CurrencyService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.attachment']) ? $this->services['prestashop.adapter.data_provider.attachment'] : ($this->services['prestashop.adapter.data_provider.attachment'] = new \PrestaShop\PrestaShop\Adapter\Product\AttachmentDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'});
