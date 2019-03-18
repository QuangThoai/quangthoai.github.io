<?php
/* Smarty version 3.1.33, created on 2019-03-18 09:23:19
  from 'C:\xampp\htdocs\GMO_PHP\php\Week_5\FrameWork\views\user\insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8f5577395607_00986141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '875ffb0458962f1de786dc05e7d7aa0b2403038d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GMO_PHP\\php\\Week_5\\FrameWork\\views\\user\\insert.tpl',
      1 => 1552892366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8f5577395607_00986141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19340879455c8f5577371fc7_78753367', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7039315235c8f5577373383_32253036', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5266413065c8f5577393242_93725600', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/master-layout.tpl");
}
/* {block "title"} */
class Block_19340879455c8f5577371fc7_78753367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19340879455c8f5577371fc7_78753367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Insert User<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_7039315235c8f5577373383_32253036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7039315235c8f5577373383_32253036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>INSERT USER</h1>
    <form action="?controller=user&action=postInsertUser" method="post">
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
                <td><input type="submit" name="btnInsert" value="Add"></td>
            </tr>
        </table>
    </form>
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
class Block_5266413065c8f5577393242_93725600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_5266413065c8f5577393242_93725600',
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
