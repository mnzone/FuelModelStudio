<?php
/**
 * Created by PhpStorm.
 * User: ray
 * Date: 2018/12/23
 * Time: 9:57 PM
 */

class Model_Bank extends \Model_Base
{

    /**
     * @var  string  table name to overwrite assumption
     */
    protected static $_table_name = 'banks';

    protected static $_primary_key = ['id'];

}