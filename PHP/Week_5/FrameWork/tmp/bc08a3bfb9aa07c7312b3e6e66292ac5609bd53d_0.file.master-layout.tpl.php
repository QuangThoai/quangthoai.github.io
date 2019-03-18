<?php
/* Smarty version 3.1.33, created on 2019-03-18 08:54:15
  from 'C:\xampp\htdocs\GMO_PHP\php\Week_5\FrameWork\views\user\layouts\master-layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8f4ea72fbe04_93799612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc08a3bfb9aa07c7312b3e6e66292ac5609bd53d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GMO_PHP\\php\\Week_5\\FrameWork\\views\\user\\layouts\\master-layout.tpl',
      1 => 1552892366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8f4ea72fbe04_93799612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/user/css/style.css" type="text/css">

        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20854076305c8f4ea72f9a49_35880203', "title");
?>
</title>
</head>
<body>
<div class="container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2487614195c8f4ea72faab8_36842187', "content");
?>

</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6845879765c8f4ea72fb5f7_12656124', "script");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_20854076305c8f4ea72f9a49_35880203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20854076305c8f4ea72f9a49_35880203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_2487614195c8f4ea72faab8_36842187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2487614195c8f4ea72faab8_36842187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_6845879765c8f4ea72fb5f7_12656124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_6845879765c8f4ea72fb5f7_12656124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
}
