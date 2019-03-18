{extends file="layouts/master-layout.tpl"}
{block name="title"}Insert User{/block}
{block name="content"}
    <h1>INSERT USER</h1>
    <form action="?controller=user&action=postInsertUser" method="post">
        <table class="table-edit">
            <tr>
                <td class="label">Username:</td>
                <td>
                    <input type="text" name="txtName">
                    <p class="validate">
                        {if (isset($data['listValidate']['emptyName']))}
                            {$data['listValidate']['emptyName']}
                        {/if}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="label">Password:</td>
                <td>
                    <input type="password" name="txtPass">
                    <p class="validate">
                        {if (isset($data['listValidate']['emptyPass']))}
                            {$data['listValidate']['emptyPass']}
                        {/if}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="label">Email:</td>
                <td>
                    <input type="email" name="txtEmail">
                    <p class="validate">
                        {if (isset($data['listValidate']['emptyEmail']))}
                            {$data['listValidate']['emptyEmail']}
                        {/if}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="label">Birthday:</td>
                <td>
                    <input type="date" name="txtDoB">
                    <p class="validate">
                        {if (isset($data['listValidate']['emptyDoB']))}
                            {$data['listValidate']['emptyDoB']}
                        {/if}
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
        {if isset($data['listUser']) && $data['listUser'] != null}
            <tr class="title">
                {foreach $data['listUser'][0] as $key => $value}
                    <td>{$key}</td>
                {/foreach}
                <td colspan="2">action</td>
            </tr>
            {foreach $data['listUser'] as $row}
                <tr>
                    {foreach $row as $item}
                        <td>{$item}</td>
                    {/foreach}
                    <td><a href="?controller=user&action=deleteUser&userID={$row['id']}">Delete</a></td>
                    <td><a href="?controller=user&action=getUpdateUser&userID={$row['id']}">Edit</a></td>
                </tr>
            {/foreach}
        {else}
            <h1>Table User is not have data to show</h1>
        {/if}
    </table>
{/block}
{block name="script"}
    <script src="views/user/js/jquery-3.3.1.min.js"></script>
    <script src="views/user/js/action.js"></script>
    {if isset($data['result'])}
        <script>alert('{$data['result']}')</script>
    {/if}
{/block}