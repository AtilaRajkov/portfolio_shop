<main>
    <div class="container">
        <p><?php echo $systemMessage; ?></p>
        <?php
            if($status && count($productsFromCategory) > 0){
                ?>
                    <section class="product-wrapper">
                        <h2>Kategorija - <?php echo $openedRow['name']; ?></h2>
                        <div class="row">
                            <?php
                                foreach ($productsFromCategory as $value) {
                                    ?>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <article class="product">
                                                <?php
                                                    if(isset($value['icon']) && !empty($value['icon'])){
                                                        ?>
                                                            <span class="sticker">
                                                                <img src="<?php echo $value['icon']; ?>" alt=""/>
                                                            </span>
                                                        <?php
                                                    }
                                                ?>
                                                
                                                <?php
                                                    if(isset($value['image']) && !empty($value['image'])){
                                                        ?>
                                                            <figure>
                                                                <a href="/controllers/frontend/product.php?id=<?php echo $value['id']; ?>">
                                                                    <img src="<?php echo $value['image']; ?>" alt="<?php echo $value['title']; ?>" title="<?php echo $value['title']; ?>"/>
                                                                </a>
                                                            </figure>
                                                        <?php
                                                    }
                                                ?>
                                                
                                                
                                                <p class="product-title"><?php echo $value['title']; ?></p>
                                                <div class="product-price">
                                                    <?php
                                                        if(empty($value['discount'])){
                                                            ?>
                                                                <p class="price ">Cena: <span><?php echo $value['price']; ?>e</span></p>
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <p class="price ">Cena: <span><?php echo $value['price']; ?>e</span></p>
                                                                <p class="discount-price">Sok cena: <span><?php echo priceWithDiscount($value); ?>e</span></p>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                                <a href="/controllers/frontend/product.php?id=<?php echo $value['id']; ?>" class="more">Detail</a>
                                                <a href="<?php echo productCartUrl($value['id'], 'plus') ?>"><span class="fa fa-shopping-cart"></span></a>
                                            </article>
                                        </div>
                                    <?php
                                }
                            ?>
                            
                        </div>
                    </section>
                    <section class="paginacija text-center">

                        <?php
                            if($numberOfPages > 1){
                                ?>
                                    <ul class="pagination">
                                        <?php
                                            for ($i = 1; $i <= $numberOfPages ; $i++) {
                                                if($i == $currentPage){
                                                    ?>
                                                        <li class="active"><a><?php echo $i; ?></a></li>
                                                    <?php
                                                }else {
                                                    ?>
                                                        <li><a href="/controllers/frontend/category.php?id=<?php echo $categoryId; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                                    <?php
                                                }
                                                
                                                
                                            }
                                        ?>
                                    </ul>
                                <?php
                            }
                        ?>
                            

                    </section>
                <?php
            } else{
                ?>
                    <p>Nema proizvoda za datu kategoriju</p>
                <?php
            }
        ?>
                    
        


        <section class="last-watched-products">
            <h2>Pregledani proizvodi</h2>
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-lg-2">
                    <article class="product">

                        <figure>
                            <img src="/assets/img/products/sushi.thumb.jpeg" alt=""/>
                        </figure>
                        <p class="product-title">Sushi</p>
                        <a href="#" class="more">Detail</a>
                    </article>
                </div>
                <div class="col-xs-6 col-sm-3 col-lg-2">
                    <article class="product">
                        <span class="sticker">
                            <img src="/assets/img/products/new.png" alt=""/>
                        </span>
                        <figure>
                            <img src="/assets/img/products/sushi.thumb.jpeg" alt=""/>
                        </figure>
                        <p class="product-title">Sushi</p>
                        <a href="#" class="more">Detail</a>
                    </article>
                </div>
                <div class="col-xs-6 col-sm-3 col-lg-2">
                    <article class="product">
                        <span class="sticker">
                            <img src="/assets/img/products/sale.png" alt=""/>
                        </span>
                        <figure>
                            <img src="/assets/img/products/sushi.thumb.jpeg" alt=""/>
                        </figure>
                        <p class="product-title">Sushi</p>
                        <a href="#" class="more">Detail</a>
                    </article>
                </div>
                <div class="col-xs-6 col-sm-3 col-lg-2">
                    <article class="product">
                        <span class="sticker">
                            <img src="/assets/img/products/vegeterian.png" alt=""/>
                        </span>
                        <figure>
                            <img src="/assets/img/products/sushi.thumb.jpeg" alt=""/>
                        </figure>
                        <p class="product-title">Sushi</p>
                        <a href="#" class="more">Detail</a>
                    </article>
                </div>
                <div class="col-xs-6 col-sm-3 col-lg-2">
                    <article class="product">
                        <span class="sticker">
                            <img src="/assets/img/products/homemade.png" alt=""/>
                        </span>
                        <figure>
                            <img src="/assets/img/products/sushi.thumb.jpeg" alt=""/>
                        </figure>
                        <p class="product-title">Sushi</p>
                        <a href="#" class="more">Detail</a>
                    </article>
                </div>
                <div class="col-xs-6 col-sm-3 col-lg-2">
                    <article class="product">
                        <figure>
                            <img src="/assets/img/products/sushi.thumb.jpeg" alt=""/>
                        </figure>
                        <p class="product-title">Sushi</p>
                        <a href="#" class="more">Detail</a>
                    </article>
                </div>
            </div>
        </section>


    </div>
    </main>
