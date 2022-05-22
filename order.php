<!DOCTYPE html>
<html lang="en">

  <?php include('template/header.php'); ?>

  <div class="order">  
    <div class="inner-container container" data-aos="fade-left">

    <!-- DISPLAY A SINGLE PRODUCT BY ID -->
        <?php 
          if(isset($_GET['id'])) {
            $id = $_GET['id'];
        
            $json_data = file_get_contents("database/product.json");
            $products = json_decode($json_data, true);

            foreach($products as $product) {
              if($product['id'] == $id) {
                ?>

                <div class="item-image">
                  <img src="<?php echo $product['image'] ?>" alt="product">
                </div>
                <div class="item-info">
                  <h1 class="product-name"><?php echo $product['name'] ?></h1>
                  <p class="product-price">&#8369;<?php echo $product['price'] ?>.00</p>
                  <p class="product-avail">Available : <?php echo $product['avail'] ?></p>
                  <p class="product-description"><?php echo $product['description'] ?></p>

                  <!-- FORM -->
                  <form action="" method="POST">
                    <input class="quantity" name="quantity" type="number" placeholder="Quantity">
                    <input id="buy-btn" class="btn buy-btn" type="submit" name="submit" value="Buy Now">
                  </form>

                  <!-- VIEW ORDER BUTTON -->
                  <button class="btn btn-view-order" type="button">View Order</button>

                  <!-- DISPLAY THE ORDER FORM -->
                  <?php 
                    if(isset($_POST['submit'])) {
                      $total = $_POST['quantity'] * $product['price'];
                      ?>
                        <div class="order-form">
                          <header>
                            <h2>You Ordered</h2>
                            <i id="closeViewOrder" class="fa fa-times"></i>
                          </header>
                          <div class="order">
                            <h2><?php echo $product['name'] ?></h2>
                            <p>Quantity: <?php echo $_POST['quantity'] ?></p>
                            <p>Total: &#8369;<?php echo $total ?></p>
                          </div>
                        </div>
                      <?php
                    }
                  ?>
                </div>
                <?php
              }
            }
          }
        ?>

      <a class="btn-view-btn" href="index.php">VIEW ALL PRODUCTS</a>
    </div>
  </div>
  

  <?php include('template/footer.php'); ?>

</html>
