<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><p><?php echo $systemMessage; ?></p></div>
        </div>
    </div>
</div>  

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                if (isset($openedRow['image']) && !empty($openedRow['image']) && file_exists($openedRow['image'])) {
                    ?>
                    <img src="<?php echo $openedRow['image']; ?>" alt="<?php echo $openedRow['title']; ?>" class="img-fluid">
                    <?php
                } else {
                    ?>
                    <img src="https://dummyimage.com/350x350/9594a8/0011ff.jpg&text=Random+Product" alt="<?php echo $openedRow['image']; ?>" class="img-fluid">
               <?php
                    }
                ?>
            </div>
            <div class="col-md-6">
                <h2 class="text-black"><?php echo $openedRow['title']; ?></h2>
                <p class="mb-4">       <?php
                                                if(isset($openedRow['description']) && !empty($openedRow['description'])){
                                                    ?>
                                                        <?php echo $openedRow['description'] ?></p>
                                                    <?php    
                                                }
                                            ?>
                <p><strong class="text-primary h4">                  <?php
                                            if (empty($openedRow['discount'])) {
                                                echo $openedRow['price'];
                                            } else {

                                                echo priceWithDiscount($openedRow);
                                            }
                                            ?></strong></p>
<!--                <div class="mb-1 d-flex">
                    <label for="option-sm" class="d-flex mr-3 mb-3">
                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
                    </label>
                    <label for="option-md" class="d-flex mr-3 mb-3">
                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
                    </label>
                    <label for="option-lg" class="d-flex mr-3 mb-3">
                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
                    </label>
                    <label for="option-xl" class="d-flex mr-3 mb-3">
                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra Large</span>
                    </label>
                </div>-->
<!--                <div class="mb-5">
                    <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                    </div>

                </div>-->
                <p><a href="<?php echo productCartUrl($openedRow['id'], 'plus') ?>" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

            </div>
        </div>
    </div>
</div>

<?php  require_once '../../../views/frontend/viewedProductsView.php'; ?>