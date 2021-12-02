<?php
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';


$products = ModProductsHelper::getProducts($params);
require JModuleHelper::getLayoutPath('mod_products');