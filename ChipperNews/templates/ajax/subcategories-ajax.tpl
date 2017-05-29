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