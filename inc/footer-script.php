
<script>
    $(document).ready(function () {
  $(".drop-box").click(function () {
    if ($(this).hasClass("my_drop")) {
      $(".drop-box").removeClass("my_drop");
    } else {
      $(".drop-box").removeClass("my_drop");
      $(this).addClass("my_drop");
    }
  });
});

</script>

<script>
    $(document).ready(function () {
  $(".footerlink-item ").click(function () {
    if ($(this).hasClass("foot_drop")) {
      $(".footerlink-item").removeClass("foot_drop");
    } else {
      $(".footerlink-item").removeClass("foot_drop");
      $(this).addClass("foot_drop");
    }
  });
});

</script>

	<script>
		      var speed = 400 
  $('.accordion-f dt.expanded + dd').slideDown(speed)
  
  $('.accordion-f dt').on('click', function(){
	  var that = $(this)


	  // Expandable
	  if( that.parent().hasClass('expandable') ){

		  	that.toggleClass('expanded').next('dd').slideToggle(speed)
		  
	  // Collapsable
	  }else if(that.parent().hasClass('collapsable')){

		  if( !that.hasClass('expanded') ){
			  that.siblings('dt').removeClass('expanded').next('dd').slideUp(speed)
			}
			  
			  that.toggleClass('expanded').next('dd').slideToggle(speed)
	 // Standard
	  }else{
	  	  // make sure its not collapsing itself and reappearing right after.
		  if( !that.hasClass('expanded') ){

		  	that.siblings('dt').removeClass('expanded').next('dd').slideUp(speed)
		  	that.toggleClass('expanded').next('dd').slideToggle(speed)
		  }
	  }

	  
  })
		</script>
		
		<style>
	/***************************

	COOKIE BOX

	***************************/

	#cookie_box a:hover

	{ 

	color:#ffffff;

	text-decoration: underline

	}

	#cookie_box .gdpr-description {

	width: 80%;

	}
#cookie_box {
    position: fixed;
    z-index: 100;
    bottom: 0;
    left: 0;
    text-align: left;
    overflow: hidden;
    background: rgba(0, 107, 181, 1);
    height: 100px;
    width: 100%;
    font-size: 1rem;
    font-family: inherit;
    color: #fff;
    transform: translateX(0%);
}
#cookie_box .gdpr-content {
    padding-bottom: 0;
    padding-top: 0;
    padding-left: 0;
    padding-right: 0;
    display: flex;
    align-items: center;
    height: 100%;
    margin-left: auto;
    margin-right: auto;
    max-width: 85%;
    font-family: inherit;
}	#cookie_box .gdpr-description .link:visited {

	color: #fa4516;

	}

	#cookie_box .gdpr-description .link {

	color: #fa4516;

	text-decoration: none;

	font-family: inherit;

	text-transform: none;

	font-size: inherit;

	font-family: inherit;

	}

	#cookie_box .gdpr-dismiss {

	text-align: center;

	width: 20%;

	font-size: 1.25rem;

	text-decoration: none;

	}

	#cookie_box .gdpr-dismiss a {

	cursor: pointer;

	border-bottom: 1px solid white;

	color: white !important;

	font-family: inherit;

	}

		

	#cookie_box .gdpr-dismiss a:active, a:hover {

	outline: 0;

	text-decoration:none;

	}

	@media only screen and (max-width: 820px){

	#cookie_box {

	height: auto;

	}

	#cookie_box .gdpr-content {

	padding-top: 15px !important;

	display: block;

	max-width: 90%;

    padding-right: 5%;
    text-align: justify;
}
	#cookie_box .gdpr-description {

	width: 100%;

	min-width: 80%;

	font-size: 16px;

	}

	#cookie_box .gdpr-dismiss {

width: 100%;
    min-width: 90%;
    margin-bottom: 15px;
    text-align: center;

	}

	#cookie_box .gdpr-dismiss a {

	font-size: 16px;

	text-decoration:none;

	}

	

	}

</style>

<div id="cookie_box" style="display:none;">
    <div class="gdpr-content">
        <div class="gdpr-description">
            This website uses cookies, including third-party cookies, which allow our company to obtain information about your visit to the website. Please <a aria-label="learn more" role="button" tabindex="0" class="link" href="https://www.prohance.ai/privacy-policy.php">Privacy Policy</a> to learn more about the cookies used on this website and how to change current settings if you do not agree. By continuing to use this website (clicking on a picture or link under this banner), you consent to the use of cookies.
        </div>
        <div class="gdpr-dismiss">
            <a href="#" class="cookie_box_close">I Agree / Close</a>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    console.log(getCookie("cookieConsent"));
    // Check if the cookie is already set
    if (!getCookie("cookieConsent")) {
        document.getElementById("cookie_box").style.display = "block";
    }

    // Function to set a cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Function to get a cookie
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Event listener for the "I Agree / Close" button
    document.querySelector(".cookie_box_close").addEventListener("click", function (e) {
        e.preventDefault();
        setCookie("cookieConsent", "true", 25); // Set the cookie for 25 days
        document.getElementById("cookie_box").style.display = "none";
    });
});

</script>