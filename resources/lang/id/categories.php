<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 18/04/16
 * Time: 14:01
 */
use DB;

$categories = DB::table('categories')->select('name_id as name')->get();

return [
    'categories' => $categories
];