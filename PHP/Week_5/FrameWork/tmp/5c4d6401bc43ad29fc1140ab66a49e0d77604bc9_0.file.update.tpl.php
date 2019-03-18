<?php
/* Smarty version 3.1.33, created on 2018-11-14 07:49:09
  from 'C:\xampp\htdocs\tandat411.github.io\Task PHP\Week-3\Framework\views\user\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bebc56582d2b6_20631754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c4d6401bc43ad29fc1140ab66a49e0d77604bc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tandat411.github.io\\Task PHP\\Week-3\\Framework\\views\\user\\update.tpl',
      1 => 1542171760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bebc56582d2b6_20631754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3986499825bebc5657e1984_73012821', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15641344485bebc5657e2b65_54882627', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10565402445bebc565826ca2_92263452', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/master-layout.tpl");
}
/* {block "title"} */
class Block_3986499825bebc5657e1984_73012821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3986499825bebc5657e1984_73012821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
List User<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_15641344485bebc5657e2b65_54882627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15641344485bebc5657e2b65_54882627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>EDIT USER ID: <?php echo $_smarty_tpl->tpl_vars['data']->value['userID'];?>
</h1>
    <form action="?controller=user&action=postUpdateUser&userID=<?php echo $_smarty_tpl->tpl_vars['data']->value['userID'];?>
" method="post">
        <table class="table-edit">
            <tr>
                <td class="label">Username:</td>
                <td>
                    <input type="text" name="txtName">
                    <p class="validate">
                        <?php if ((isset($_smarty_tpl->tpl_vars['data']->value['listValidate']['emptyName']))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['listValidate']['emptyName'];?>

                        <?php }?>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="label">Password:</td>
                <td>
                    <input type="password" name="txtPass">
                    <p class="validate">
                        <?php if ((isset($_smarty_tpl->tpl_vars['data']->value['listValidate']['emptyPass']))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['listValidate']['emptyPass'];?>

                        <?php }?>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="label">Email:</td>
                <td>
                    <input type="email" name="txtEmail">
                    <p class="validate">
                        <?php if ((isset($_smarty_tpl->tpl_vars['data']->value['listValidate']['emptyEmail']))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['listValidate']['emptyEmail'];?>

                        <?php }?>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="label">Birthday:</td>
                <td>
                    <input type="date" name="txtDoB">
                    <p class="validate">
                        <?php if ((isset($_smarty_tpl->tpl_vars['data']->value['listValidate']['emptyDoB']))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['listValidate']['emptyDoB'];?>

                        <?php }?>
                    </p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save"></td>
            </tr>
        </table>
    </form>
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
class Block_10565402445bebc565826ca2_92263452 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_10565402445bebc565826ca2_92263452',
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
