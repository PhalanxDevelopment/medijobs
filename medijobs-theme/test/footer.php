			<!-- footer -->
			<footer>
         <div class="container">
            <div class="row">
               <div class="col-sm">
                  <a  href="<?php echo home_url(); ?>">
                  	<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="">
                  </a>
                  <br><br><br>
               </div>
               <div class="col-sm">
                  <h2>CONTACT</h2>
                  Adresa lorem Ipsum 123 <br>
                  Lorem Usda 120, iasd <br>
                  Kiren Upsum Ispumn <br>
                  Telefon: 021 / 333 / 123
               </div>
               <div class="col-sm">
                  <h2>HARTA WEBSITE</h2>
                  <ul>
                     <li>
                        <a href="<?php echo home_url(); ?>">PAGINA PRINCIPALA</a>
                     </li>
                     <li>
                        <a href="<?php echo home_url(); ?>/festival">FESTIVAL</a>
                     </li>
                     <li>
                        <a href="<?php echo home_url(); ?>/artele-unirii">ARTELE UNIRII</a>
                     </li>
                     <li>
                        <a href="<?php echo home_url(); ?>/contact">CONTACT</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<script src="https://code.jquery.com/jquery-3.1.0.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/scrips.js"></script>
	</body>
</html>
