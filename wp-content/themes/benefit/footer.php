

	</div>  <!-- wrapper end --->



	<footer data-html2canvas-ignore>
		<?php wp_footer(); ?>
		<div class="footer_top wrapper">

			<div class="footer_inner_mobile">
			<div class="footer_column1"><?php dynamic_sidebar( 'sidebar-fm1' ); ?></div>
			<div class="footer_column2"><?php dynamic_sidebar( 'sidebar-fm2' ); ?></div>
			<div class="footer_column3"><?php dynamic_sidebar( 'sidebar-fm3' ); ?></div>
			<div class="footer_column4">
				<?php
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo '<h2 class="widget-title">Feedback</h2>';
				}
				else {
					echo '<h2 class="widget-title">Обратная связь</h2>';

				}
			 ?>

				<div class="header_social">
					<?php $all_options = get_option('true_options');?>
					<a href="<?php echo $all_options['facebook']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/fb.svg" alt=""></a>
					<a href="<?php echo $all_options['telegram']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/telegram.svg" alt=""></a>
					<a href="<?php echo $all_options['messenger']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/whatsapp.svg" alt=""></a>
					<a href="<?php echo $all_options['mail']; ?> " class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/mail.svg" alt=""></a>
				</div>
			</div>
			</div>
		</div>


		<div class="footer_extra">
			<div class="footer_extra_inner">
				<?php
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo '<h2 class="widget-title">Feedback</h2>';
				}
				else {
					echo '<h2 class="widget-title">Обратная связь</h2>';

				}
			 ?>
					<div class="header_social">
						<?php $all_options = get_option('true_options');?>
						<a href="<?php echo $all_options['facebook']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/fb.svg" alt=""></a>
						<a href="<?php echo $all_options['telegram']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/telegram.svg" alt=""></a>
						<a href="<?php echo $all_options['messenger']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/whatsapp.svg" alt=""></a>
						<a href="<?php echo $all_options['mail']; ?> " class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/mail.svg" alt=""></a>
					</div>
			</div>
		</div>


	<div class="footer_bottom">
	<div class="footer_bottom_inner wrapper">
		<div class="footer_logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/wp-content/themes/benefit/img/logo.svg" alt=""></a></div>
		<div class="footer_google"><a href="https://www.google.com/partners/agency?id=4382818923" target="_blank"><img src="/wp-content/themes/benefit/img/partner.svg" alt=""></a></div>
		<div class="footer_sign">
			<span>Benefit agency &copy;,
				<?php echo Date('Y'); ?>
			</span>

				<?php
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo '<a href="/this-privacy-policy/" class="policy">Privacy policy</a>';
				}
				else {
					echo '<a href="/privacy-policy/" class="policy">Политика конфиденциальности</a>';

				}
			 ?>

		</div>
	</div>
	</div>



	<!-- Модальное окно "консультация"-->

<div id="consult_modal" class="modal">
	<div id="modal-overlay"></div>
	<div class="modal-dialog">
		<div class="modal-content">

		    <div class="modal-body">
		    	
				    <?php
				    	$post_lang = pll_get_post_language( $post->ID );
				    	$all_options = get_option('true_options');
						if ( $post_lang == 'en') {
							echo '<h3>' . $all_options['consult_title_en'] . '</h3>' . '<div id="popup-main">' .  do_shortcode( $all_options['consult_content_en'] ) . '</div>';
							echo '
								<div id="popup-success" class="result">
									<div class="result_img"><img src="/wp-content/uploads/2021/01/modal.png" alt="Modal pic"></div>
									
									<p>Thank you for your request. We will contact you ASAP.</p>
									<a class="secondary_button_s close_modal">Close</a>
								</div>
							';
						}
						else {
							echo '<h3>' . $all_options['consult_title_ru'] . '</h3>' . '<div id="popup-main">' . do_shortcode( $all_options['consult_content_ru'] ) . '</div>';
							echo '
								<div id="popup-success" class="result">
									<div class="result_img"><img src="/wp-content/uploads/2021/01/modal.png" alt="Modal pic">
									</div>

									<p>Спасибо за оставленную заявку. В ближайшее время мы свяжемся с вами.</p>
									<a class="secondary_button_s close_modal">Закрыть</a>
								</div>
							';
						}

				     ?>
				


			  </div>

		    </div>
	    </div>
    </div>
