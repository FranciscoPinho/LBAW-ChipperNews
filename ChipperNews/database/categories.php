<?php
    function getSubcategories()
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM subcategory");
        $stmt->execute();
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
?>