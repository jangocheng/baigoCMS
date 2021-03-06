<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if (!defined('IN_BAIGO')) {
    exit('Access Denied');
}

/*-------------------------通用-------------------------*/
return array(

    /*------链接文字------*/
    'href' => array(
        'add'   => '创建', //创建
        'edit'  => '编辑', //编辑
        'help'  => '帮助',
    ),

    /*------说明文字------*/
    'label' => array(
        'id'            => 'ID', //ID
        'all'           => '全部',
        'key'           => '关键词', //关键词
        'note'          => '备注',

        'source'        => '文章来源',
        'sourceName'    => '来源名称',
        'sourceUrl'     => '来源 URL',
        'author'        => '作者',
        'sourceOften'   => '常用来源',
    ),

    'confirm' => array(
        'del' => '确认永久删除吗？此操作不可恢复！', //确认清空回收站
    ),

    'btn' => array(
        'save'          => '保存', //提交
        'del'           => '永久删除', //删除
    ),
);
