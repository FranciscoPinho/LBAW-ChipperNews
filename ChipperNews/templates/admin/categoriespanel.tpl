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
    <script src="{$BASE_URL}js/searchSubcategoriesAdmin.js"></script>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-frontpage.css">
</head>

<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Categories Panel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                      <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input id="search_text" type="text" class="form-control" placeholder="Search subcategory">
                            </div>
                            <button onclick = "return searchSubcategory()" class="btn btn-default"><i class="fa fa-search" aria-hidden="false"></i></button>
                        </form>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <h1> Categories </h1>
        <form class="form-inline" action="{$BASE_URL}actions/administration/addCategory.php" method="post">
            <div class="form-group">
                <label for="text">Create Category: </label>
                <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Category name">
            </div>
            <button type="submit" class="btn btn-default">Add Category</button>
        </form>
        <br>
        <form class="form-inline" action="{$BASE_URL}actions/administration/addSubcategory.php" method="post">
            <div class="form-group">
                <label for="text">Create Subcategory: </label>
                <input type="text" class="form-control" id="subcategoryName" name="subcategoryName" placeholder="Subcategory name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="parentID" name="parentID" placeholder="Parent category id">
            </div>
            <button type="submit" class="btn btn-default">Add Subcategory</button>
        </form>
        <div id="cat_area">
            <form action="{$BASE_URL}actions/administration/categoriesAction.php" method="post">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Parent Category</th>
                        <th>#</th>
                        <th>Subcategory</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                {foreach $subcategories as $sub}
                <tbody>
                    {$parentCategory = fetchCategory($sub.category)}
                    <td>{$parentCategory.cat_id}</td>
                    <td>{$parentCategory.name}</td>
                    <td>{$sub.sub_id}</td>
                    <td>{$sub.name}</td>
                     <td>
                        <input type="checkbox" name="subs[]" value={$sub.sub_id}><br>
                    </td>                
                </tbody>
                {/foreach}
                </table>
                <button type="submit" class="btn btn-default">Delete Subcategories</button>
            </form>
            <br>
        </div>
</body>

</html>