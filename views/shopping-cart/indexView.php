
<style>
  table td a::after {
      content: none;
  }
</style>
<main>
  <div class="container">
    <section class="include-table">
      <h1>Shoping cart</h1>
      <?php
      if (count($cart) > 0) {
        $totalAmount = 0;
        ?>
        <div class="table-responsive cart-table">
          <table class="table  table-bordered table-hover text-center">
            <thead>
              <tr>
                <th>Image</th>
                <th>Product</th>
                <th>Unique price</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Remove</th>
              </tr>
            </thead>
            <tbody>
                <?php
                foreach ($cart as $value) {
                  $totalAmount += $value['price'] * $value['quantity'];
                  ?>
                <tr>
                  <td>
                      <?php
                      if (isset($value['image']) && !empty($value['image'])) {
                        ?>
                      <img style="max-width: 100px;" src="<?php echo $value['image'] ?>">
                      <?php
                    }
                    ?>
                  </td>
                  <td>
                    <a href="/controllers/frontend/product.php?id=<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a>
                  </td>
                  <td><?php echo $value['price']; ?></td>
                  <td>
                    <a href='<?php echo productCartUrl($value['id'], 'minus') ?>' class='fa fa-minus'></a>
                    <?php echo $value['quantity']; ?>
                    <a href='<?php echo productCartUrl($value['id'], 'plus') ?>' class='fa fa-plus'></a>
                  </td>
                  <td><?php echo $value['price'] * $value['quantity']; ?></td>
                  <td>
                    <a href='<?php echo productCartUrl($value['id'], 'remove') ?>' class='fa fa-remove'></a>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table> 
          <p>
            <b>Total amount of all products: <?php echo $totalAmount; ?></b>
            <a href="/controllers/shopping-cart/checkout.php" style="float: right;" class="btn btn-success">Proceed to checkout</a>
          </p>
          
          <pre>
          <?php print_r($cart); ?>
          </pre>

        </div>
        <?php
      } else {
        ?>
        <p>Your cart is empty!!!</p>

        <?php
      }
      ?>

    </section>
  </div>
</main>