</div>


<!-- Модальное окно "консультация"   end-->


	</footer>

	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<!--<script src="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>-->
	<script src="/wp-content/themes/benefit/js/jquery.mobile.min.js"></script>
	<!-- <script src="/wp-content/themes/benefit/js/index.js"></script> -->

	<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
	<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

		<!-- <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.0/jspdf.min.js"></script> -->

	<script type="text/javascript" src="/wp-content/themes/benefit/html2pdf/html2pdf.min.js"></script>
	<script>

	jQuery('.header_media .secondary_button_s').on("click",function(){
		jQuery('.header_media').hide();
	}
	);


	
	jQuery('.content_tabs a').on("click", function(e){
		e.preventDefault();
		var number = jQuery(this).index();
		jQuery('.content_tabs a').removeClass('active');
		jQuery(this).addClass('active');
		jQuery(".content_tab").removeClass("active");
		jQuery(".content_tab:eq(" + number + ")").addClass("active");
	});

	/* WHITE LABEL TABS KOSTYL */

	jQuery('.web-tabs a').on("click", function(e){
		e.preventDefault();
		var number = jQuery(this).index();
		jQuery('.web-tabs a').removeClass('active');
		jQuery(this).addClass('active');
		jQuery(".web-tab").removeClass("active");
		jQuery(".web-tab:eq(" + number + ")").addClass("active");
	});


	jQuery('.des-tabs a').on("click", function(e){
		e.preventDefault();
		var number = jQuery(this).index();
		jQuery('.des-tabs a').removeClass('active');
		jQuery(this).addClass('active');
		jQuery(".des-tab").removeClass("active");
		jQuery(".des-tab:eq(" + number + ")").addClass("active");
	});

	jQuery('.ads-tabs a').on("click", function(e){
		e.preventDefault();
		var number = jQuery(this).index();
		jQuery('.ads-tabs a').removeClass('active');
		jQuery(this).addClass('active');
		jQuery(".ads-tab").removeClass("active");
		jQuery(".ads-tab:eq(" + number + ")").addClass("active");
	});


	jQuery('.anal-tabs a').on("click", function(e){
		e.preventDefault();
		var number = jQuery(this).index();
		jQuery('.anal-tabs a').removeClass('active');
		jQuery(this).addClass('active');
		jQuery(".anal-tab").removeClass("active");
		jQuery(".anal-tab:eq(" + number + ")").addClass("active");
	});


	jQuery('.seo_tabs a').on("click", function(e){
		e.preventDefault();
		var number = jQuery(this).index();
		jQuery('.seo_tabs a').removeClass('active');
		jQuery(this).addClass('active');
		jQuery(".seo_tab").removeClass("active");
		jQuery(".seo_tab:eq(" + number + ")").addClass("active");
	});
	/* WHITE LABEL TABS KOSTYL END */

	jQuery('.tabs_photo').on("click", function(e){
		jQuery('.photos,.photoThumbs .inside').slick('refresh');
	});


	jQuery('.cases_tabs a').on("click", function(e){
		e.preventDefault();
		var number = jQuery(this).index();
		jQuery('.cases_tabs a').removeClass('active');
		jQuery(this).addClass('active');
		jQuery(".cases_content").removeClass("active");
		jQuery(".cases_content:eq(" + number + ")").addClass("active");
	});




	// jQuery('.language a').on("click", function(e){
	// //e.preventDefault();
	// jQuery('.language a').removeClass("lang_active");
	// jQuery(this).addClass("lang_active");
	// });



	jQuery(document).ready(function() {



	jQuery('.stories .my-slide:eq(0),.value .my-slide:eq(0),.value .second_value:eq(0) ').addClass('active');
	jQuery('.stories .my-slide2:eq(0),.value .my-slide2:eq(0),.value .second_value:eq(0) ').addClass('active');

		// jQuery( ".dropdown" ).each(function() {

			// jQuery(this).find('.answer:eq(0)').addClass('active');
			// jQuery(this).find('.question:eq(0)').addClass('active');
			// jQuery(this).find('.plus_minus:eq(0)').addClass('active');

			// });
		});


	// jQuery('.dropdown_item .answer:eq(0)').addClass('active');
	// jQuery('.dropdown_item .question:eq(0)').addClass('active');
	// jQuery('.dropdown_item .plus_minus:eq(0)').addClass('active');
	// });

	jQuery('.question').on("click", function(){
	jQuery(this).next().slideToggle(200);
	jQuery(this).toggleClass("active");
	jQuery(this).find('.plus_minus').toggleClass("active");
	jQuery(this).next('.answer').toggleClass("active");
	});





	jQuery('.my-hamburger').on("click", function(){
		jQuery(".header_media").slideToggle(200);
		jQuery('.hamburger_inner').toggleClass("my-act");
		jQuery('header').toggleClass('fixed');
	});



	jQuery('.story').on("click", function(){
		var link = jQuery(this).data('href');
		pos = link.indexOf("http");

		if ( pos != -1  ) {
			window.open(link);
		} else {
			window.location.href = link;
		}


	});





	jQuery('.language a').on("click",function(e){

		e.preventDefault();

		let lang = jQuery(this).data('lang');
		let url = jQuery(this).attr('href');


		Cookies.set('lang', lang);
		location.href = url;

	});

	jQuery(document).ready( function() {

	var width = jQuery(window).width();

		if (width < 1128 ) {

			jQuery('.my-slide').hide();
			jQuery('.my-slide.active').show();
			jQuery('.stories .navi div:eq(0), .value .navi div:eq(0), .second_navi div:eq(0)').addClass('dot-active');
			jQuery('.stories .navi2 div:eq(0), .value .navi2 div:eq(0), .second_navi div:eq(0)').addClass('dot-active');


			let vw = jQuery('.video.mainContainer').width();
			let h = vw / 2.1;

			jQuery('.video.mainContainer, .video.mainContainer .img').css('height', h);

		}

	// TOUCH EVENTS

	if (width < 1128 ) {

	jQuery('.my-slide').on("swiperight", function(){

		var active = jQuery(this).parent().find('.my-slide.active');
		var index = jQuery(active).index();

		var counter = jQuery(this).parent().find('.my-slide').length - 1;

			jQuery(this).parent().find('.navi div').removeClass('dot-active');
				//jQuery('.story').removeClass('active right left').hide();
				jQuery(this).parent().find('.my-slide').removeClass('active').hide();

				if ( index == 0 ) {

					//jQuery('.story:eq('+ counter +')').addClass('active left').fadeIn(200);
					jQuery(this).parent().find('.my-slide:eq('+ counter +')').addClass('active').fadeIn(200);
					jQuery(this).parent().find('.navi div:eq('+ counter +')').addClass('dot-active');


				} else{

					//jQuery(active).prev().addClass('active left').fadeIn(200);
					jQuery(active).prev().addClass('active').fadeIn(200);
					jQuery(this).parent().find('.navi div:eq('+ (index - 1) +')').addClass('dot-active');

				}

		});

	jQuery('.my-slide').on("swipeleft", function(){

		var active = jQuery(this).parent().find('.my-slide.active');
		var index = jQuery(active).index();

		var counter = jQuery(this).parent().find('.my-slide').length - 1;

		jQuery(this).parent().find('.navi div').removeClass('dot-active');
				//jQuery('.story').removeClass('active right left').hide();
				jQuery(this).parent().find('.my-slide').removeClass('active').hide();

				if ( index == counter ) {

					//jQuery('.story:eq(0)').addClass('active right').fadeIn(200);
					jQuery(this).parent().find('.my-slide:eq(0)').addClass('active').fadeIn(200);
					jQuery(this).parent().find('.navi div:eq(0)').addClass('dot-active');


				} else {

					//jQuery(active).next().addClass('active right').fadeIn(200);
					jQuery(active).next().addClass('active').fadeIn(200);
					jQuery(this).parent().find('.navi div:eq('+ (index + 1) +')').addClass('dot-active');

				}

		});

	}

		jQuery('.navi div').on('click', function(){

			var index = jQuery(this).index();
			jQuery(this).parent().parent().find('.my-slide').removeClass('active').hide();
			jQuery(this).parent().parent().find('.my-slide:eq('+ index +')').addClass('active').fadeIn(200);

			jQuery(this).parent().find('div').removeClass('dot-active');
			jQuery(this).addClass('dot-active');

		});
	});

	</script>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script>

	// VIDEO

	$('.video').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.videoThumbs .inside'
	});

	$('.videoThumbs .inside').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '.video',
	  centerMode:true,
	  centerPadding: '-10px',
	  focusOnSelect: true,
	  infinite: true,
	  draggable:false
	});

	$('.play').on('click', function(){
		var link = $(this).data('link');
		$(this).parent().find('iframe').addClass('shown').attr('src', 'https://www.youtube.com/embed/'+link +'?autoplay=1');
	});

	$('.videoThumbs .thumb, .videoThumbs .slick-arrow').on('click', function(){

		$('.video .slick-slide').find('iframe').removeClass('shown').attr('src', '');
		var link = $('.video .slick-current').find('.play').data('link');
		$('.video .slick-current').find('iframe').addClass('shown').attr('src', 'https://www.youtube.com/embed/'+link +'?autoplay=1');

	});

	// PHOTO

	$('.photos').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.photoThumbs .inside'
	});

	$('.photoThumbs .inside').slick({
	  slidesToShow: 7,
	  slidesToScroll: 1,
	  asNavFor: '.photos',
	  centerMode:true,
	  centerPadding: '-10px',
	  focusOnSelect: true,
	  infinite: true,
	  draggable:false,
	   responsive: [
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 3
		  }
		}
	  ]
	});


	</script>

	<script>

	jQuery(document).ready( function() {

		// REF DESIGN CASES

		let cookie = Cookies.get('ref');

		let ref = document.referrer;

		if (  cookie && cookie == "design" ) {

			jQuery('.tabs_design,.cases_content:eq(1)').addClass('active');

		} else {

			jQuery('.tabs_adv,.cases_content:eq(0)').addClass('active');

		}

		});

	</script>


	<script>

	jQuery('.getCases').on('click', function(){
		Cookies.remove('ref');
	});

	jQuery('.ref_design').on('click', function(){
		Cookies.set('ref', 'design');
	});

	$('form input[type=text]').on('change invalid', function() {

		let lang = Cookies.get('lang');

		if ( lang == 'en' ) {

			let name = $('.form_name').get(0);
			let phone = $('.form_phone').get(0);

			name.setCustomValidity('');
			phone.setCustomValidity('');

			if (!name.validity.valid) {
				name.setCustomValidity('Please fill in the name');
			}

			if (!phone.validity.valid) {
				phone.setCustomValidity('Please fill in the phone or email');
			}

		}

	});

	$('.header_consult,.header_media .secondary_button_s').on('click', function(){
		$('header').removeClass('fixed');
		$('#modal-overlay').addClass('opened');
		$('.modal').show();
		$('.hamburger_inner').removeClass('my-act');
	});

	$('.modal .close_modal, #modal-overlay').on('click', function(){
		$('#modal-overlay').removeClass('opened');
		$('.modal').hide();
	});


