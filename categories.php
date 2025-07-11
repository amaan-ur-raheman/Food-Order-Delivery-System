<?php
    include('partials-front/menu.php');
?>



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php
                // Create the SQL query to displa all the categories that are active
                $sql = "SELECT * FROM category WHERE active = 'Yes'";

                // Execute the query
                $result = mysqli_query($conn, $sql);

                // Count rows of the categories table
                $count = mysqli_num_rows($result);

                // Check whether the categories available or not
                if ($count > 0) {
                    // Categories available
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Get the values
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>

                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php
                                    if ($image_name == "") {
                                        // Image not available
                                        echo "<div class='error'> Image Not Available </div>";
                                    } else {
                                        // Image available
                                        ?>
                                            <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="<?php echo $title; ?>" class="img-responsive img-curved">
                                        <?php
                                    }
                                ?>
                                
                                <h3 class="float-text text-white"><?php echo $title; ?></</h3>
                            </div>
                        </a>

                        <?php
                    }
                } else {
                    // Categoreis not available
                    echo "<div class='error'>Category No Added</div>";
                }
            ?>

            

            

            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


<?php
    include('partials-front/footer.php');
?>