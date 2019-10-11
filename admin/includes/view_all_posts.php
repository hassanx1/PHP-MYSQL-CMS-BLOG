
<table class="table table-hover table-bordered table-responsive">
    <thead>
    <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Title</th>
        <th>Category</th>
        <th>Status</th>
        <th>Image</th>
        <th>Tags</th>
        <th>Comments</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    <?php

    $query = "SELECT * FROM posts";
    $select_posts_data = mysqli_query($con, $query);
    while($row = mysqli_fetch_assoc($select_posts_data)){

        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title  = $row['post_title'];
        $post_category = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image  = $row['post_image'];
        $post_tags   = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];

        echo "<tr>";

        echo "<td> $post_id </td>";
        echo "<td>$post_author </td>";
        echo "<td>$post_title  </td>";
        echo "<td>$post_category </td>";
        echo "<td>$post_status </td>";
        echo "<td><img src='../images/$post_image ' alt='image' width='100'></td>";
        echo "<td> $post_tags </td>";
        echo "<td>$post_comment_count </td>";
        echo "<td> $post_date </td>";
        echo "<td><a class='btn btn-danger' href='posts.php?delete={$post_id}'>Delete</a></td>";
        echo "<td><a class='btn btn-info' href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a> </td>";
        echo "</tr>";
    }

    ?>

    </tbody>
</table>

<?php delete_post();?>