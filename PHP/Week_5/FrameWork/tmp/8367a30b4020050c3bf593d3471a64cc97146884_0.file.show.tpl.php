<?php
/* Smarty version 3.1.33, created on 2019-03-18 08:54:14
  from 'C:\xampp\htdocs\GMO_PHP\php\Week_5\FrameWork\views\user\show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8f4ea6ca1e54_98049123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8367a30b4020050c3bf593d3471a64cc97146884' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GMO_PHP\\php\\Week_5\\FrameWork\\views\\user\\show.tpl',
      1 => 1552892366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8f4ea6ca1e54_98049123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8541515445c8f4ea6c6ee03_90261662', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15797568285c8f4ea6c7cf69_28686785', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9248771275c8f4ea6c9fb00_61738145', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/master-layout.tpl");
}
/* {block "title"} */
class Block_8541515445c8f4ea6c6ee03_90261662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8541515445c8f4ea6c6ee03_90261662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
List User<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_15797568285c8f4ea6c7cf69_28686785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15797568285c8f4ea6c7cf69_28686785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <button onclick="location='?controller=user&action=getInsertUser'">Add a new User</button>
    <button class="btn-show" id="js-btn-show">Show list users</button>
    <table class="table-show" id="js-users">
        <?php if (isset($_smarty_tpl->tpl_vars['data']->value['listUser']) && $_smarty_tpl->tpl_vars['data']->value['listUser'] != null) {?>
            <tr class="title">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['listUser'][0], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <td colspan="2">action</td>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['listUser'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <td><a href="?controller=user&action=deleteUser&userID=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Delete</a></td>
                <td><a href="?controller=user&action=getUpdateUser&userID=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Edit</a></td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <h1>Table User is not have data to show</h1>
        <?php }?>
    </table>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_9248771275c8f4ea6c9fb00_61738145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9248771275c8f4ea6c9fb00_61738145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="views/user/js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="views/user/js/action.js"><?php echo '</script'; ?>
>
    <?php if (isset($_smarty_tpl->tpl_vars['data']->value['result'])) {?>
        <?php echo '<script'; ?>
>alert('<?php echo $_smarty_tpl->tpl_vars['data']->value['result'];?>
')<?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block "script"} */
}
