
    <form action="" method="post">


        <div class="form-group">
            <label for="category_title">Edit Category</label>
            <?php

            if (isset($_GET['edit'])){
                $cat_id = $_GET['edit'];

                $query = "SELECT * FROM Categories WHERE cat_id = $cat_id";
                $select_cat_id = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($select_cat_id)){

                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];
                    ?>
                    <input value="<?php if (isset($cat_title)){echo $cat_title;}?>" type="text" class="form-control">
                <?php }  } ?>

            <?php
            if (isset($_POST['update_category'])){

                $the_cat_title = $_POST['cat_title'];

                $query = "UPDATE  categories SET cat_title = '{$the_cat_title}' WHERE cat_id = '{$cat_id}'";
                $update_query = mysqli_query($con, $query);
                if(!$update_query){

                    die("QUERY FAILED" . mysqli_error($con));
                }

            }

            ?>
            <!--                                <input type="text" name="cat_title" class="form-control">-->

        </div>

        <div class="form-group">

            <input type="submit" name="update_category" value="UpdateCategory" class="btn btn-primary">
        </div>
    </form>