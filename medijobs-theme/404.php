<?php get_header(); ?>

 <div id="section_1" class="section section_1">
    <div class="mj-container">
    	<div class="mj-grid">
			<div class="grid__item width-1/24 hide-on-mobile"></div>
			<div class="grid__item width-9/24">
			    <div class="above_headline"> OOOPS!</div>
			    <h1 class="headline uppercase">Diagnostic <br> greșit. </h1>
			    <p>
					Ceva nu a funcționat corect și nu am putut găsi pagina pe care o căutați.

			    	<br><br>
					Aveti doua optiuni:
			    </p>
			    <div class="links-inline">
			    	<a href="/" class="mj-btn mj-btn--secondary">Înapoi</a>
			    	<a href="/site-map" class="mj-btn mj-btn--secondary mj-btn--alt--2">Vezi sitemap-ul nostru</a>
			    </div>
			    <p class="section_footer">Echipa MEDIjobs vă mulțumește pentru înțelegere</p>
			</div>
			<div class="grid__item width-6/24 hide-on-mobile">
			    <div class="secton_bg_image not_found">
			        <img src="<?php echo get_template_directory_uri(); ?>/images/not-found.png" alt="">
			    </div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>