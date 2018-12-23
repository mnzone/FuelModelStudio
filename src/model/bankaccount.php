<?php
/**
 * Created by PhpStorm.
 * User: ray
 * Date: 2018/12/23
 * Time: 11:10 AM
 */

class Model_BankAccount extends \Model_Base
{

    /**
     * @var  string  table name to overwrite assumption
     */
    protected static $_table_name = 'banks_accounts';

    protected static $_primary_key = ['id'];

}