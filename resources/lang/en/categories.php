<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 18/04/16
 * Time: 14:00
 */
use DB;

$categories = DB::table('categories')->select('name_en as name')->get();

return [
    'categories' => $categories
];