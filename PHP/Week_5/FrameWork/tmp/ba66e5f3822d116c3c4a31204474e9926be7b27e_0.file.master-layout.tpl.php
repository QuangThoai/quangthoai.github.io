<?php
/* Smarty version 3.1.33, created on 2018-11-13 17:14:22
  from 'C:\xampp\htdocs\tandat411.github.io\Task PHP\Week-3\Framework\views\user\layouts\master-layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaf85eda5958_41697945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba66e5f3822d116c3c4a31204474e9926be7b27e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tandat411.github.io\\Task PHP\\Week-3\\Framework\\views\\user\\layouts\\master-layout.tpl',
      1 => 1542125661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaf85eda5958_41697945 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12562846325beaf85ed9c531_12252592', "title");
?>
</title>
</head>
<body>
<div class="container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12270076655beaf85eda2023_40144001', "content");
?>

</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13674738495beaf85eda43f1_51584414', "script");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_12562846325beaf85ed9c531_12252592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12562846325beaf85ed9c531_12252592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_12270076655beaf85eda2023_40144001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12270076655beaf85eda2023_40144001',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_13674738495beaf85eda43f1_51584414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_13674738495beaf85eda43f1_51584414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
}
