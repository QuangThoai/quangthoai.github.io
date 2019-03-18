{extends file="layouts/master-layout.tpl"}
{block name="title"}List User{/block}
{block name="content"}
    <button onclick="location='?controller=user&action=getInsertUser'">Add a new User</button>
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
