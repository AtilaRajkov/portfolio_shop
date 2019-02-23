
<nav class="site-navigation text-right text-md-center" role="navigation">
    <div class="container">
        <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="active">
                <a href="/public/index.php">Home</a>
            </li>

            <?php
            if (count($categoriesForNavigation) > 0) {
                ?>

                <li class="has-children">
                    <a>Categories</a>
                    <ul class="dropdown">
                        <?php
                        foreach ($categoriesForNavigation as $value) {
                            ?>
                            <li><a href="/public/controllers/frontend/category.php?id=<?php echo $value['id']; ?>">

                                    <?php echo $value['name']; ?> (<?php echo $value['total']; ?>)</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>

                <?php
            }
            ?>           

            <li><a href="shop.html">Shop</a></li>
            <li><a href="#">Catalogue</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
</nav>
 </header>