<main>
    <div class="container">

        <div class="row">
            <!-- LEVI kontejner -->
            <div class="col-md-9">
                <p><?php echo $systemMessage; ?></p>
                <?php
                    if($status){
                        // imamo proizvod
                        ?>
                            <section class="single-product">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <article>
                                            <?php
                                                if(isset($openedRow['image']) && !empty($openedRow['image'])){
                                                    ?>
                                                        <img class="img-responsive center-block" src="<?php echo $openedRow['image']; ?>" alt="<?php echo $openedRow['title']; ?>" title="<?php echo $openedRow['title']; ?>"/>
                                                    <?php
                                                }
                                            ?>
                                            
                                        </article>
                                    </div>
                                    <div class="col-sm-6">
                                        <article>
                                            <p class="product-title"><?php echo $openedRow['title']; ?></p>
                                            
                                            <?php
                                                if(empty($openedRow['discount'])){
                                                    ?>
                                                        <p class="price ">Cena: <span><?php echo $openedRow['price']; ?>e</span></p>
                                                    <?php
                                                } else {
                                                    ?>
                                                        <p class="price ">Cena: <span><?php echo $openedRow['price']; ?>e</span></p>
                                                        <p class="discount-price">Sok cena: <span><?php echo priceWithDiscount($openedRow); ?>e</span></p>
                                                    <?php
                                                }
                                            ?>
                                            
                                            <?php
                                                if(isset($openedRow['description']) && !empty($openedRow['description'])){
                                                    ?>
                                                        <p><?php echo $openedRow['description'] ?></p>
                                                    <?php    
                                                }
                                            ?>
                                                        
                                            <p>Add product to cart <a href="<?php echo productCartUrl($openedRow['id'], 'plus') ?>"><span class="fa fa-shopping-cart"></span></a></p>
                                                        
                                        </article>
                                    </div>
                                </div>

                            </section>
                        <?php
                    } 
                ?>
                
                
                
                <?php
                    include_once '../../../views/frontend/viewedProductsView.php';
                ?>
            </div><!-- kraj levog kontejnera-->


            <!-- ASIDE -->
            <div class="col-md-3 aside">
                <section class="contact ">
                    <h3>Adresa:</h3>
                    <p>Bulevar Mihaila Pupina 181</p>
                    <p>11000 Beograd</p>
                    <p class="phone"><span class="fa fa-phone"></span> 011/123-123</p>
                    <p class="email"><span class="fa fa-envelope-o"></span><a href="mailto:example@mail.com">example@mail.com</a></p>
                    <p class="url"><span class="fa fa-globe"></span><a href="http://school.cubes.rs">school.cubes.rs</a></p>
                </section>
            </div><!-- Kraj aside -->

        </div>
    </div>
    </main>
