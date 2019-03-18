<?php
/* Smarty version 3.1.33, created on 2018-11-14 06:02:46
  from 'C:\xampp\htdocs\tandat411.github.io\Task PHP\Week-3\Framework\views\user\show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bebac76c8e982_46699865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '177bb331c21ea20027d141405f69940f9034dfc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tandat411.github.io\\Task PHP\\Week-3\\Framework\\views\\user\\show.tpl',
      1 => 1542171760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bebac76c8e982_46699865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11866540985bebac76b2d994_24731880', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14715769265bebac76b2f4c0_25926632', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10195293235bebac76c8c5f4_66700017', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/master-layout.tpl");
}
/* {block "title"} */
class Block_11866540985bebac76b2d994_24731880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11866540985bebac76b2d994_24731880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
List User<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_14715769265bebac76b2f4c0_25926632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14715769265bebac76b2f4c0_25926632',
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
class Block_10195293235bebac76c8c5f4_66700017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_10195293235bebac76c8c5f4_66700017',
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
