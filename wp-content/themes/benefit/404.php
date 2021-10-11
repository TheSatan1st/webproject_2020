<?php
	get_header();
	get_template_part('breadcrumbs');
	
?>	

	<div class="page_banner padding shadow">

		<div class="page_banner_text">
			<h1>
      <?php 
        $post_lang = pll_get_post_language( $post->ID );
        if ( $post_lang == 'en') {
          echo 'Page not found';
        }
        else {
          echo 'страница не найдена';

        }
       ?>
      </h1>
			<div class="banner_descript"><p>
          <?php 
        $post_lang = pll_get_post_language( $post->ID );
        if ( $post_lang == 'en') {
          echo 'The page you wanted to go to was not found. Perhaps you entered an incorrect address, or the page has been deleted.';
        }
        else {
          echo 'Страница, на которую Вы хотели перейти не найдена. Возможно введен неверный адрес, или страница была удалена.';

        }
       ?>   
      </p></div>
			<a href="/" class="primary_button_l">
          <?php 
        $post_lang = pll_get_post_language( $post->ID );
        if ( $post_lang == 'en') {
          echo 'Go to main page';
        }
        else {
          echo 'Перейти на главную';

        }
       ?>   
      </a>
		</div>
		
		<div class="page_banner_img">
			<div class="banner_img_img">
			
			
			 <svg version="1.1" id="services" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 381 158" style="enable-background:new 0 0 300 134;" xml:space="preserve">


    <filter id="filter0_dd" x="0" y="0" width="352" height="158" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
    <feOffset dx="4" dy="4"/>
    <feGaussianBlur stdDeviation="4"/>
    <feColorMatrix type="matrix" values="0 0 0 0 0.5 0 0 0 0 0.54 0 0 0 0 0.6 0 0 0 0.35 0"/>
    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
    <feOffset dx="-4" dy="-4"/>
    <feGaussianBlur stdDeviation="4"/>
    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
    <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/>
    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/>
    </filter>

    <g class="gr0">
      <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-134" y1="998" x2="-387" y2="821" gradientTransform="matrix(1 0 0 -1 0 377 946.5)">
  		<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
  		<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
  		<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
  		<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
  		<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
  		<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
  	</linearGradient>
    <path class="st0" d="M63.1,81.6V47.4c0-2.1,0.1-4.3,0.2-6.7c0.2-2.5,0.4-5,0.7-7.6L29.3,81.6H63.1z M100.9,81.6v15.7
  		c0,1.4-0.5,2.6-1.4,3.6c-0.9,1-2.2,1.5-4,1.5h-8.1v30.1H63.1v-30.1H10.3c-1.7,0-3.3-0.5-4.8-1.6c-1.4-1.1-2.3-2.4-2.6-4L0,83
  		L60.7,1.4h26.7v80.2H100.9z"/>

  		<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-103" y1="955" x2="-356" y2="777" gradientTransform="matrix(1 0 0 -1 0 377 946.5)">
  		<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
  		<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
  		<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
  		<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
  		<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
  		<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
  	</linearGradient>
    <path class="st1" d="M214.9,67c0,11.5-1.2,21.4-3.7,29.8c-2.5,8.4-5.9,15.4-10.3,20.9c-4.3,5.5-9.5,9.6-15.5,12.3
  		c-5.9,2.7-12.4,4.1-19.4,4.1c-7,0-13.4-1.4-19.4-4.1c-5.9-2.7-11-6.8-15.3-12.3c-4.3-5.5-7.7-12.5-10.2-20.9
  		c-2.4-8.4-3.6-18.3-3.6-29.8s1.2-21.4,3.6-29.8c2.5-8.4,5.9-15.4,10.2-20.9s9.4-9.6,15.3-12.2c5.9-2.7,12.4-4,19.4-4
  		c7,0,13.4,1.3,19.4,4c6,2.6,11.2,6.7,15.5,12.2c4.4,5.5,7.8,12.5,10.3,20.9C213.7,45.6,214.9,55.5,214.9,67z M186.1,67
  		c0-9.1-0.6-16.5-1.7-22.2c-1.1-5.8-2.7-10.4-4.6-13.7c-1.9-3.3-4-5.5-6.4-6.7c-2.4-1.3-4.8-1.9-7.3-1.9c-2.5,0-4.9,0.6-7.3,1.9
  		c-2.3,1.2-4.4,3.4-6.3,6.7c-1.8,3.3-3.3,7.9-4.4,13.7c-1.1,5.8-1.6,13.2-1.6,22.2c0,9.1,0.5,16.6,1.6,22.3
  		c1.1,5.8,2.6,10.3,4.4,13.7c1.9,3.3,4,5.6,6.3,6.8c2.4,1.2,4.8,1.8,7.3,1.8c2.5,0,4.9-0.6,7.3-1.8c2.4-1.3,4.5-3.5,6.4-6.8
  		c1.9-3.4,3.5-7.9,4.6-13.7C185.5,83.5,186.1,76.1,186.1,67z"/>

  		<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="-59" y1="892" x2="-312" y2="714" gradientTransform="matrix(1 0 0 -1 0 377 946.5)">
  		<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
  		<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
  		<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
  		<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
  		<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
  		<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
  	</linearGradient>
    <path class="st2" d="M290.2,81.6V47.4c0-2.1,0.1-4.3,0.2-6.7c0.2-2.5,0.4-5,0.7-7.6l-34.7,48.6H290.2z M328,81.6v15.7
  		c0,1.4-0.5,2.6-1.4,3.6c-0.9,1-2.2,1.5-4,1.5h-8.1v30.1h-24.3v-30.1h-52.8c-1.7,0-3.3-0.5-4.8-1.6c-1.4-1.1-2.3-2.4-2.6-4L227.1,83
  		l60.7-81.5h26.7v80.2H328z"/>
    </g>
  </svg>
			
			
			</div>
		</div>
	</div>


<?php 

 get_footer();


?>