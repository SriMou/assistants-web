<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 */

?>

</div><!-- .site-content -->

<footer id="footer" role="contentinfo">

<div class="container">

	<?php
		$footer_sections = 0;
		$zerif_address = get_theme_mod('zerif_address','<a href="https://www.google.co.in/maps/place/W+Link+Rd,+Malleshwaram,+Bengaluru,+Karnataka+560003/@12.9949908,77.5710477,17z/data=!4m7!1m4!3m3!1s0x3bae162355a286f7:0xe82bdab3828b12d6!2sW+Link+Rd,+Malleshwaram,+Bengaluru,+Karnataka+560003!3b1!3m1!1s0x3bae162355a286f7:0xe82bdab3828b12d6">Company Address</a>');
		$zerif_address_icon = get_theme_mod('zerif_address_icon',get_template_directory_uri().'/images/map25-redish.png');
		
		$zerif_email = get_theme_mod('zerif_email','<a href="mailto:info@assistyu.com">info@assistyu.com</a>');
		$zerif_email_icon = get_theme_mod('zerif_email_icon',get_template_directory_uri().'/images/envelope4-green.png');
		
		$zerif_phone = get_theme_mod('zerif_phone','<a href="tel:+91-9986850650">+91-9986850650</a>');
		$zerif_phone_icon = get_theme_mod('zerif_phone_icon',get_template_directory_uri().'/images/telephone65-blue.png');

		$zerif_socials_facebook = get_theme_mod('zerif_socials_facebook','http://www.facebook.com/Assist-YU-App-1658280521109407');
		$zerif_socials_twitter = get_theme_mod('zerif_socials_twitter','http://twitter.com/assistyu');
//		$zerif_socials_linkedin = get_theme_mod('zerif_socials_linkedin','#');
//		$zerif_socials_behance = get_theme_mod('zerif_socials_behance','#');
//		$zerif_socials_dribbble = get_theme_mod('zerif_socials_dribbble','#');
		
		$zerif_accessibility = get_theme_mod('zerif_accessibility');
		$zerif_copyright = get_theme_mod('zerif_copyright');

		if(!empty($zerif_address) || !empty($zerif_address_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_email) || !empty($zerif_email_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_phone) || !empty($zerif_phone_icon)):
			$footer_sections++;
		endif;
		if(!empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble) ||
		!empty($zerif_copyright)):
			$footer_sections++;
		endif;
		
		if( $footer_sections == 1 ):
			$footer_class = 'col-md-12';
		elseif( $footer_sections == 2 ):
			$footer_class = 'col-md-6';
		elseif( $footer_sections == 3 ):
			$footer_class = 'col-md-4';
		elseif( $footer_sections == 4 ):
			$footer_class = 'col-md-3';
		else:
			$footer_class = 'col-md-3';
		endif;
		
		/* COMPANY ADDRESS */
		if( !empty($zerif_address) ):
			echo '<div class="'.$footer_class.' company-details">';
				echo '<div class="icon-top red-text">';
					if( !empty($zerif_address_icon) ) echo '<img src="'.esc_url($zerif_address_icon).'" alt="" />';
				echo '</div>';
				echo $zerif_address;
			echo '</div>';
		endif;
		
		/* COMPANY EMAIL */
		
		
		if( !empty($zerif_email) ):
			echo '<div class="'.$footer_class.' company-details">';
				echo '<div class="icon-top green-text">';
					
					if( !empty($zerif_email_icon) ) echo '<img src="'.esc_url($zerif_email_icon).'" alt="" />';
				echo '</div>';
				echo $zerif_email;
			echo '</div>';
		endif;
		
		/* COMPANY PHONE NUMBER */
		
		
		if( !empty($zerif_phone) ):
			echo '<div class="'.$footer_class.' company-details">';
				echo '<div class="icon-top blue-text">';
					if( !empty($zerif_phone_icon) ) echo '<img src="'.esc_url($zerif_phone_icon).'" alt="" />';
				echo '</div>';
				echo $zerif_phone;
			echo '</div>';
		endif;
		
		// open link in a new tab when checkbox "accessibility" is not ticked
		$attribut_new_tab = (isset($zerif_accessibility) && ($zerif_accessibility != 1) ? ' target="_blank"' : '' );
		
		if( !empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble) ||
		!empty($zerif_copyright)):

					echo '<div class="'.$footer_class.' copyright">';
					if(!empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble)):
						echo '<ul class="social">';

						/* facebook */
						if( !empty($zerif_socials_facebook) ):
							echo '<li><a'.$attribut_new_tab.' href="'.esc_url($zerif_socials_facebook).'"><i class="fa fa-facebook"></i></a></li>';
						endif;
						/* twitter */
						if( !empty($zerif_socials_twitter) ):
							echo '<li><a'.$attribut_new_tab.' href="'.esc_url($zerif_socials_twitter).'"><i class="fa fa-twitter"></i></a></li>';
						endif;
						/* linkedin */
						if( !empty($zerif_socials_linkedin) ):
							echo '<li><a'.$attribut_new_tab.' href="'.esc_url($zerif_socials_linkedin).'"><i class="fa fa-linkedin"></i></a></li>';
						endif;
						/* behance */
						if( !empty($zerif_socials_behance) ):
							echo '<li><a'.$attribut_new_tab.' href="'.esc_url($zerif_socials_behance).'"><i class="fa fa-behance"></i></a></li>';
						endif;
						/* dribbble */
						if( !empty($zerif_socials_dribbble) ):
							echo '<li><a'.$attribut_new_tab.' href="'.esc_url($zerif_socials_dribbble).'"><i class="fa fa-dribbble"></i></a></li>';
						endif;
						echo '</ul>';
					endif;


					if( !empty($zerif_copyright) ):
						echo esc_attr($zerif_copyright);
					endif;

					echo '<div class="zerif-copyright-box"><a class="zerif-copyright" '.$attribut_new_tab.' rel="nofollow">Assist YU </a>'.__('powered by','zerif-lite').'<a class="zerif-copyright"'.$attribut_new_tab.' rel="nofollow"> Assist YU Technologies private limited</a></div>';

					echo '</div>';

		endif;
	?>

</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->

<?php wp_footer(); ?>

</body>

</html>