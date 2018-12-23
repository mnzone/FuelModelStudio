<?php
/**
 * Created by PhpStorm.
 * User: ray
 * Date: 2018/12/23
 * Time: 11:03 AM
 */

abstract class Model_Base extends \Orm\Model
{
    /**
     * @var array   defined observers
     */
    protected static $_observers = [
        'Orm\\Observer_CreatedAt' => [
            'events' => ['before_insert'],
            'property' => 'created_at',
            'mysql_timestamp' => false
        ],
        'Orm\\Observer_UpdatedAt' => [
            'events' => ['before_update'],
            'property' => 'updated_at',
            'mysql_timestamp' => false
        ],
        'Orm\\Observer_Self' => [
            'events' => ['before_insert', 'before_update'],
            'property' => 'user_id'
        ],
    ];

    /**
     * 获取分页数据
     *
     * @param   object      $query            查询对象
     * @param   int         $per_count        每页返回数据量
     * @return array
     */
    public static function get_pagination($query, $per_count = 10){
        //分页查询
        $count = $query->count();

        $config = array(
            'pagination_url' => "",
            'total_items'    => $count,
            'per_page'       => $per_count,
            'uri_segment'    => 'start',
            'show_first'     => true,
            'show_last'      => true
        );

        $pagination = new \Pagination($config);

        $result = $query
            ->rows_offset($pagination->offset)
            ->rows_limit($pagination->per_page)
            ->get();

        return [$result, $pagination];
    }
}