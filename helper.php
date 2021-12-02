<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModProductsHelper
{
    public function getProducts($params)
    {
        switch($params->get('listtype')) {
       case 'FEATURED':
            return self::getFeaturedProducts($params);
            break;
        case 'LATEST':
            return self::getLatestProducts($params);
            break;
}
    }
    
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getFeaturedProducts($params)
    {
        print_r($params->get('listtype'));
        $model = JModelLegacy::getInstance('Products', 'EngineModel');
        $products = $model->getFeaturedProducts();   
        return $products;
    }
    
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getLatestProducts($params)
    {
        $limit = $params->get('listlimit');
        print_r($params->get('listtype'));
        print_r($limit);
        $model = JModelLegacy::getInstance('Products', 'EngineModel');
        $products = $model->getLatestProducts($limit);   
        return $products;
    }
}