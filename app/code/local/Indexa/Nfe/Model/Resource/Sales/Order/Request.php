<?php
/**
 * Indexa - NF-e. 
 *
 * @title      Magento Indexa NF-e
 * @category   General
 * @package    Indexa_Nfe
 * @author     Indexa Development Team <desenvolvimento@indexainternet.com.br>
 * @copyright  Copyright (c) 2011 Indexa - http://www.indexainternet.com.br
 */


class Indexa_Nfe_Model_Resource_Sales_Order_Request extends Indexa_Nfe_Model_Resource_Db_Abstract{
    
    /**
     * Initialize resource
     *
     */
    public function _construct(){
        $this->_init('indexa_nfe/sales_order_request', 'id');
    }
}
