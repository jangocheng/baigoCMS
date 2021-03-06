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
    'href' => array(
        'add'   => '创建',
        'edit'  => '编辑',
        'help'  => '帮助',
    ),

    /*------说明文字------*/
    'label' => array(
        'id'        => 'ID',
        'all'       => '全部',
        'note'      => '备注',

        'mimeContent'   => 'MIME',
        'mimeOften'     => '常用 MIME',

        'ext'       => '扩展名',
    ),

    'btn' => array(
        'del'       => '永久删除', //删除
        'save'      => '保存',
        'mimeAdd'   => '增加',
    ),

    'option' => array(
        'pleaseSelect'  => '请选择', //请选择
    ),

    'confirm' => array(
        'del'         => '确认永久删除吗？此操作不可恢复！', //确认清空回收站
    ),
);
