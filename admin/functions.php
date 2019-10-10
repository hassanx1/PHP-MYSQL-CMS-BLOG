<?php

function confirm($result){

    global $con;

    if (!$result){

        die("QUERY FAILED" . mysqli_error($con));
    }

}

/**********  FUNCTION TO INSERT CATEGORIES *********/
function insert_categories(){

    global $con;

    if (isset($_POST['submit'])){

        $cat_title = $_POST['cat_title'];

        if ($cat_title == "" || empty($cat_title)){

            echo "This field should not be empty";
        }else {
            $query = "INSERT INTO categories(cat_title) ";
            $query .= "VALUES ('{$cat_title}')";
            $creat_category_query = mysqli_query($con, $query);

            if (!$creat_category_query){

                die('QUERY FAILED' . mysqli_error($con));
            }
        }

    }

}

/**********  FUNCTION TO FIND ALL CATEGORIES *********/
function findAllCategories(){
      global $con;
    $query = "SELECT * FROM categories";
    $sel_all_cat = mysqli_query($con, $query);
    while($row = mysqli_fetch_assoc($sel_all_cat)) {
        $cat_title = $row['cat_title'];
        $cat_id = $row['cat_id'];

        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>delete</a> | <a href='categories.php?edit={$cat_id}'>edit</a>  </td>";

        echo "</tr>";

    }
}//end function


/**********  FUNCTION TO DELETE CATEGORIES *********/
function deleteCategory(){
global $con;
    if (isset($_GET['delete'])){

        $the_cat_id = $_GET['delete'];

        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
        $delete_query = mysqli_query($con, $query);
        header("location: categories.php");
    }
}//end function

/**********  FUNCTION TO DELETE POST *********/
function delete_post(){

    global $con;
    if (isset($_GET['delete'])){

        $delete_post_id = $_GET['delete'];

        $query = "DELETE FROM posts WHERE post_id ={$delete_post_id}";

        $delete_post = mysqli_query($con, $query);



    }

}






?>