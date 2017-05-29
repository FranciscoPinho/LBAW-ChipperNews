<h1> Search </h1>
<form action="{$BASE_URL}actions/administration/operation.php" method="post">
    <div class="radio">
        <label class="radio-inline"><input type="radio" name="operation" value="ban" >Ban</label>
        <label class="radio-inline"><input type="radio" name="operation" value="delete">Delete</label>
        <label class="radio-inline"><input type="radio" name="operation" value="colaborator">Promote</label>
        <label class="radio-inline"><input type="radio" name="operation" value="unban">Unban</label>
    </div>
    <table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Icon</th>
            <th>Name</th>
            <th>Email</th>
            <th>Banned?</th>
            <th>Deleted?</th>
            <th>Last Login</th>
        </tr>
    </thead>
    <tbody>
        {foreach $users as $user}
        <tr>
            <td>{$user.user_id}</td>
            <td><img class="media-object" src="{$user.username|getImage}" alt="..." style="height:30px;width:30px"></td>
            <td>{$user.username}</td>
            <td> {$user.email}</td>
            <td>
                {if $user.is_banned == TRUE}
                    TRUE
                {else}
                    FALSE
                {/if}
            </td>
            <td> 
                {if $user.is_deleted == TRUE}
                    TRUE
                {else}
                    FALSE
                {/if}
            </td>
            <td> {$user.last_login}</td>
            <td>
                <input type="checkbox" name="users[]" value={$user.user_id}><br>
            </td>  
        </tr>
        {/foreach}
    </tbody>
    </table>
    <button type="submit" class="btn btn-default">Submit</button>
</form>