// edited animation code included in main head screen

	$("#logo").on("click",
	            function(){
	  tl.restart();
	});

	let tl = gsap.timeline();

	tl.set(".cir",{
	  scale: 0,
	  transformOrigin: "center"
	})
	.set("#logo",{
	  scale: 0.3,
	  transformOrigin: "center",
	  opacity: 0
	})
	.to(".cir",{
	      ease: "back.out(3)",
	  duration: 4,
	  scale: gsap.utils.distribute({
	    base: 0.75,
	    amount: 0.3,
	    from: "end",
	  }),
	  stagger: {
	    each: 0.4,

	  }
	})
	.to("#logo",{
	  scale: 0.35,
	  transformOrigin: "center",
	  opacity: 1,
	  duration: 2
	},"-=1.5") ;


</script>

<script type="text/javascript">
	//назначить display:block элементу .result при успешной отправке формы wpcf7

	jQuery(document).ready(function($) {
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		$('#popup-main').css('display','none');
		$('#popup-success').css('display','block');
		}, false );	
	});
</script>

<script type="text/javascript">
	jQuery(document).ready(function(){
		  $('.accordion-list > div > .answer').hide();
		    
		  $('.accordion-list > div').click(function() {
		    if ($(this).hasClass("active")) {
		      $(this).removeClass("active").find(".answer").slideUp();
		    } else {
		      $(".accordion-list > div.active .answer").slideUp();
		      $(".accordion-list > div.active").removeClass("active");
		      $(this).addClass("active").find(".answer").slideDown();
		    }
		    return false;
		  });
		  
		});
