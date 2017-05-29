<?php
    function getSubcategories()
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM subcategory ORDER BY category");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getSubcategory($sub_id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM subcategory WHERE sub_id = ?");
        $stmt->execute(array($sub_id));
        return $stmt->fetchAll();
    }
    function search_subCategories($query){
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM subcategory WHERE name LIKE ?");
        $stmt->execute(array("%".$query."%"));
        return $stmt->fetchAll();
    }
    function getArticleSubcategories($article_id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT article_category.sub_id AS sub_id,name,category FROM article_category LEFT JOIN subcategory ON 
        article_category.sub_id=subcategory.sub_id 
        WHERE article_id = ?");
        $stmt->execute(array($article_id));
        return $stmt->fetchAll();
    }
    function getCategory($category)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM category WHERE cat_id = ?");
        $stmt->execute(array($category));
        return $stmt->fetchAll();
    }
    function deleteSubcategory($sub)
    {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM subcategory WHERE sub_id = ?");
        $stmt->execute(array($sub));
        return $stmt->fetchAll();
    }
    function addCategory($categoryName)
    {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO category (name) VALUES (?)");
        $stmt->execute(array($categoryName));
    }
    function addSubcategory($parentID,$subcategoryName)
    {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO subcategory (category,name) VALUES (?,?)");
        $stmt->execute(array($parentID,$subcategoryName));
    }
?>