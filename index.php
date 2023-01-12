<?php
session_start();


include_once './Database/env.php';
//hero section query
$query="SELECT * FROM banners WHERE status='1'";
$data=mysqli_query($con,$query);
$banners= mysqli_fetch_assoc($data);
//
$query="SELECT * FROM testomonial WHERE status='1'";
$test=mysqli_query($con,$query);
mysqli_num_rows($test);
//about section query
$query="SELECT * FROM abouts WHERE status='1'";
$data=mysqli_query($con,$query);
$about=mysqli_fetch_assoc($data);
//events section query
include_once './fontendinclude/header.php';
$query="SELECT * FROM events WHERE status='1'";
$event=mysqli_query($con,$query);
mysqli_num_rows($event);
//chef section query
$query="SELECT * FROM chefs WHERE  status='1'";
$chef=mysqli_query($con,$query);
 mysqli_num_rows($chef);
 //gallery section query

$query="SELECT * FROM gallerys WHERE status='1'";
$gallery=mysqli_query($con,$query);
mysqli_num_rows($gallery);
//contact
$query="SELECT * FROM contacts WHERE status='1'";
$data=mysqli_query($con,$query);
$contact=mysqli_fetch_assoc($data);
//why choose us
$query="SELECT * FROM why_choose_us WHERE status='1'";
$choose=mysqli_query($con,$query);
mysqli_num_rows($choose);
//categories
$query="SELECT * FROM categories WHERE status='1'";
$data=mysqli_query($con,$query);
$categories=mysqli_fetch_all($data,1);
//food fetch
$query="SELECT * FROM foods_item  ";
$food_item=mysqli_query($con,$query);
$food=mysqli_fetch_all($food_item,1);
?>

  <!-- ======= Hero Section ======= -->

    <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
   
      <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
        
        <h2 data-aos="fade-up"><?= $banners['title']?$banners['title'] :  "Lorem ipsum dolor sit amet" ?><br>Delicious Food</h2>
        <p data-aos="fade-up" data-aos-delay="100"><?=$banners['description']?$banners['description']:  "Lorem ipsum dolor sit amet" ?></p>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
          <a href="<?=$banners['video']?>" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
        <img src="./upload/banner/<?=$banners['banner_img']?>" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
      </div>
     
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(./upload/about/<?=$about['bg_img']?>) " data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p><?=$about['bg_up_contain']?></p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="<?=$about['video']?>" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
   
    <section id="why-us" class="why-us section-bg">
 
      <div class="container" data-aos="fade-up">
    
        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Yummy?</h3>
              <p>
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et.
               Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
            
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->
          <?php
    if(mysqli_num_rows($choose) > 0){
      ?>
        
          <div class="col-lg-8 d-flex align-items-center">
           
            <div class="row gy-4">
            <?php
            foreach($choose as $schoose){
              ?>
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4><?=$schoose['title']?></h4>
                  <p><?=$schoose['detail']?></p>
                </div>
              </div><!-- End Icon Box -->
              <?php
            }
            ?>
            </div>
          </div>

        </div>

      </div>
    </section>
    <?php
    }
    ?>
    <!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
  
   
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Yummy Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <?php
        foreach($categories as $key =>$menu_category){
          ?>
          <li class="nav-item">
            <a class="nav-link <?= $key == 0 ? 'active show': ''?>" data-bs-toggle="tab" data-bs-target="#menu<?=$menu_category['category']?>">
              <h4><?=strtoupper($menu_category['category'])?></h4>
            </a>
          </li><!-- End tab nav item -->
 
          <?php
        }
      
        ?>
          
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
        <?php
        foreach($categories as $index => $category){
          ?>
          <div class="tab-pane fade <?= $index == 0? "active show" : 'lorem ipsum'?>" id="menu-<?=$category['category']?>">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3><?=$category['category'] ?></h3>
            </div>

            <div class="row gy-5">
            <?php
            foreach($food as $foods){
              if($foods['category_id'] == $category['id']){
                ?>
               
                  <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="./upload/foods/<?=$foods['food_img']?>" class="menu-img img-fluid" alt=""></a>
                <h4><?=$foods['title']?></h4>
                <p class="ingredients">
                <?=$foods['detail']?>
                </p>
                <p class="price">
                <?=$foods['price']?>
                </p>
              </div><!-- Menu Item -->
              <?php
              }
            }
      
            ?>
          
            </div>
          </div><!-- End Starter Menu Content -->
          <?php
       
    }
        ?>
        
        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <?php
    if(mysqli_num_rows($test) > 0){
      ?>
   
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
            foreach($test as $stest){
              ?>
          

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3><?=$stest['title']?></h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="./upload/testimonial/<?=$stest['image']?>" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
           <?php
           }
           ?>
       
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
<?php 
}
?>

    <!-- ======= Events Section ======= -->
    <?php
    if(mysqli_num_rows($event) > 0){

      ?>
      <section id="events" class="events">
   
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-header">
          <h2>Events</h2>
          <p>Share <span>Your Moments</span> In Our Restaurant</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
            foreach($event as $sevent){
            ?>
              <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(./upload/event/<?=$sevent['image']?>)">
              <h3><?=$sevent['title']?></h3>
              <div class="price align-self-start"><?=$sevent['price']?></div>
              <p class="description">
                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
              </p>
            </div><!-- End Event item -->

            <?php
            }
            ?>


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    
    <!-- End Events Section -->
    <?php
    }
      ?>
   

    
    

    <!-- ======= Chefs Section ======= -->
    <?php
    if(mysqli_num_rows($chef)>0){
      ?>
  

    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Chefs</h2>
          <p>Our <span>Proffesional</span> Chefs</p>
        </div>
      
        <div class="row gy-4">
        <?php
            foreach($chef as $schef){
            ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="./upload/chef/<?=$schef['image']?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
           
              <div class="member-info">
                <h4><?=$schef['title']?></h4>
                <span><?=$schef['ability']?></span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->
         
 
  
          <?php 
           }
           ?>

        </div>

      </div>
    </section><!-- End Chefs Section -->
    <?php
    }
    ?>

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Book A Table</h2>
          <p>Book <span>Your Stay</span> With Us</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="./controller/book_table_store.php" method="post" role="form" class=" fomr-control " data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6 pe-4">
                  <input type="text" name="name" class="form-control ms-4" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                  <?php
                                                if(isset($_SESSION['error']['name'])){
                                                    ?>
                                                    <span class="text-danger">
                                                        <?=$_SESSION['error']['name']?>
                                                    </span>
                                                    <?php
                                                }
                                                ?>
                </div>
                <div class="col-lg-4 col-md-6 ">
                  <input type="email" class="form-control " name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                  <?php
                                                if(isset($_SESSION['error']['email'])){
                                                    ?>
                                                    <span class="text-danger">
                                                        <?=$_SESSION['error']['email']?>
                                                    </span>
                                                    <?php
                                                }
                                                ?>
                </div>
                <div class="col-lg-4 col-md-6 ">
                  <input type="text" class="form-control " name="number" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                  <?php
                                                if(isset($_SESSION['error']['number'])){
                                                    ?>
                                                    <span class="text-danger">
                                                        <?=$_SESSION['error']['number']?>
                                                    </span>
                                                    <?php
                                                }
                                                ?>
                </div>
                <div class="col-lg-4 col-md-6 pe-4">
                  <input type="text" name="date" class="form-control ms-4" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                  <?php
                                                if(isset($_SESSION['error']['date'])){
                                                    ?>
                                                    <span class="text-danger">
                                                        <?=$_SESSION['error']['date']?>
                                                    </span>
                                                    <?php
                                                }
                                                ?>
                </div>
                <div class="col-lg-4 col-md-6 ">
                  <input type="text" class="form-control " name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                  <?php
                                                if(isset($_SESSION['error']['time'])){
                                                    ?>
                                                    <span class="text-danger">
                                                        <?=$_SESSION['error']['time']?>
                                                    </span>
                                                    <?php
                                                }
                                                ?>
                </div>
                <div class="col-lg-4 col-md-6 ">
                  <input type="number" class="form-control  " name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                  <?php
                                                if(isset($_SESSION['error']['people'])){
                                                    ?>
                                                    <span class="text-danger">
                                                        <?=$_SESSION['error']['people']?>
                                                    </span>
                                                    <?php
                                                }
                                                ?>
                </div>
              </div>
              <div class="form-group mt-3 pe-4">
                <textarea class="form-control ms-4" name="massage" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
                <?php
                                                if(isset($_SESSION['error']['massage'])){
                                                    ?>
                                                    <span class="text-danger">
                                                        <?=$_SESSION['error']['massage']?>
                                                    </span>
                                                    <?php
                                                }
                                                ?>
              </div>
          
              <div class="text-center"><button type="submit" class="btn btn-danger my-5" name="submit">Book a Table</button></div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    
 

    <!-- ======= Events Section ======= -->
    <?php
    if(mysqli_num_rows($gallery) > 0){

      ?>
      <section id="gallery" class="gallerys ">
     <!-- Gallery -->
<div class="row">
  <?php
  foreach($gallery as $sgallery){
    ?>
   
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="./upload/gallery/<?=$sgallery['image']?>"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

   
  </div>

  
  <?php
  }
  ?>
</div>
<!-- Gallery -->
    <?php
    }
      ?>
   
    
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p><?=$contact['adress']?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p><?=$contact['email']?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p><?=$contact['number']?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
<?php

