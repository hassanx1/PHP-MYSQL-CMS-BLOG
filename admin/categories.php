<?php include ('includes/admin_header.php')  ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php  include ('includes/admin_navigation.php')?>

    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome
                        <small>Author</small>
                    </h1>

                    <div class="col-xs-6">

                     <!-- CREATING CATEGORIES -->
                        <?php insert_categories() ?><!-- end -->

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="category_title">Add Category</label>
                                <input type="text" name="cat_title" class="form-control">

                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                            </div>
                        </form>

                        <br>

                        <!-- Edit category  -->


                        <?php //update and include query

                        if (isset($_GET['edit'])){

                            $cat_id = $_GET['edit'];
                            include "includes/update_categories.php";
                        }

                        ?>

<!--                        end edit-->
                    </div><!--end add category-->

                    <div class="col-xs-6">

                            <table class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                                <th>Action</th>
                            </tr>

                            </thead>

                            <tbody>
                            <?php // find all categories

                            findAllCategories()
                            ?>

                            <?php //delete categories
                            deleteCategory()        ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php  include ('includes/admin_footer.php')?>

