<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chipper News</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-frontpage.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a class="navbar-brand" href="#">My Friends</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs"></i>Admin Options <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{$BASE_URL}pages/admin/syscategories.php">Category Management</a></li>
                            <li><a href="{$BASE_URL}pages/admin/reportPanel.php">Report Management</a></li>
                            <li><a href="#">Shut down for maintenance</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search User</button>
                </form>

                <ul class="nav navbar-nav navbar-right">

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <div>
            <h1> Users </h1>
            <form action="{$BASE_URL}actions/administration/operation.php" method="post">
             <button type="submit" class="btn btn-default">Submit</button>
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
                    {if $user.permission_level == 0}
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
                    {/if}
                    {/foreach}
                </tbody>
                </table>
            </form>
        </div>
        <div>
            <h1> Collaborators </h1>
            <form action="{$BASE_URL}actions/administration/operation.php" method="post">
             <button type="submit" class="btn btn-default">Submit</button>
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="operation" value="ban" >Ban</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="delete">Delete</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="moderator">Promote</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="user">Demote</label>
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
                    {if $user.permission_level == 1}
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
                    {/if}
                    {/foreach}
                </tbody>
                </table>
            </form>
        </div>

        <div>
            <h1> Moderators </h1>
            <form action="{$BASE_URL}actions/administration/operation.php" method="post">
             <button type="submit" class="btn btn-default">Submit</button>
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="operation" value="ban" >Ban</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="delete">Delete</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="colaborator">Demote</label>
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
                    {if $user.permission_level == 2}
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
                    {/if}
                    {/foreach}
                </tbody>
                </table>
            </form>
        </div>
</body>

</html>