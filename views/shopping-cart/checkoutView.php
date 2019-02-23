<main>
  <div class="container">
    <section class="tipografy">
      <h1>Checkout</h1>
      <p><?php echo $systemMessage; ?></p>
      <p class="text-success"><?php echo "Last inserted Id: " . $lastInsertedId; ?></p>
      <p class="text-success"><?php echo "Total price : " . $totalPrice; ?></p>
    </section>

    <?php
    if (!$checkoutStatus) {
      ?>
      <section class="form-elements">
        <form method="post" action="" enctype="multipart/form-data">

          <!--Name and surname-->
          <div class="form-group">
            <label>Name and surname</label>
            <input class="form-control" type="text" name="name" value="<?php echo isset($formData["name"]) ? htmlspecialchars($formData["name"]) : ""; ?>">
            <?php
            if (isset($formErrors["name"])) {
              foreach ($formErrors["name"] as $errorMessage) {
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $errorMessage; ?>
                </div>
                <?php
              }
            }
            ?>
          </div>

          <!--Address-->
          <div class="form-group">
            <label>Address</label>
            <input class="form-control" type="text" name="address" value="<?php echo isset($formData["address"]) ? htmlspecialchars($formData["address"]) : ""; ?>">
            <?php
            if (isset($formErrors["address"])) {
              foreach ($formErrors["address"] as $errorMessage) {
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $errorMessage; ?>
                </div>
                <?php
              }
            }
            ?>
          </div>

          <!-- EMAIL -->
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo isset($formData["email"]) ? htmlspecialchars($formData["email"]) : ""; ?>">
            <?php
            if (isset($formErrors["email"])) {
              ?>
              <div class="alert alert-danger" role="alert">
                  <?php
                  foreach ($formErrors["email"] as $errorMessage) {
                    echo $errorMessage . '<br>';
                  }
                  ?>
              </div>
              <?php
            }
            ?>
          </div>

          <!-- PHONE -->
          <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="<?php echo isset($formData["phone"]) ? htmlspecialchars($formData["phone"]) : ""; ?>">
            <?php
            if (isset($formErrors["phone"])) {
              ?>
              <div class="alert alert-danger" role="alert">
                  <?php
                  foreach ($formErrors["phone"] as $errorMessage) {
                    echo $errorMessage . '<br>';
                  }
                  ?>
              </div>
              <?php
            }
            ?>
          </div>

          <!-- Notes -->
          <div class="form-group">
            <label>Notes</label>
            <textarea class="form-control" name="notes"><?php echo isset($formData["notes"]) ? htmlspecialchars($formData["notes"]) : ""; ?></textarea>
            <?php
            if (isset($formErrors["notes"])) {
              foreach ($formErrors["notes"] as $errorMessage) {
                ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $errorMessage; ?>
                </div>
                <?php
              }
            }
            ?>
          </div>


          <!--ISKOPIRATI ZA INPUT TYPE SUBMIT-->
          <input type="submit" name="submit" value="back">
          <input type="submit" name="submit" value="finish order">

        </form>
      </section>
      <?php
    }
    ?>
  </div>
</main><!--main end-->