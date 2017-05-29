<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report Panel</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Report Panel</a>
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
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <div>
            <h1> Reports </h1>
            <form action="{$BASE_URL}actions/administration/reports.php" method="post">
             <button type="submit" class="btn btn-default">Submit</button>
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="operation" value="ban" >Ban</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="clear">Clear Report</label>
                </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Reportee</th>
                        <th>Reported</th>
                        <th>Banned</th>
                        <th>Description</th>
                        <th>Select</th>
                    </tr>
                </thead>
                <tbody>
                   {foreach $reports as $report}
                        <tr>
                            {$rep = fetchUser($report.reported)}
                            {$ree = fetchUser($report.reportee)}
                            <td>{$report.report_id} </td>
                            <td>{$ree.username} </td>
                            <td>{$rep.username} </td>
                            <td>
                                {if $rep.is_banned == TRUE}
                                    TRUE
                                {else}
                                    FALSE
                                {/if}
                            </td>
                            <td>{$report.description} </td>
                             <td><input type="checkbox" name="reports[]" value={$report.report_id}><br></td>  
                        </tr>
                   {/foreach}
                </tbody>
                </table>
            </form>
        </div>
</body>

</html>