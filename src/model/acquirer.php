<?php
/**
 * Created by PhpStorm.
 * User: ray
 * Date: 2018/12/28
 * Time: 2:20 PM
 */

class Model_Acquirer extends \Model_Base
{

    /**
     * @var  string  table name to overwrite assumption
     */
    protected static $_table_name = 'acquirers';

    protected static $_primary_key = ['id'];

}