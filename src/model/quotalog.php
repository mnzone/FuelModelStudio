<?php
/**
 * Created by PhpStorm.
 * User: ray
 * Date: 2018/12/25
 * Time: 9:00 PM
 */

class Model_QuotaLog extends \Model_Base
{

    /**
     * @var  string  table name to overwrite assumption
     */
    protected static $_table_name = 'quotas_logs';

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