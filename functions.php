<?php
function themeConfig($form)
{
    $favicon = new Typecho_Widget_Helper_Form_Element_Text(
        'favicon',
        NULL, NULL,
        '网站Favicon地址',
        '在这里填入一个图片 URL 地址, 以设置网站标题栏图标'
    );
    $avatar = new Typecho_Widget_Helper_Form_Element_Text(
        'avatar',
        NULL, NULL,
        '头像地址',
        '在这里填入头像地址, 以设置首页头像'
    );
    $introduce = new Typecho_Widget_Helper_Form_Element_Textarea(
        'introduce',
        null, null,
        '个人简介',
        '填写个人简介，如特长等，显示在首页昵称下方'
    );
    $name = new Typecho_Widget_Helper_Form_Element_Text(
        'name',
        NULL, NULL,
        '个人昵称',
        '填写个人昵称、网名等，显示在首页头像下方'
    );
    $cur = new Typecho_Widget_Helper_Form_Element_Radio('cur',
        array(1 => _t('启用'),
        0 => _t('关闭')),
        0, _t('网站指针美化设置'), _t('该功能默认关闭'));
    $form->addInput($favicon);
    $form->addInput($avatar);
    $form->addInput($name);
    $form->addInput($introduce);
    $form->addInput($cur);
}
function themeFields($layout)
{
    $tzurl = new Typecho_Widget_Helper_Form_Element_Textarea('tzurl', NULL, NULL, _t('要跳转的网址'), _t('在这里填入要跳转的网址，在菜单点击后将会跳转'));
    $layout->addItem($tzurl);
}
?>