</script>

<!-- 
<script type="text/javascript">

$('.save-as-pdf-pdfcrowd-button').on('click', function (e) {
	console.log('FUCK');
	e.preventDefault();
	$(".services-container *").css("box-shadow", "none");
});

</script>
-->

<!-- GET DATA FOR FORM -->
<script type="text/javascript">

	$('.wl_submit').on('click', function (e) {

		$('.serviceCheckb').val('');

		$('.content_tab.active .service-tab.active input[type=checkbox]:checked ~ span').each( function( index, element ) {
			$('.serviceCheckb').val( $('.serviceCheckb').val() + '-' + $(this).text() + '\n' );
		});

		$('.content_tab.active .service-tab.active input[type=radio]:checked ~ label').each( function( index, element ) {
			$('.serviceCheckb').val( $('.serviceCheckb').val() + '*' + $(this).text() + '\n' );
		});

		$('.content_tab.active .service-tab.active .num-field:visible').each( function( index, element ) {
			var text = $(this).eq(0).text();
			var count = $(this).find('input').attr('data-previousvalue');
			$('.serviceCheckb').val( $('.serviceCheckb').val() + '-' + text + ': ' + ((typeof count !== 'undefined') ? count  : '1') + '\n' );

		});
		$('.serviceType').val($('.tab-label.active').first().text().trim() + ' -> ' + $('.content_tab.active .tab-label.active').text().trim());

	});

</script>
<!-- GET DATA FOR FORM END-->

<script type="text/javascript">

	const mediaQuery = window.matchMedia('(max-width: 500px)');

	var opt = {};

	if (mediaQuery.matches) {
		opt = {
			filename: 'myPage.pdf',
			margin: 10,
			image: {type: 'jpeg', quality: 1},
			html2canvas:  { scale: 2, windowWidth: 1200},
			jsPDF: {format: 'a3', orientation: 'portrait', unit: 'mm', precision: '1' }
		};
	} else {
		opt = {
			filename: 'myPage.pdf',
			margin: 10,
			image: {type: 'jpeg', quality: 1},
			html2canvas:  { scale: 5, windowWidth: 1200},
			jsPDF: {format: 'a3', orientation: 'portrait', unit: 'mm', precision: '1' }
		};
		
	};

	$('.generatePDF').on('click', function (e) {
		$('.page_banner').css('margin-bottom', '30px');

		const element = document.querySelector('.wrapper');
		html2pdf().set(opt).from(element).save();
		

	});

</script>



</body>
</html>