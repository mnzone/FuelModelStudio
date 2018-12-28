<?php
/**
 * Created by PhpStorm.
 * User: ray
 * Date: 2018/12/28
 * Time: 4:39 PM
 */

class Model_AccountTrade extends \Model_Base
{

    /**
     * @var  string  table name to overwrite assumption
     */
    protected static $_table_name = 'banks_accounts_trades';

    protected static $_primary_key = ['id'];

    /**
     * @var array belongs_to relationships
     */
    protected static $_belongs_to = [
        'account' => [
            'model_to' => 'Model_BankAccount',
            'key_from' => 'account_id',
            'key_to'   => 'id',
        ]
    ];
}