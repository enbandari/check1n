﻿<?php
/**
 * Created by JetBrains PhpStorm.
 * User: huobingqian
 * Date: 14-4-18
 * Time: 下午7:34
 * To change this template use File | Settings | File Templates.
 */

return array(
    'update_db_url' => 'http://10.134.44.84:8999/?query=&type=7&timestr=',

    //hint
    'db_locked' =>'数据库正在更新，当前系统处于只读模式。',
    'db_ready'=>'数据库已经就绪。',
    'db_update_failed' => '操作失败：数据库更新失败，请检查所填内容是否有误，或联系后端同学解决。',
    'db_update_no_response' =>'操作失败：后端没有响应，可能是网络繁忙或者服务器异常，请稍后重试。',

    'operate_failed_db_locked' =>'操作失败：数据库更新中，请于稍后重试。',
    'operate_success'=>'操作成功。',

    //'db_check1n'=>'odbc:driver={microsoft access driver (*.mdb)};dbq=C:/Program Files/ZKTime5.0/att2000.mdb',
    'db_check1n'=>'odbc:driver={microsoft access driver (*.mdb)};dbq='.dirname(__FILE__).'/../data/att2000.mdb',

    'check1n_count'=>5,
);