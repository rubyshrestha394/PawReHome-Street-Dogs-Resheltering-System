<?php include('layouts/header.php'); ?>

  <!--Home-->
  <section id="home">
    <div class="container">
      <h5>Happy Pets, Happy Homes.</h5>
      <h1><span>ADOPT TODAY</span> <br>Your Furry Friends Await!</h1>
      <p>All your pet essentials in one place.</p>
      <a href="shop.php">
        <button >SHOP NOW</button>
      </a>
    </div>
  </section>

  <!--Brand-->
  <section id="brand" class="container mt-4">
  <div class="row pt-3">
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/dog1.jpg" />
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/dog2.jpg" />
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/dog3.jpg" />
    <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/dog4.jpg" />
  </div>
</section>


  <!--New-->
  <section id="new" class="w-100">
    <div class="row p-0 m-0">
      <!--one-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/imgs/product1.jpg" />
        <div class="details">
          <h2>Comfy Harnesses</h2>
          <button class="text-uppercase">SHOW NOW</button>
        </div>
      </div>
      <!--Two-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/imgs/product2.jpg" />
        <div class="details">
          <h2>Mild Shampoos</h2>
          <button class="text-uppercase">SHOW NOW</button>
        </div>
      </div>
      <!--Three-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/imgs/product3.jpg" />
        <div class="details">
          <h2>Chew Ons!</h2>
          <button class="text-uppercase">SHOP NOW</button>
        </div>
      </div>
    </div>
  </section>

  <!--Featured-->
  <section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h3>FEATURED</h3>
      <hr>
      <p>Check out our newest products!</p>
    </div>
    <div class="row mx-auto container-fluid">

      <?php include('server/get_featured_products.php') ?>
      <?php while ($row = $featured_products->fetch_assoc()) { ?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
          <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>

        </div>

      <?php } ?>
    </div>
  </section>

  <!--Banner-->
  <section id="banner" class="my-5 py-5">
    <div class="container">
      <h4>ADORABLE PUPPIES SEEK HOMES!</h4>
      <h1>Adopt and Save a Life!</h1> <p>Well Vaccinated Puppies Up for Adoption.</p>
      <button class="text-uppercase">shop now</button>
    </div>
  </section>

  <!--Clothes-->
  <section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>Sweaters and Jackets</h3>
      <hr>
      <p>Keep Your Furry Friends Warm This Winter!</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/jacket1.jpg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Green Jacket</h5>
        <h4 class="p-price">$19.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/jacket2.jpg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Floral Pink Jacket</h5>
        <h4 class="p-price">$19.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/jacket3.jpg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Black Jacket</h5>
        <h4 class="p-price">$19.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/jacket4.jpg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Blue Jacket</h5>
        <h4 class="p-price">$19.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </section>

<!--Toys-->
<section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>Toys and Fun</h3>
      <hr>
      <p>Happy, happy, HAPPY!</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/toy1.jpg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Twisted Rope</h5>
        <h4 class="p-price">$19.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/toy2.jpg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Ball</h5>
        <h4 class="p-price">$19.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/toy3.jpg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Rubber Bone</h5>
        <h4 class="p-price">$19.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/toy4.jpg" />
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Pull Toy</h5>
        <h4 class="p-price">$19.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </section>


<?php include('layouts/footer.php'); ?>