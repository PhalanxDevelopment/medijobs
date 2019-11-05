<?php /* Template Name:Home */ get_header(); ?>
<div class="container">
	<main role="main">
		<div class="row">
            <div class="col-sm">
               <div id="slider">
                  <div class="overlay red"></div>
                  <div class="overlay yellow"></div>
                  <div class="overlay blue"></div>
                  <a href="#" class="control_next">></a>
                  <a href="#" class="control_prev"><</a>
                  <ul>
                  	<?php
					$args = array(
						'post_type' => 'slider',
						'nopaging' => true,
						'posts_per_page' => -1,
						'orderby'=>'menu_order',
						'order'=>'ASC');
					$exec= new WP_Query($args);
					if ($exec->have_posts()) : while ($exec->have_posts()) : $exec->the_post(); ?>
                     <li><?php the_title();  ?></li>
                     <?php endwhile; ?>
					<?php else : ?>
						<h2>Not Found</h2>
					<?php endif; wp_reset_query(); ?>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="day_box">
                  <div class="day_image">
                     <img src="https://static1.squarespace.com/static/55894a8ce4b07616419003f9/t/59426f66be6594e89ba78837/1497526140006/IMG_0167.jpg?format=2500w">
                  </div>
                  <h2>Ziua I</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                  <a class="btn btn-outline-success my-2 my-sm-0" >Afla mai multe...</a>
               </div>
            </div>
            <div class="col-md-6 col-sm-12">
               <div class="row">
                  <div class="col">
                     <div class="day_box">
                        <div class="day_image">
                           <img src="https://static1.squarespace.com/static/55894a8ce4b07616419003f9/t/59426f66be6594e89ba78837/1497526140006/IMG_0167.jpg?format=2500w">
                        </div>
                        <h2 class="red">Ziua II</h2>
                        <a class="btn btn-outline-success my-2 my-sm-0" >Afla mai multe...</a>
                     </div>
                  </div>
                  <div class="col">
                     <div class="day_box">
                        <div class="day_image">
                           <img src="https://static1.squarespace.com/static/55894a8ce4b07616419003f9/t/59426f66be6594e89ba78837/1497526140006/IMG_0167.jpg?format=2500w">
                        </div>
                        <h2 class="yellow">Ziua III</h2>
                        <a class="btn btn-outline-success my-2 my-sm-0" >Afla mai multe...</a>
                     </div>
                  </div>
                  <div class="col">
                     <div class="day_box">
                        <div class="day_image">
                           <img src="https://static1.squarespace.com/static/55894a8ce4b07616419003f9/t/59426f66be6594e89ba78837/1497526140006/IMG_0167.jpg?format=2500w">
                        </div>
                        <h2>Ziua IV</h2>
                        <a class="btn btn-outline-success my-2 my-sm-0" >Afla mai multe...</a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <div class="day_box">
                        <div class="day_image">
                           <img src="https://static1.squarespace.com/static/55894a8ce4b07616419003f9/t/59426f66be6594e89ba78837/1497526140006/IMG_0167.jpg?format=2500w">
                        </div>
                        <h2 class="red">Ziua V</h2>
                        <a class="btn btn-outline-success my-2 my-sm-0" >Afla mai multe...</a>
                     </div>
                  </div>
                  <div class="col">
                     <div class="day_box">
                        <div class="day_image">
                           <img src="https://static1.squarespace.com/static/55894a8ce4b07616419003f9/t/59426f66be6594e89ba78837/1497526140006/IMG_0167.jpg?format=2500w">
                        </div>
                        <h2 class="yellow">Ziua VI</h2>
                        <a class="btn btn-outline-success my-2 my-sm-0" >Afla mai multe...</a>
                     </div>
                  </div>
                  <div class="col">
                     <div class="day_box">
                        <div class="day_image">
                           <img src="https://static1.squarespace.com/static/55894a8ce4b07616419003f9/t/59426f66be6594e89ba78837/1497526140006/IMG_0167.jpg?format=2500w">
                        </div>
                        <h2>Ziua VII</h2>
                        <a class="btn btn-outline-success my-2 my-sm-0" >Afla mai multe...</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bgimg-3">
         <div class="caption ">
            <span  class="container" style="background-color:transparent;color: #f7f7f7;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco la</span>
         </div>
      </div>
      <div class="container">
        <div class="concursuri">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="https://static1.squarespace.com/static/55894a8ce4b07616419003f9/t/59426f66be6594e89ba78837/1497526140006/IMG_0167.jpg?format=2500w">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h2>Concursuri</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco la</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco la
                    </p>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco la
                    </p>
                     <a class="btn btn-outline-success my-2 my-sm-0" >Afla mai multe...</a>
                </div>
            </div>
        </div>
      </div>
      <div class="map">
        
        <div class="container">
            <h2>Locatia Noastra</h2>
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.4104695144306!2d26.110191315720886!3d44.44525380886962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff4a9fcdf761%3A0x7757ab4bdad03c68!2sPiata+Gemeni!5e0!3m2!1sen!2sro!4v1533032250621" width="1140" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
       
      </div>
	</main>
</div>

<?php get_footer(); ?>
