<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chipper News</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-ricardo.css">
</head>

<body>
        <h1> Categories </h1>
        <form class="form-inline">
            <div class="form-group">
                <label for="text">Create Category: </label>
                <input type="text" class="form-control" id="email" placeholder="Category name">
            </div>
            <button type="submit" class="btn btn-default">Add Category</button>
        </form>
        <form class="form-inline">
            <div class="form-group">
                <label for="text">Create Subcategory: </label>
                <input type="text" class="form-control" id="email" placeholder="Subcategory name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="email" placeholder="Parent-category name">
            </div>
            <button type="submit" class="btn btn-default">Add Subcategory</button>
        </form>
        <div>
            <form action="{$BASE_URL}actions/administration/operation.php" method="post">
             <button type="submit" class="btn btn-default">Submit</button>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Subcategory</th>
                        <th>Parent Category</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                </table>
            </form>
        </div>
</body>

</html>