include_once './Database/env.php';
?>
<div class="crad" >
  <div class="card-header mb-3">
  </div>
  <div class="card-body"style="background-color:#37373f;">
        <form action="./controller/contact_form_store.php" method="post"  class="form-control mt-5"style="background-color:#f4f4f4;">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control mb-3" id="name" placeholder="Your Name" >
              <?php
                                                if(isset($_SESSION['error']['name'])){
                                                    ?>
                                                    <span class="text-danger">
                                                        <?=$_SESSION['error']['name']?>
                                                    </span>
                                                    <?php
                                                }
                                                ?>
            </div>
           
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control mb-3" name="email" id="email" placeholder="Your Email" >
              <?php
                                                if(isset($_SESSION['error']['email'])){
                                                    ?>
                                                    <span class="text-danger">
                                                        <?=$_SESSION['error']['email']?>
                                                    </span>
                                                    <?php
                                                }
                                                ?>
            </div>
       
       
          <div class="form-group">
            <input type="text" class="form-control mb-3" name="subject" id="subject" placeholder="Subject" >
            <?php
                                                if(isset($_SESSION['error']['subject'])){
                                                    ?>
                                                    <span class="text-danger">
                                                        <?=$_SESSION['error']['subject']?>
                                                    </span>
                                                    <?php
                                                }
                                                ?>

          </div>
          </div>
          <div class="form-group">
            <textarea name="massage" cols="30" class="form-control mb-3" rows="5" placeholder="Message" ></textarea>
            <?php
                                                if(isset($_SESSION['error']['massage'])){
                                                    ?>
                                                    <span class="text-danger">
                                                        <?=$_SESSION['error']['massage']?>
                                                    </span>
                                                    <?php
                                                }
                                                ?>
          </div> 
       
          <div class="text-center" ><button type="submit" class="btn btn-danger  mb-3" name="submit">Send Message</button></div>
        </form>
          </div>
        <!--End Contact Form -->
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php
include_once './fontendinclude/footer.php';
session_unset();
?>