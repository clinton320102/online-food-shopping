<!DOCTYPE html>
<html lang="en">
    
  <?php include('template/header.php'); ?>

  <div class="top">
    <div class="banner">
      <h1 class="banner-text" data-aos="fade-left">Satisfy your Korean food cravings.</h1>
    </div>
  </div>

  <div class="welcome">
    <div class="container">
      <h1>We are Kfoodie Delivery</h1>
      <p data-aos="fade-right">We provide customers with quality and supreme taste!</p>
    </div>
  </div>

  <div class="shop">
    <div class="container">
      <header class="shop-header" data-aos="fade-left" data-aos-duration="500">
        <h1>Shop Now</h1>
      </header>

        <div class="product-list">
          <?php 

            $json_data = file_get_contents("product.json");
            $products = json_decode($json_data, true);

            if(count($products) != 0) {
              foreach($products as $product) {
                ?>
                  <a href="order.php?id=<?php echo $product['id'] ?>" class="card">
                    <div class="card-image">
                      <img src="<?php echo $product['image'] ?>" alt="product">
                    </div>
                    <div class="product-info">
                      <div>
                        <p class="product-name"><?php echo $product['name'] ?></p>
                        <p class="product-price">&#8369;<?php echo $product['price'] ?>.00</p>
                      </div>
                    </div>
                    <!-- <button class="btn order-btn" type="button">Order Now</button> -->
                  </a>

                <?php
              }
            }
          ?>
       </div>
    </div>
  </div>

  <?php include('template/footer.php'); ?>
  
</body>
</html>