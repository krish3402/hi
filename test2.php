<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src='ThemeBlue/js/snap.svg-min.js'></script>
<script src='ThemeBlue/SpryAssets/SpryTabbedPanels.js' type='text/javascript'></script>
<script type='text/javascript' src='ThemeBlue/js/modernizr.custom.28468.js'></script>
<script src='ThemeBlue/js/modernizr.js' type="text/javascript"></script>
<script src="ThemeGreen/js/jquery.1291388341.js" type="text/javascript"></script>
<script src="ThemeGreen/js/global.1291388332.js" type="text/javascript"></script>
<script src="ThemeGreen/js/jquery.easing.1291388340.js" type="text/javascript"></script>
<script src="ThemeGreen/js/home.1291388333.js" type="text/javascript"></script>
<script src="ThemeGreen/js/cufon.1291388330.js" type="text/javascript"></script>
<script src="ThemeGreen/js/Garamond3_400-Garamond3_italic_400.font.js" type="text/javascript"></script>
<script type="text/javascript">
	Cufon.replace('#home-intro', { fontFamily: 'Garamond3' });
</script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script type="text/javascript">
  $(document).ready(function () {

    var activeDiv = 1;
    showDiv(activeDiv); // show first one because all are hidden by default
    var timer = setInterval(changeDiv, 10000);

    function changeDiv() {
        activeDiv++;
        if (activeDiv == 4) {
            activeDiv = 1;
        }
        showDiv(activeDiv);
    }

    function showDiv(num) {
        $('div.display').hide(); // hide all
        $('#div' + num).fadeIn(); // show active
		 if($('#div1').css('display') == 'block'){
			 $("head").append($("<link rel='stylesheet' id='blue1' type='text/css' href='ThemeBlue/css/Template.css' />"));
		 $("head").append($("<link rel='stylesheet' id='blue2' type='text/css' href='ThemeBlue/css/Search.css' />")); 
		 $("head").append($("<link rel='stylesheet' id='blue3' type='text/css' href='ThemeBlue/css/normalize.css' />")); 
		 $("head").append($("<link rel='stylesheet' id='blue4' type='text/css' href='ThemeBlue/css/demo.css' />")); 
		 $("head").append($("<link rel='stylesheet' id='blue5' type='text/css' href='ThemeBlue/fonts/font-awesome-4.2.0/css/font-awesome.min.css' />"));
		 $("head").append($("<link rel='stylesheet' id='blue6' type='text/css' href='ThemeBlue/css/menu_bubble.css' />"));
		 $("head").append($("<link rel='stylesheet' id='blue7' type='text/css' href='ThemeBlue/css/animate.css' />"));
		 $("head").append($("<link id='blue8' href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>"));
	     $("head").append($("<link id='blue9' href='ThemeBlue/css/forkit.css' rel='stylesheet' type='text/css'>")); 
		 $("head").append($("<link id='blue10' rel='stylesheet' type='text/css' href='ThemeBlue/css/font-awesome.css' />")); 
		 $("head").append($("<link id='blue11' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' />")); 
		 $("head").append($("<link id='blue12' rel='stylesheet' type='text/css' href='ThemeBlue/css/normalize.css' />")); 
	     $("head").append($("<link id='blue13' rel='stylesheet' type='text/css' href='ThemeBlue/css/demo.css' />")); 
		 $("head").append($("<link id='blue14' rel='stylesheet' type='text/css' href='ThemeBlue/css/set1.css' />")); 
		 $("head").append($("<link id='blue15' rel='stylesheet' type='text/css' href='ThemeBlue/css/style2.css' />")); 
		 $("head").append($("<link id='blue16' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Economica:700,400italic' />"));  
		 $("head").append($("<noscript><link id='blue17' rel='stylesheet' type='text/css' href='ThemeBlue/css/nojs.css' /></noscript>"));
		 $("head").append($("<link rel='stylesheet' id='blue18' type='text/css' href='ThemeBlue/css/style.css' />"));
		 $("head").append($("<link rel='stylesheet' id='blue19' type='text/css' href='ThemeBlue/SpryAssets/SpryTabbedPanels.css' />"));
		 $('#pink1').remove();
		$('#pink2').remove();
		$('#pink3').remove();
		$('#pink4').remove();
		$('#pink5').remove();
		$('#pink6').remove();
		$('#pink7').remove();
		$('#pink8').remove();
		$('#pink9').remove();
		$('#pink10').remove();
		$('#pink11').remove();
		$('#pink12').remove();
		$('#pink13').remove();
		$('#pink14').remove();
		$('#pink15').remove();
		$('#pink16').remove();
		$('#pink17').remove();
		$('#pink18').remove(); 
		
		$('#green1').remove();
		$('#green2').remove();
		$('#green3').remove();
		$('#green4').remove();
		$('#green5').remove();
		$('#green6').remove();
		$('#green7').remove();
		$('#green8').remove();
		$('#green9').remove();
		$('#green10').remove();
		$('#green11').remove();
		$('#green12').remove();
		$('#green13').remove();
		$('#green14').remove();
		$('#green15').remove();
		$('#green16').remove();
		$('#green17').remove();
		$('#green18').remove();
			 }else  if($('#div2').css('display') == 'block'){
		  $("head").append($("<link id='green1' rel='stylesheet' type='text/css' href='ThemeGreen/css/Template.css' />"));
		  $("head").append($("<link rel='stylesheet' id='green18' type='text/css' href='ThemeGreen/css/Search.css' />"));
		  $("head").append($("<link id='green2' rel='stylesheet' type='text/css' href='ThemeGreen/css/animate.css' />"));
		  $("head").append($("<link id='green3' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italics' />")); 
		  $("head").append($("<link id='green4' rel='stylesheet' type='text/css' href='ThemeGreen/css/forkit.css' />")); 
		  $("head").append($("<link id='green5' rel='stylesheet' type='text/css' href='ThemeGreen/css/font-awesome.css' />")); 
		  $("head").append($("<link id='green6' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' />"));
		  $("head").append($("<link rel='stylesheet' id='green17' type='text/css' href='ThemeGreen/css/menu_bubble.css' />"));
		  $("head").append($("<link id='green7' rel='stylesheet' type='text/css' href='ThemeGreen/css/normalize.css' />"));
		  $("head").append($("<link id='green8' rel='stylesheet' type='text/css' href='ThemeGreen/css/demo.css' />"));
		  $("head").append($("<link id='green9' href='ThemeGreen/css/set1.css' rel='stylesheet' type='text/css'>"));
		  $("head").append($("<link id='green10' href='ThemeGreen/css/style2.css' rel='stylesheet' type='text/css'>")); 
		  $("head").append($("<link id='green11' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Economica:700,400italic' />")); 
		  $("head").append($("<noscript><link id='green12' rel='stylesheet' type='text/css' href='ThemeGreen/css/nojs.css' /></noscript>")); 
		  $("head").append($("<link id='green13' rel='stylesheet' type='text/css' href='ThemeGreen/css/style.css' />"));  
		  $("head").append($("<link id='green14' rel='stylesheet' type='text/css' href='ThemeGreen/SpryAssets/SpryTabbedPanels.css' />"));
		  $("head").append($("<link id='green15' rel='stylesheet' type='text/css' href='ThemeGreen/css/global.1291388306.css' />"));
		  $("head").append($("<link id='green16' rel='stylesheet' type='text/css' href='ThemeGreen/css/home.1291388306.css' />"));
		   $('#blue1').remove();
		$('#blue2').remove();
		$('#blue3').remove();
		$('#blue4').remove();
		$('#blue5').remove();
		$('#blue6').remove();
		$('#blue7').remove();
		$('#blue8').remove();
		$('#blue9').remove();
		$('#blue10').remove();
		$('#blue11').remove();
		$('#blue12').remove();
		$('#blue13').remove();
		$('#blue14').remove();
		$('#blue15').remove();
		$('#blue16').remove();
		$('#blue17').remove();
		$('#blue18').remove();
		$('#blue19').remove(); 
		
		 $('#pink1').remove();
		$('#pink2').remove();
		$('#pink3').remove();
		$('#pink4').remove();
		$('#pink5').remove();
		$('#pink6').remove();
		$('#pink7').remove();
		$('#pink8').remove();
		$('#pink9').remove();
		$('#pink10').remove();
		$('#pink11').remove();
		$('#pink12').remove();
		$('#pink13').remove();
		$('#pink14').remove();
		$('#pink15').remove();
		$('#pink16').remove();
		$('#pink17').remove();
		$('#pink18').remove();
				 }else  if($('#div3').css('display') == 'block'){
		  $("head").append($("<link id='pink1' rel='stylesheet' type='text/css' href='ThemePink/css/Template.css' />"));
		  $("head").append($("<link id='pink2' rel='stylesheet' type='text/css' href='ThemePink/css/Search.css' />")); 
		  $("head").append($("<link id='pink3' rel='stylesheet' type='text/css' href='ThemePink/css/normalize.css' />")); 
		  $("head").append($("<link id='pink4' rel='stylesheet' type='text/css' href='ThemePink/css/demo.css' />")); 
		  $("head").append($("<link id='pink5' rel='stylesheet' type='text/css' href='ThemePink/fonts/font-awesome-4.2.0/css/font-awesome.min.css' />"));
		  $("head").append($("<link id='pink6' rel='stylesheet' type='text/css' href='ThemePink/css/menu_bubble.css' />"));
		  $("head").append($("<link id='pink7' rel='stylesheet' type='text/css' href='ThemePink/css/animate.css' />"));
		  $("head").append($("<link id='pink8' href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>"));
		   $("head").append($("<link id='pink8' href='ThemePink/css/forkit.css' rel='stylesheet' type='text/css'>")); 
		   $("head").append($("<link id='pink9' rel='stylesheet' type='text/css' href='ThemePink/css/font-awesome.css' />")); 
		   $("head").append($("<link id='pink10' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' />")); 
		   $("head").append($("<link id='pink11' rel='stylesheet' type='text/css' href='ThemePink/css/normalize.css' />")); 
		   $("head").append($("<link id='pink12' rel='stylesheet' type='text/css' href='ThemePink/css/demo.css' />")); 
		   $("head").append($("<link id='pink13' rel='stylesheet' type='text/css' href='ThemePink/css/set1.css' />"));  
		   $("head").append($("<link id='pink14' rel='stylesheet' type='text/css' href='ThemePink/css/style2.css' />"));
		   $("head").append($("<link id='pink15' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Economica:700,400italic' />"));
		   $("head").append($("<noscript><link id='pink16' rel='stylesheet' type='text/css' href='ThemePink/css/nojs.css' /></noscript>")); 
		   $("head").append($("<link id='pink17' rel='stylesheet' type='text/css' href='ThemePink/css/style.css' />")); 
		   $("head").append($("<link id='pink18' rel='stylesheet' type='text/css' href='ThemePink/SpryAssets/SpryTabbedPanels.css' />"));
		   
		   $('#blue1').remove();
		$('#blue2').remove();
		$('#blue3').remove();
		$('#blue4').remove();
		$('#blue5').remove();
		$('#blue6').remove();
		$('#blue7').remove();
		$('#blue8').remove();
		$('#blue9').remove();
		$('#blue10').remove();
		$('#blue11').remove();
		$('#blue12').remove();
		$('#blue13').remove();
		$('#blue14').remove();
		$('#blue15').remove();
		$('#blue16').remove();
		$('#blue17').remove();
		$('#blue18').remove();
		$('#blue19').remove(); 
		
		$('#green1').remove();
		$('#green2').remove();
		$('#green3').remove();
		$('#green4').remove();
		$('#green5').remove();
		$('#green6').remove();
		$('#green7').remove();
		$('#green8').remove();
		$('#green9').remove();
		$('#green10').remove();
		$('#green11').remove();
		$('#green12').remove();
		$('#green13').remove();
		$('#green14').remove();
		$('#green15').remove();
		$('#green16').remove();
		$('#green17').remove();
		$('#green18').remove();
				 }
    }

});
</script>
<style type="text/css">
.display {
    display: none;
}
</style>
</head>
<body>
<div id='container'>
    <div id='div1' class='display' style="">
    <!-- Menu -->
			<div class="menu-wrap">
				<nav class="menu">
					<div class="icon-list">
						<a href="#"><i class="fa fa-fw fa-bell-o"></i><span>digitology</span></a>
						<a href="#"><i class="fa fa-fw fa-envelope-o"></i><span>What We Do</span></a>
						<a href="#"><i class="fa fa-fw fa-comment-o"></i><span>Showcase</span></a>
						<a href="#"><i class="fa fa-fw fa-bar-chart-o"></i><span>Contact us</span></a>
						<a href="#"><i class="fa fa-fw fa-newspaper-o"></i><span>Losum Dammy</span></a>
                        <a href="#"><i class="fa fa-fw fa-star-o"></i><span>Losum Dammy</span></a>
					</div>
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
				<div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
						<path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z" style="background:#FFFFFF;"/>
					</svg>
				</div>
			</div>
			<button class="menu-button slide1Menu" id="open-button">Open Menu</button>
            <!-- Menu End -->
            <!-- Image Slide -->
            <div class="ImgSlide">
            <div class="SlideOne">
            <!-- Logo -->
            <div class="logo pull-left wow fadeInDown animated animated" data-wow-delay=".2s Animationz"><img src="images/Logo.png"></div>
            <!-- Logo End-->
            <!--- Search Wraper -->
            <div id="wrap">
            <div class="TextS">
  <form action="" autocomplete="on">
  <input id="search" name="search" type="text" placeholder="looking for ?"><input id="search_submit" value="Rechercher" type="submit">
  </form>
</div></div>
            <!--- Search Wraper End -->
   <!-- FallDown Div -->
      <!-- The contents (if there's no contents the ribbon acts as a link) -->
    	<div class="forkit-curtain">
			<div class="close-buttonz"></div>
            <!--- Content Place Holder -->
            <div class="ContactInnerContainer">
            <!--- Contact Left Container -->
            <div class="ContactLeftContainer">
            <div class="ContactLeftInnerContainer">
            <div class="ContactFormTitle">Hello!  How can i help you</div>
            <div class="ContactFormWraper">
            <div class="FormTitleWraper">name</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">E-Mail</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">Phone</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
             <div class="FormTitleWraper">Message</div>
            <div class="FormInputWraper"><textarea class="FormTextAreaWraperz"></textarea></div>
            <div class="SubmitWraper"><input type="submit" class="SubmitBtn"></div></div></div>
            </div>
            <!--- Contact Left Container End-->
            <!--- Contact Right Container --->
            <div class="ContactRightContaner">
            <div class="ContactRightInnerContaner">
            <div class="ContactBodyContainer">
            <div class="ContactBodyInnerContainer">
            <div class="ContactBodyLeftContainer">
            <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Offices & Locations</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">Digitology (Head Office)</span><br><span class="CountryText">UK</span><br><span class="CountryDetailsText">201 Jerounds Harlow Essex CM19 4HJ </span><br><br><br><span class="ContactTitleTwoTxt">Development Centers</span><br><span class="CountryText">India</span><br><span class="CountryDetailsText">149/20 Vijaypuri Colony, <br>Tarnaka,Secunderabad, <br>Hyderabad-500 017<br>Andhra Pradesh</span></div></div>
<div class="ContactBodyRightContainer">
 <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Phone & Email</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">For Sales!</span><br><span class="CountryText">UK</span><br><span class="CountryDetailsText"><a href="mailto:info@digitology.co.uk">info@digitology.co.uk</a><br>Ph: 02033719214<br>FAX: 02033719214</span><br><br><span class="CountryText">India</span><br><span class="CountryDetailsText"><a href="mailto:sales@digitology.co.uk">sales@digitology.co.uk</a><br>Ph: +1 (714) 726 2485<br>Fax: 01279 4208</span></div></div></div></div></div></div>
            <!--- Contact Right Container End --->
           <!--- Content Place Holder End -->
              
            </div>
 <!--- Mobile Tabbed --->
            <div class="TabbedContactWraper">
            
            <div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Enquiry</li>
    <li class="TabbedPanelsTab" tabindex="0">Reach us</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
    
     <!--- Contact Left Container -->
            <div class="ContactLeftContainer">
            <div class="ContactLeftInnerContainer">
            <div class="ContactFormTitle">Hello!  How can i help you</div>
            <div class="ContactFormWraper">
            <div class="FormTitleWraper">name</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">E-Mail</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">Phone</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
             <div class="FormTitleWraper">Message</div>

            <div class="FormInputWraper"><textarea class="FormTextAreaWraperz"></textarea></div>
            <div class="SubmitWraper"><input type="submit" class="SubmitBtn"></div></div></div>
            </div>
            <!--- Contact Left Container End-->

    
    </div>
    <div class="TabbedPanelsContent">
    
    
     <!--- Contact Right Container --->
            <div class="ContactRightContaner">
            <div class="ContactRightInnerContaner">
            <div class="ContactBodyContainer">
            <div class="ContactBodyInnerContainer">
            <div class="ContactBodyLeftContainer">
            <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Offices & Locations</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">Digitology (Head Office)</span>&nbsp; - <span class="CountryText">UK</span><br><span class="CountryDetailsText">201 Jerounds Harlow Essex CM19 4HJ </span><br><br><br><span class="ContactTitleTwoTxt">Development Centers</span>&nbsp; - <span class="CountryText">India</span><br><span class="CountryDetailsText">149/20 Vijaypuri Colony, Tarnaka,Secunderabad, <br>Hyderabad-500 017 Andhra Pradesh</span></div></div>
<div class="ContactBodyRightContainer">
 <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Phone & Email</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">For Sales!</span><br><span class="CountryText">UK</span><br><span class="CountryDetailsText"><a href="mailto:info@digitology.co.uk">info@digitology.co.uk</a><br>Ph: 02033719214 &nbsp; FAX: 02033719214</span><br><br><span class="CountryText">India</span><br><span class="CountryDetailsText"><a href="mailto:sales@digitology.co.uk">sales@digitology.co.uk</a><br>Ph: +1 (714) 726 2485  &nbsp; Fax: 01279 4208</span></div></div></div></div></div></div>
            <!--- Contact Right Container End --->
    
    
    
    </div>
  </div>
</div>

            
            
            </div>
            <!--- Mobile Tabbed End -->
            </div>
		<!-- The ribbon -->
		<a class="forkit" data-text="Top Secret" data-text-detached="Drag down" href="#"><img style="position: absolute; top: 0; right: 0; border: 0;" src="" alt=""></a>
       
   
	     <!--- FallDown Div end --->          

        <!--- Slide Caption -->
        <div class="CaptionContainer">
        <div class="CaptionInnerContainer"><span class="SliderTitleText SliderTitleTextColor pull-center wow fadeInDown animated animated" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s; text-align:center;">we’re driven to build <br>your digital experience.<a href="#" class="dottedReadMore hvr-sweep-to-top">...</a></span>
        <div class="BtnContainer">
  <div class="BtnWraper BtnResponse BtnMargin">
        <a href="#" class="btn left lg wow fadeInRight animated animated">
        <span class="left icon icon-gear "></span>
        <span class="right title"><span class="arrow-right"></span>Change Settings</span>
      </a>
      </div>
 <div class="BtnWraper BtnMargin">
        <a href="#" class="btn left lg wow fadeInRight animated animated">
        <span class="left icon icon-gear iconz"></span>
        <span class="right title"><span class="arrow-right"></span>request a quote</span>
      </a>
      </div>
</div>
</div>
</div>
                <!--- Slide Caption End -->
            </div></div>
            <!-- Image Slide End -->
            <!--- Aboutus -->
            <div class="AboutContainer P-about">
            <div class="AboutLeftContainer AboutLeftContainerBg AboutLeftMinSize col-lg-7 grid-left wow fadeInLeft animated" data-wow-delay="1.2s"></div>
            <div class="AboutRightContainer">
             <section id="demo">

      <article>
      <div class="col-md-5 grid-right wow fadeInRight animated" data-wow-delay="1.6s">
              <div class="TitleHeading TitleColorP TitleMargin">Trusted IT Vendor since 2008</div>

       
        <p class="NormalText NormalPcolor">Digitology is a global IT solutions company with over 6 year's experience. We provide full-cycle services in the areas of software development, Web-based enterprise solutions, Web application and portal development. We combine our solid business domain experience, technical expertise, profound knowledge of latest industry trends and quality-driven delivery model to offer progressive, end-to-end Web solutions.</p></div>
 </article>
 </section>
            </div></div>
            <!--- Aboutus End -->
            <!--- Our Process --->
            <div class="OurProcessWraper">
            <div class="OP-TitleWraper"><span class="TitleHeading TitleColorP col-md-5 grid-right wow fadeInRight animated">our process</span></div>
            <div class="OurProcessBodyContainer">
            <!---Pannel -->
            <div class="OurProcessPannel">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/Discover.png"></div>
            <div class="HexagonTitle">Discover</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!---Pannel -->
            <div class="OurProcessPannel">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/Design.png"></div>
            <div class="HexagonTitle">Design</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!---Pannel -->
            <div class="OurProcessPannel">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/develop.png"></div>
            <div class="HexagonTitle">Develop</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!---Pannel -->
            <div class="OurProcessPannel DeployMargin">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/deploy.png"></div>
            <div class="HexagonTitle">Deploy</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!-- ReadMore --->
            <div class="ProcessReadMoreWrap">
            <div class="RedmoreTg"></div></div>
            <!-- ReadMore --->
            </div></div>
            <!--- Our Process End -->
             <!--- Services --->
           <div class="ServicesWraper">
           <div class="grid">
					<figure class="effect-sadie">
						<img src="images/DesignServices.jpg" alt="img02" width="100%"/>
						<figcaption>
							<h2><span class="UnderLineHvr">De</span>sign<br>
							<span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-sadie">
						<img src="images/Develop.jpg" alt="img14" width="100%"/>
						<figcaption>
							<h2><span class="UnderLineHvr">De</span>v<br><span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
                    	<figure class="effect-sadie">
						<img src="images/DevelopServices.png" alt="img14" width="100%"/>
						<figcaption>
							<h2>Web Application <span class="UnderLineHvr">De</span>v<br>
<span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>							<a href="#">View more</a>
						</figcaption>			
					</figure>
                    	<figure class="effect-sadie">
						<img src="images/Dashboard.jpg" alt="img14" width="100%"/>
						<figcaption>
							<h2>Dashboard <span class="UnderLineHvr">De</span>v <br><span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div></div>
            <!--- Services End --->
             <!--- TestimonialsWraper  --->
            <div class="TestimonialsWraper">
            <div class="TestiMonialLeftWraper">
            <div class="TestiMonialLeftInnerWraper">
             <div id="da-slider" class="da-slider">
				<div class="da-slide">
				<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				<div class="da-slide">
					<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				<div class="da-slide">
					<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				<div class="da-slide">
					<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				
			</div>
            
            <div class="TestimonalTitleWrap"><span class="TestimonalsTitleWht">LOTS</span><span class="TestimonalsTitlePink"> of </span><br>

<span class="TestimonalsTitleBlack">HIGH FIVES</span></div>
            </div></div></div>
            <!--- TestimonialsWraper End --->
             <!--- Social Contianer -->
            <div class="SocialContainer">
            <div class="SocialoverlyWraper">
            <div class="SocialLefrContentWraper"><span class="SocialTitle">I'M INTERESTED!</span><br><span class="SocialSubTitle">Questions, comments, or ready to start working with us?</span></div>
<div class="holdingbox">
 <span class="leftbox"></span>
 <span class="rightbox">
     <div class="contentx SocialLeftMargin">
     <nav class="social">
          <ul>
              <li><a href="#"><i class="fa fa-twitter"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-facebook"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-skype"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-youtube"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i>&nbsp;@Losum Dammy</a></li>
           </ul>
      </nav></div>
      </span>
 </div>
 
</div></div>
            <!--- Only Mobile -->
            <div class="SocialOnlyTabMobile">
             <ul>
            <li class="FbIcon"><a href="#">@ losum dammy</a></li>
            <li class="gogIcon"><a href="#">&nbsp; @ losum dammy</a></li>
            <li class="InIcon"><a href="#">&nbsp; @ losum dammy</a></li>
            <li class="SkypeIcon"><a href="#">&nbsp; @ losum dammy</a></li>
            <li class="YtIcon"><a href="#">&nbsp; @ losum dammy</a></li></ul>
             </div>
            <!--- Only Mobile End -->
            <!-- Social Container End --->
            <!--- Footer Container -->
            <div class="FtrContainer">
            <div class="FtrLinkCloumn">
            <div class="FtrColumnMenu">
            <div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#">Home</a></li>
<li><a href="#">Work</a></li>
<li><a href="#">Company</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Careers</a></li></ul></div>
<div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#"><span class="ServicesTxt">Services</span></a></li>
<li><a href="#">Strategy</a></li>
<li><a href="#">Design</a></li>
<li><a href="#">Development</a></li>
<li><a href="#">Search & Social</a></li>
<li><a href="#">Content</a></li>
<li><a href="#">Website Maintenance</a></li></ul></div></div></div>
<div class="FtraddressCloumn">
<div class="FtrColumnMenu">
  <div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#"><span class="ServicesTxt">GET IN TOUCH</span></a></li>
<li><a href="#"><span class="FtrWhiteTxt">Digitology</span><br>1234 Losum dammy <br>Losum dammy, HYD 500036</a></li></ul></div>
<div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#">P: 123.456.7890</a></li>
<li><a href="#">F: 123.456.7890</a></li>
<li><a href="#">info@digitology.co.uk</a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li></ul></div></div></div>
<div class="FtraboutCloumn">
<div class="FtrColumnMenuOutBorder"><span class="FtrAboutTxt">Digitology is an established Web development company delivering Web development services of any complexity to clients worldwide.<br><br>Web development services of any complexity to clients worldwide</span></div>		</div>
<div class="Childtr"><span class="ChildtrTxt">Hyderabad India, or · England, UK · Losumdammy, UK · Losumdammy,  Losum dammy, UK | ©2015 Digitology.co.uk &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">- Privacy Policy</a></span></div>            
<!-- Footer Contianer End -->
<a href="#0" class="cd-top">Top</a>
</div>
            <!-- container -->
    </div>
    <div id='div2' class='display' style="">
    <!-- Menu -->
			<div class="menu-wrap">
				<nav class="menu">
					<div class="icon-list">
						<a href="#"><i class="fa fa-fw fa-bell-o"></i><span>digitology</span></a>
						<a href="#"><i class="fa fa-fw fa-envelope-o"></i><span>What We Do</span></a>
						<a href="#"><i class="fa fa-fw fa-comment-o"></i><span>Showcase</span></a>
						<a href="#"><i class="fa fa-fw fa-bar-chart-o"></i><span>Contact us</span></a>
						<a href="#"><i class="fa fa-fw fa-newspaper-o"></i><span>Losum Dammy</span></a>
                        <a href="#"><i class="fa fa-fw fa-star-o"></i><span>Losum Dammy</span></a>
					</div>
				</nav>
				<button class="close-button" id="close-green-button">Close Menu</button>
				<div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
						<path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z" style="background:#FFFFFF;"/>
					</svg>
				</div>
			</div>
			<button class="menu-button slide1Menu" id="open-green-button">Open Menu</button>
            <!-- Menu End -->
            <!-- Image Slide -->
            <div class="ImgSlide">
            <div class="SlideOne">
            <!-- Logo -->
            <div class="logo pull-left wow fadeInDown animated animated" data-wow-delay=".2s Animationz"><img src="images/Logo.png"></div>
            <!-- Logo End-->
            <!--- Search Wraper -->
            <div id="wrap">
            <div class="TextS">
  <form action="" autocomplete="on">
  <input id="search" name="search" type="text" placeholder="looking for ?"><input id="search_submit" value="Rechercher" type="submit">
  </form>
</div></div>
            <!--- Search Wraper End -->
   <!-- FallDown Div -->
   <!-- The contents (if there's no contents the ribbon acts as a link) -->
    	<div class="forkit-curtain">
			<div class="close-buttonz"></div>
            <!--- Content Place Holder -->
            <div class="ContactInnerContainer">
            <!--- Contact Left Container -->
            <div class="ContactLeftContainer">
            <div class="ContactLeftInnerContainer">
            <div class="ContactFormTitle">Hello!  How can i help you</div>
            <div class="ContactFormWraper">
            <div class="FormTitleWraper">name</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">E-Mail</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">Phone</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
             <div class="FormTitleWraper">Message</div>
            <div class="FormInputWraper"><textarea class="FormTextAreaWraperz"></textarea></div>
            <div class="SubmitWraper"><input type="submit" class="SubmitBtn"></div></div></div>
            </div>
            <!--- Contact Left Container End-->
            <!--- Contact Right Container --->
            <div class="ContactRightContaner">
            <div class="ContactRightInnerContaner">
            <div class="ContactBodyContainer">
            <div class="ContactBodyInnerContainer">
            <div class="ContactBodyLeftContainer">
            <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Offices & Locations</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">Digitology (Head Office)</span><br><span class="CountryText">UK</span><br><span class="CountryDetailsText">201 Jerounds Harlow Essex CM19 4HJ </span><br><br><br><span class="ContactTitleTwoTxt">Development Centers</span><br><span class="CountryText">India</span><br><span class="CountryDetailsText">149/20 Vijaypuri Colony, <br>Tarnaka,Secunderabad, <br>Hyderabad-500 017<br>Andhra Pradesh</span></div></div>
<div class="ContactBodyRightContainer">
 <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Phone & Email</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">For Sales!</span><br><span class="CountryText">UK</span><br><span class="CountryDetailsText"><a href="mailto:info@digitology.co.uk">info@digitology.co.uk</a><br>Ph: 02033719214<br>FAX: 02033719214</span><br><br><span class="CountryText">India</span><br><span class="CountryDetailsText"><a href="mailto:sales@digitology.co.uk">sales@digitology.co.uk</a><br>Ph: +1 (714) 726 2485<br>Fax: 01279 4208</span></div></div></div></div></div></div>
            <!--- Contact Right Container End --->
           <!--- Content Place Holder End -->
              
            </div>
 <!--- Mobile Tabbed --->
            <div class="TabbedContactWraper">
            
            <div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Enquiry</li>
    <li class="TabbedPanelsTab" tabindex="0">Reach us</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
    
     <!--- Contact Left Container -->
            <div class="ContactLeftContainer">
            <div class="ContactLeftInnerContainer">
            <div class="ContactFormTitle">Hello!  How can i help you</div>
            <div class="ContactFormWraper">
            <div class="FormTitleWraper">name</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">E-Mail</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">Phone</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
             <div class="FormTitleWraper">Message</div>
            <div class="FormInputWraper"><textarea class="FormTextAreaWraperz"></textarea></div>
            <div class="SubmitWraper"><input type="submit" class="SubmitBtn"></div></div></div>
            </div>
            <!--- Contact Left Container End-->

    
    </div>
    <div class="TabbedPanelsContent">
    
    
     <!--- Contact Right Container --->
            <div class="ContactRightContaner">
            <div class="ContactRightInnerContaner">
            <div class="ContactBodyContainer">
            <div class="ContactBodyInnerContainer">
            <div class="ContactBodyLeftContainer">
            <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Offices & Locations</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">Digitology (Head Office)</span>&nbsp; - <span class="CountryText">UK</span><br><span class="CountryDetailsText">201 Jerounds Harlow Essex CM19 4HJ </span><br><br><br><span class="ContactTitleTwoTxt">Development Centers</span>&nbsp; - <span class="CountryText">India</span><br><span class="CountryDetailsText">149/20 Vijaypuri Colony, Tarnaka,Secunderabad, <br>Hyderabad-500 017 Andhra Pradesh</span></div></div>
<div class="ContactBodyRightContainer">
 <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Phone & Email</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">For Sales!</span><br><span class="CountryText">UK</span><br><span class="CountryDetailsText"><a href="mailto:info@digitology.co.uk">info@digitology.co.uk</a><br>Ph: 02033719214 &nbsp; FAX: 02033719214</span><br><br><span class="CountryText">India</span><br><span class="CountryDetailsText"><a href="mailto:sales@digitology.co.uk">sales@digitology.co.uk</a><br>Ph: +1 (714) 726 2485  &nbsp; Fax: 01279 4208</span></div></div></div></div></div></div>
            <!--- Contact Right Container End --->
    
    
    
    </div>
  </div>
</div>

            
            
            </div>
            <!--- Mobile Tabbed End -->
            </div>
		<!-- The ribbon -->
		<a class="forkit" data-text="Contact Us" data-text-detached="Drag down" href="#"><img style="position: absolute; top: 0; right: 0; border: 0;" src="" alt=""></a>
       
   
	
   	     <!--- FallDown Div end --->          

        <!--- Slide Caption -->
        <div id="home-grid"><div id="mask" style="position: absolute; left: 0px; top: 0px; width: 900px; height: 450px; opacity: 0; z-index: 1500; background: rgb(255, 255, 255);"></div>
	
		<div id="grid-0" class="grid-box landscape" style="z-index: 100; left: 0px; right: 750px; top: 0px; bottom: 300px;"><img src="img/img1.jpg" alt="" style="left: -148px; top: -81px;"></div><div id="text-0" class="text-box" style="left: 0px; right: 750px; top: 450px; bottom: 0px; z-index: 1600; display: none;"><div style="top: auto; bottom: 20px;"><h4>Suraksha</h4><p>GEMINI commitment towards fire proof technology, the Wires and Cables Business unit has developed "GEMINI FR CABLES" that are environment friendly and designed to make people, environment safer. our copper quality is among the best copper quality used in the cables.</p></div></div>
		<div id="grid-1" class="grid-box landscape" style="z-index: 100; left: 150px; right: 600px; top: 0px; bottom: 300px;"><img src="img/img2.jpg" alt="" style="left: -149px; top: -69px;"></div><div id="text-1" class="text-box" style="margin-left: 17px; left: 150px; right: 600px; top: 450px; bottom: 0px; z-index: 1600; display: none;"><div style="margin: 28px 0px 0px -201px; top: auto; bottom: 20px; left: 50%;"><h4>GEMINI CO-AXIAL CABLES</h4><p>Gemini co-axial cables are used for transmission of audio and video signals in cable TV network. The cables offer higher bandwidth for your customers to receive the maximum number of channels with a high level of picture and sound quality.</p></div></div>
        
		<div id="grid-2" class="grid-box landscape" style="z-index: 100; left: 300px; right: 450px; top: 0px; bottom: 300px;"><img src="img/img3.jpg" alt="" style="left: -150px; top: -75px;"></div><div id="text-2" class="text-box" style="left: 300px; right: 450px; top: 450px; bottom: 0px; z-index: 1600; display: none;"><div style="width: 230px; top: auto; bottom: 20px; left: 50%; margin-left: -201px;"><h4>SUBMERSIBLE 3 CORE FLAT CABLES</h4><p style="line-height:1.5;">For trouble free working, this connecting cable is used for submersible pump motors. Gemini 3 Core Flat Cables are manufactured keeping in mind the severe and difficult conditions in which they are required to perform.</p></div></div>       
        
		<div id="grid-3" class="grid-box landscape"><img src="img/img4.jpg" alt="" style="left:-150px;top:-75px"></div><div id="text-3" class="text-box" style="left: 450px; right: 300px; top: 450px; bottom: 0px;"><div style="top: auto; bottom: 20px; left: 50%; margin-left: -201px;"><h4>VIKRAM INDUSTRIES</h4><p>Experience the Allied Difference! Allied Wire and Cable is a stocking distributor and specialty manufacturer of PVC Insulated wires &amp; cables, heat shrink tubing and wire management products in the India. We take pride in offering the best customer experience possible.</p></div></div>
        
		<div id="grid-4" class="grid-box landscape"><img src="img/img5.png" alt="" style="left:-150px;top:-75px"></div><div id="text-4" class="text-box" style="left: 600px; right: 150px; top: 450px; bottom: 0px;"><div style="top: auto; bottom: 20px; left: 50%; margin-left: -201px;"><h4>VIKRAM INDUSTRIES</h4><p>Experience the Allied Difference! Allied Wire and Cable is a stocking distributor and specialty manufacturer of PVC Insulated wires &amp; cables, heat shrink tubing and wire management products in the India. We take pride in offering the best customer experience possible.</p></div></div>
        
		<div id="grid-5" class="grid-box landscape"><img src="img/img6.jpg" alt="" style="left:-152px;top:-85px"></div><div id="text-5" class="text-box" style="left: 750px; right: 0px; top: 450px; bottom: 0px;"><div style="top: auto; bottom: 20px; left: auto; right: 24px;"><h4>VIKRAM INDUSTRIES</h4><p>Experience the Allied Difference! Allied Wire and Cable is a stocking distributor and specialty manufacturer of PVC Insulated wires &amp; cables, heat shrink tubing and wire management products in the India. We take pride in offering the best customer experience possible.</p></div></div>
        
		<div id="grid-6" class="grid-box landscape" style="z-index: 100; left: 0px; right: 750px; top: 150px; bottom: 150px;"><img src="img/img7.jpg" alt="" style="left: -294px; top: -67px;"></div><div id="text-6" class="text-box" style="left: 0px; right: 750px; top: 300px; bottom: 150px; z-index: 1600; display: none;"><div><h4>Our vision</h4><p>To be a globally recognized corporation that provides best electrical &amp; lighting solutions, delivered by best-in-class people.</p></div></div>
        
		<div id="grid-7" class="grid-box landscape" style="z-index: 100; left: 150px; right: 600px; top: 150px; bottom: 150px;"><img src="img/img1.jpg" alt="" style="left: -86px; top: -51px;"></div><div id="text-7" class="text-box" style="margin-left: 20px; left: 150px; right: 600px; top: 300px; bottom: 150px; z-index: 1600; display: none;"><div style="left: 50%; margin-left: -201px;"><h4 style="margin-top:-5px;">GEMINI CABLES</h4><p style="line-height:1.6;">GEMINI is a leading Fast Moving Electrical Goods (FMEG) Company and a major power distribution equipment manufacturer with a strong global footprint. GEMINI enjoys enviable market dominance across a wide spectrum of products, including Industrial Cables &amp; Wires for Domestic, Commercial and industrial application.</p></div></div>
        
		<div id="grid-8" class="grid-box landscape"><img src="img/img2.jpg" alt="" style="left:-150px;top:-77px"></div><div id="text-8" class="text-box" style="left: 300px; right: 450px; top: 300px; bottom: 150px;"><div style="width: 235px; left: 50%; margin-left: -201px;"><h4>GEMINI GOLD</h4><p style="line-height:1.6;">Today, GEMINI owns some of the most prestigious global brands like GEMINI GOLD, GEMINI FLEX &amp; GEMINI CAB. Its global network constitutes of professionals &amp; representative offices.</p></div></div>
        
		<div id="grid-9" class="grid-box landscape"><img src="img/img3.jpg" alt="" style="left:-150px;top:-75px"></div><div id="text-9" class="text-box" style="left: 450px; right: 300px; top: 300px; bottom: 150px;"><div style="left: 50%; margin-left: -201px;"><h4>VIKRAM INDUSTRIES</h4><p>Experience the Allied Difference! Allied Wire and Cable is a stocking distributor and specialty manufacturer of PVC Insulated wires &amp; cables, heat shrink tubing and wire management products in the India. We take pride in offering the best customer experience possible.</p></div></div>
        
		<div id="grid-10" class="grid-box landscape"><img src="img/img4.jpg" alt="" style="left:-150px;top:-75px"></div><div id="text-10" class="text-box" style="left: 600px; right: 150px; top: 300px; bottom: 150px;"><div style="left: 50%; margin-left: -201px;"><h4>VIKRAM INDUSTRIES</h4><p>Experience the Allied Difference! Allied Wire and Cable is a stocking distributor and specialty manufacturer of PVC Insulated wires &amp; cables, heat shrink tubing and wire management products in the India. We take pride in offering the best customer experience possible.</p></div></div>
        
		<div id="grid-11" class="grid-box landscape"><img src="img/img5.jpg" alt="" style="left:-168px;top:-51px"></div><div id="text-11" class="text-box" style="left: 750px; right: 0px; top: 300px; bottom: 150px;"><div style="left: auto; right: 24px;"><h4>VIKRAM INDUSTRIES</h4><p>Experience the Allied Difference! Allied Wire and Cable is a stocking distributor and specialty manufacturer of PVC Insulated wires &amp; cables, heat shrink tubing and wire management products in the India. We take pride in offering the best customer experience possible.</p></div></div>
        
<div id="grid-12" class="grid-box landscape" style="z-index: 100; left: 0px; right: 750px; top: 300px; bottom: 0px;"><img src="img/img6.jpg" alt="" style="left: -294px; top: -67px;"></div><div id="text-12" class="text-box" style="margin: 28px 0px 0px; left: 0px; right: 750px; top: 0px; bottom: 450px; z-index: 1600; display: none;"><div><h4>Fire Retardant Wires</h4><p>We also manufacture of FRLS - Fire retardant Low Smoke electrical wires. FRLS cables are manufacture by using electrolytic grade copper to ensure superior conductivity. Insulated with a FRLS PVc compound, FRLS has special flame retardant and low smoke emitting properties.</p></div></div>
        
		<div id="grid-13" class="grid-box landscape"><img src="img/img7.jpg" alt="" style="left:-150px;top:-75px"></div><div id="text-13" class="text-box" style="margin: 28px 0px 0px 22px; left: 150px; right: 600px; top: 0px; bottom: 450px;"><div style="left: 50%; margin-left: -201px;"><h4>Our Goal</h4><p>Our goal is to provide customers with high-quality products by understanding customer's needs and translating those needs into continual improved products and services.</p></div></div>
        
		<div id="grid-14" class="grid-box landscape"><img src="img/img1.jpg" alt="" style="left:-76px;top:-7px"></div><div id="text-14" class="text-box" style="left: 300px; right: 450px; top: 0px; bottom: 450px;"><div style="margin-top: 27px; width: 235px; left: 50%; margin-left: -201px;"><h4>Creating million-watt smiles since 1985</h4><p>Since 1985 a single thought has influenced every creative decision we've taken: what will make our customers smile. Not just smile with satisfaction. But with delight. 	</p></div></div>
        
		<div id="grid-15" class="grid-box portrait"><img src="img/img2.jpg" alt="" style="left:-81px;top:-121px"></div><div id="text-15" class="text-box" style="left: 450px; right: 450px; top: 0px; bottom: 450px;"><div style="left: auto; right: 24px;"><h4>VIKRAM INDUSTRIES</h4><p>Experience the Allied Difference! Allied Wire and Cable is a stocking distributor and specialty manufacturer of PVC Insulated wires &amp; cables, heat shrink tubing and wire management products in the India. We take pride in offering the best customer experience possible.</p></div></div>
        
		<div id="grid-16" class="grid-box portrait"><img src="img/img3.jpg" alt="" style="left:-75px;top:-150px"></div><div id="text-16" class="text-box" style="left: 0px; right: 900px; top: 0px; bottom: 450px;"><div><h4>VIKRAM INDUSTRIES</h4><p>Experience the Allied Difference! Allied Wire and Cable is a stocking distributor and specialty manufacturer of PVC Insulated wires &amp; cables, heat shrink tubing and wire management products in the India. We take pride in offering the best customer experience possible.</p></div></div>
        
		<div id="grid-17" class="grid-box landscape"><img src="img/img4.jpg" alt="" style="left:-150px;top:-68px"></div><div id="text-17" class="text-box" style="left: 750px; right: 0px; top: 0px; bottom: 450px;"><div style="left: auto; right: 24px;"><h4>VIKRAM INDUSTRIES</h4><p>Experience the Allied Difference! Allied Wire and Cable is a stocking distributor and specialty manufacturer of PVC Insulated wires &amp; cables, heat shrink tubing and wire management products in the India. We take pride in offering the best customer experience possible.</p></div></div>
        
		<a id="link-0" class="grid-link imgswap" href="#">The University of Texas Commission of 125</a>
		<a id="link-1" class="grid-link imgswap" href="#">Southwest Airlines</a>
		<a id="link-2" class="grid-link imgswap" href="#">Shiner</a>
		<a id="link-3" class="grid-link imgswap" href="#">Austin AdFed Identity</a>
		<a id="link-4" class="grid-link imgswap" href="#">University of Texas McCombs School of Business</a>
		<a id="link-5" class="grid-link imgswap" href="#">LIthographix</a>
		<a id="link-6" class="grid-link imgswap" href="#">South by Southwest (SXSW)</a>
		<a id="link-7" class="grid-link imgswap" href="#">Phi</a>
		<a id="link-8" class="grid-link imgswap" href="#">American Heart Association</a>
		<a id="link-9" class="grid-link imgswap" href="#">The 401(k) Company</a>
		<a id="link-10" class="grid-link imgswap" href="#">Chili’s</a>
		<a id="link-11" class="grid-link imgswap" href="#">Temple-Inland</a>
		<a id="link-12" class="grid-link imgswap" href="#">The Sid Richardson Museum</a>
		<a id="link-13" class="grid-link imgswap" href="#">O’s Campus Cafe</a>
		<a id="link-14" class="grid-link imgswap" href="#">Republic Tequila</a>
		<a id="link-15" class="grid-link imgswap" href="#">Dave &amp; Buster's</a>
		<a id="link-16" class="grid-link imgswap" href="#">Tequila Mockingbird</a>
		<a id="link-17" class="grid-link imgswap" href="#">Texas Tech University System</a>
				
		
	</div>        <!--- Slide Caption End -->
            </div></div>
            <!-- Image Slide End -->
            <!--- Aboutus -->
            <div class="AboutContainer P-about">
            <div class="AboutLeftContainer AboutLeftContainerBg AboutLeftMinSize col-lg-7 grid-left wow fadeInLeft animated" data-wow-delay="1.2s"></div>
            <div class="AboutRightContainer">
             <section id="demo">

      <article>
      <div class="col-md-5 grid-right wow fadeInRight animated" data-wow-delay="1.6s">
              <div class="TitleHeading TitleColorP TitleMargin">Trusted IT Vendor since 2008</div>

       
        <p class="NormalText NormalPcolor">Digitology is a global IT solutions company with over 6 year's experience. We provide full-cycle services in the areas of software development, Web-based enterprise solutions, Web application and portal development. We combine our solid business domain experience, technical expertise, profound knowledge of latest industry trends and quality-driven delivery model to offer progressive, end-to-end Web solutions.</p></div>
 </article>
 </section>
            </div></div>
            <!--- Aboutus End -->
            <!--- Our Process --->
            <div class="OurProcessWraper">
            <div class="OP-TitleWraper"><span class="TitleHeading TitleColorP col-md-5 grid-right wow fadeInRight animated">our process</span></div>
            <div class="OurProcessBodyContainer">
            <!---Pannel -->
            <div class="OurProcessPannel">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/Discover.png"></div>
            <div class="HexagonTitle">Discover</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!---Pannel -->
            <div class="OurProcessPannel">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/Design.png"></div>
            <div class="HexagonTitle">Design</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!---Pannel -->
            <div class="OurProcessPannel">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/develop.png"></div>
            <div class="HexagonTitle">Develop</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!---Pannel -->
            <div class="OurProcessPannel DeployMargin">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/deploy.png"></div>
            <div class="HexagonTitle">Deploy</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!-- ReadMore --->
            <div class="ProcessReadMoreWrap">
            <div class="RedmoreTg"></div></div>
            <!-- ReadMore --->
            </div></div>
            <!--- Our Process End -->
            <!--- Services --->
           <div class="ServicesWraper">
           <div class="grid">
					<figure class="effect-sadie">
						<img src="images/DesignServices.jpg" alt="img02" width="100%"/>
						<figcaption>
							<h2><span class="UnderLineHvr">De</span>sign<br>
							<span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-sadie">
						<img src="images/Develop.jpg" alt="img14" width="100%"/>
						<figcaption>
							<h2><span class="UnderLineHvr">De</span>v<br><span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
                    	<figure class="effect-sadie">
						<img src="images/DevelopServices.png" alt="img14" width="100%"/>
						<figcaption>
							<h2>Web Application <span class="UnderLineHvr">De</span>v<br>
<span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>							<a href="#">View more</a>
						</figcaption>			
					</figure>
                    	<figure class="effect-sadie">
						<img src="images/Dashboard.jpg" alt="img14" width="100%"/>
						<figcaption>
							<h2>Dashboard <span class="UnderLineHvr">De</span>v <br><span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div></div>
            <!--- Services End --->
            <!--- TestimonialsWraper  --->
            <div class="TestimonialsWraper">
            <div class="TestiMonialLeftWraper">
            <div class="TestiMonialLeftInnerWraper">
             <div id="da-slider" class="da-slider">
				<div class="da-slide">
				<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				<div class="da-slide">
					<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				<div class="da-slide">
					<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				<div class="da-slide">
					<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				
			</div>
            
            <div class="TestimonalTitleWrap"><span class="TestimonalsTitleWht">LOTS</span><span class="TestimonalsTitlePink"> of </span><br>

<span class="TestimonalsTitleBlack">HIGH FIVES</span></div>
            </div></div></div>
            <!--- TestimonialsWraper End --->
            <!--- Social Contianer -->
            <div class="SocialContainer">
            <div class="SocialoverlyWraper">
            <div class="SocialLefrContentWraper"><span class="SocialTitle">I'M INTERESTED!</span><br><span class="SocialSubTitle">Questions, comments, or ready to start working with us?</span></div>
<div class="holdingbox">
 <span class="leftbox"></span>
 <span class="rightbox">
     <div class="contentx SocialLeftMargin">
     <nav class="social">
          <ul>
              <li><a href="#"><i class="fa fa-twitter"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-facebook"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-skype"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-youtube"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i>&nbsp;@Losum Dammy</a></li>
           </ul>
      </nav></div>
      </span>
 </div>
 
</div></div>
            <!--- Only Mobile -->
            <div class="SocialOnlyTabMobile">
             <ul>
            <li class="FbIcon"><a href="#">@ losum dammy</a></li>
            <li class="gogIcon"><a href="#">&nbsp; @ losum dammy</a></li>
            <li class="InIcon"><a href="#">&nbsp; @ losum dammy</a></li>
            <li class="SkypeIcon"><a href="#">&nbsp; @ losum dammy</a></li>
            <li class="YtIcon"><a href="#">&nbsp; @ losum dammy</a></li></ul>
             </div>
            <!--- Only Mobile End -->
            <!-- Social Container End --->
            <!--- Footer Container -->
            <div class="FtrContainer">
            <div class="FtrLinkCloumn">
            <div class="FtrColumnMenu">
            <div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#">Home</a></li>
<li><a href="#">Work</a></li>
<li><a href="#">Company</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Careers</a></li></ul></div>
<div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#"><span class="ServicesTxt">Services</span></a></li>
<li><a href="#">Strategy</a></li>
<li><a href="#">Design</a></li>
<li><a href="#">Development</a></li>
<li><a href="#">Search & Social</a></li>
<li><a href="#">Content</a></li>
<li><a href="#">Website Maintenance</a></li></ul></div></div></div>
<div class="FtraddressCloumn">
<div class="FtrColumnMenu">
  <div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#"><span class="ServicesTxt">GET IN TOUCH</span></a></li>
<li><a href="#"><span class="FtrWhiteTxt">Digitology</span><br>1234 Losum dammy <br>Losum dammy, HYD 500036</a></li></ul></div>
<div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#">P: 123.456.7890</a></li>
<li><a href="#">F: 123.456.7890</a></li>
<li><a href="#">info@digitology.co.uk</a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li></ul></div></div></div>
<div class="FtraboutCloumn">

<div class="FtrColumnMenuOutBorder"><span class="FtrAboutTxt">Digitology is an established Web development company delivering Web development services of any complexity to clients worldwide.<br><br>Web development services of any complexity to clients worldwide</span></div>		</div>
<div class="Childtr"><span class="ChildtrTxt">Hyderabad India, or · England, UK · Losumdammy, UK · Losumdammy,  Losum dammy, UK | ©2015 Digitology.co.uk &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">- Privacy Policy</a></span></div>            
<!-- Footer Contianer End -->
<a href="#0" class="cd-top">Top</a>
</div>
    </div>
    <div id='div3' class='display' style="">
     <!-- Menu -->
			<div class="menu-wrap">
				<nav class="menu">
					<div class="icon-list">
						<a href="#"><i class="fa fa-fw fa-bell-o"></i><span>digitology</span></a>
						<a href="#"><i class="fa fa-fw fa-envelope-o"></i><span>What We Do</span></a>
						<a href="#"><i class="fa fa-fw fa-comment-o"></i><span>Showcase</span></a>
						<a href="#"><i class="fa fa-fw fa-bar-chart-o"></i><span>Contact us</span></a>
						<a href="#"><i class="fa fa-fw fa-newspaper-o"></i><span>Losum Dammy</span></a>
                        <a href="#"><i class="fa fa-fw fa-star-o"></i><span>Losum Dammy</span></a>
					</div>
				</nav>
				<button class="close-button" id="close-pink-button">Close Menu</button>
				<div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
						<path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z" style="background:#FFFFFF;"/>
					</svg>
				</div>
			</div>
			<button class="menu-button slide1Menu" id="open-pink-button">Open Menu</button>
            <!-- Menu End -->
            <!-- Image Slide -->
            <div class="ImgSlide">
            <div class="SlideOne">
            <!-- Logo -->
            <div class="logo pull-left wow fadeInDown animated animated" data-wow-delay=".2s Animationz"><img src="images/Logo.png"></div>
            <!-- Logo End-->
            <!--- Search Wraper -->
            <div id="wrap">
            <div class="TextS">
  <form action="" autocomplete="on">
  <input id="search" name="search" type="text" placeholder="looking for ?"><input id="search_submit" value="Rechercher" type="submit">
  </form>
</div></div>
            <!--- Search Wraper End -->
   <!-- FallDown Div -->
   	<!-- The contents (if there's no contents the ribbon acts as a link) -->
    	<div class="forkit-curtain">
			<div class="close-buttonz"></div>
            <!--- Content Place Holder -->
            <div class="ContactInnerContainer">
            <!--- Contact Left Container -->
            <div class="ContactLeftContainer">
            <div class="ContactLeftInnerContainer">
            <div class="ContactFormTitle">Hello!  How can i help you</div>
            <div class="ContactFormWraper">
            <div class="FormTitleWraper">name</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">E-Mail</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">Phone</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
             <div class="FormTitleWraper">Message</div>
            <div class="FormInputWraper"><textarea class="FormTextAreaWraperz"></textarea></div>
            <div class="SubmitWraper"><input type="submit" class="SubmitBtn"></div></div></div>
            </div>
            <!--- Contact Left Container End-->
            <!--- Contact Right Container --->
            <div class="ContactRightContaner">
            <div class="ContactRightInnerContaner">
            <div class="ContactBodyContainer">
            <div class="ContactBodyInnerContainer">
            <div class="ContactBodyLeftContainer">
            <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Offices & Locations</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">Digitology (Head Office)</span><br><span class="CountryText">UK</span><br><span class="CountryDetailsText">201 Jerounds Harlow Essex CM19 4HJ </span><br><br><br><span class="ContactTitleTwoTxt">Development Centers</span><br><span class="CountryText">India</span><br><span class="CountryDetailsText">149/20 Vijaypuri Colony, <br>Tarnaka,Secunderabad, <br>Hyderabad-500 017<br>Andhra Pradesh</span></div></div>
<div class="ContactBodyRightContainer">
 <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Phone & Email</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">For Sales!</span><br><span class="CountryText">UK</span><br><span class="CountryDetailsText"><a href="mailto:info@digitology.co.uk">info@digitology.co.uk</a><br>Ph: 02033719214<br>FAX: 02033719214</span><br><br><span class="CountryText">India</span><br><span class="CountryDetailsText"><a href="mailto:sales@digitology.co.uk">sales@digitology.co.uk</a><br>Ph: +1 (714) 726 2485<br>Fax: 01279 4208</span></div></div></div></div></div></div>
            <!--- Contact Right Container End --->
           <!--- Content Place Holder End -->
              
            </div>
 <!--- Mobile Tabbed --->
            <div class="TabbedContactWraper">
            
            <div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Enquiry</li>
    <li class="TabbedPanelsTab" tabindex="0">Reach us</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
    
     <!--- Contact Left Container -->
            <div class="ContactLeftContainer">
            <div class="ContactLeftInnerContainer">
            <div class="ContactFormTitle">Hello!  How can i help you</div>
            <div class="ContactFormWraper">
            <div class="FormTitleWraper">name</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">E-Mail</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
            <div class="FormTitleWraper">Phone</div>
            <div class="FormInputWraper"><input type="text" class="FormInputWraperz"></div>
             <div class="FormTitleWraper">Message</div>
            <div class="FormInputWraper"><textarea class="FormTextAreaWraperz"></textarea></div>
            <div class="SubmitWraper"><input type="submit" class="SubmitBtn"></div></div></div>
            </div>
            <!--- Contact Left Container End-->

    
    </div>
    <div class="TabbedPanelsContent">
    
    
     <!--- Contact Right Container --->
            <div class="ContactRightContaner">
            <div class="ContactRightInnerContaner">
            <div class="ContactBodyContainer">
            <div class="ContactBodyInnerContainer">
            <div class="ContactBodyLeftContainer">
            <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Offices & Locations</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">Digitology (Head Office)</span>&nbsp; - <span class="CountryText">UK</span><br><span class="CountryDetailsText">201 Jerounds Harlow Essex CM19 4HJ </span><br><br><br><span class="ContactTitleTwoTxt">Development Centers</span>&nbsp; - <span class="CountryText">India</span><br><span class="CountryDetailsText">149/20 Vijaypuri Colony, Tarnaka,Secunderabad, <br>Hyderabad-500 017 Andhra Pradesh</span></div></div>
<div class="ContactBodyRightContainer">
 <div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Phone & Email</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">For Sales!</span><br><span class="CountryText">UK</span><br><span class="CountryDetailsText"><a href="mailto:info@digitology.co.uk">info@digitology.co.uk</a><br>Ph: 02033719214 &nbsp; FAX: 02033719214</span><br><br><span class="CountryText">India</span><br><span class="CountryDetailsText"><a href="mailto:sales@digitology.co.uk">sales@digitology.co.uk</a><br>Ph: +1 (714) 726 2485  &nbsp; Fax: 01279 4208</span></div></div></div></div></div></div>
            <!--- Contact Right Container End --->
    
    
    
    </div>
  </div>
</div>

            
            
            </div>
            <!--- Mobile Tabbed End -->
            </div>
		<!-- The ribbon -->
		<a class="forkit" data-text="" data-text-detached="" href="#"><img style="position: absolute; top: 0; right: 0; border: 0;" src="" alt=""></a>
       
   
	     <!--- FallDown Div end --->          

        <!--- Slide Caption -->
        <div class="CaptionContainer">
        <div class="CaptionInnerContainer"><span class="SliderTitleText SliderTitleTextColor pull-center wow fadeInDown animated animated" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s; text-align:center;">we’re driven to build <br>your digital experience.<a href="#" class="dottedReadMore hvr-sweep-to-top">...</a></span>
        <div class="BtnContainer">
  <div class="BtnWraper BtnResponse BtnMargin">
        <a href="#" class="btn left lg wow fadeInRight animated animated">
        <span class="left icon icon-gear "></span>
        <span class="right title"><span class="arrow-right"></span>Change Settings</span>
      </a>
      </div>
 <div class="BtnWraper BtnMargin">
        <a href="#" class="btn left lg wow fadeInRight animated animated">
        <span class="left icon icon-gear iconz"></span>
        <span class="right title"><span class="arrow-right"></span>request a quote</span>
      </a>
      </div>
</div>
</div>
</div>
                <!--- Slide Caption End -->
            </div></div>
            <!-- Image Slide End -->
            <!--- Aboutus -->
            <div class="AboutContainer P-about">
            <div class="AboutLeftContainer AboutLeftContainerBg AboutLeftMinSize col-lg-7 grid-left wow fadeInLeft animated" data-wow-delay="1.2s"></div>
            <div class="AboutRightContainer">
             <section id="demo">

      <article>
      <div class="col-md-5 grid-right wow fadeInRight animated" data-wow-delay="1.6s">
              <div class="TitleHeading TitleColorP TitleMargin">Trusted IT Vendor since 2008</div>

       
        <p class="NormalText NormalPcolor">Digitology is a global IT solutions company with over 6 year's experience. We provide full-cycle services in the areas of software development, Web-based enterprise solutions, Web application and portal development. We combine our solid business domain experience, technical expertise, profound knowledge of latest industry trends and quality-driven delivery model to offer progressive, end-to-end Web solutions.</p></div>
 </article>
 </section>
            </div></div>
            <!--- Aboutus End -->
            <!--- Our Process --->
            <div class="OurProcessWraper">
            <div class="OP-TitleWraper"><span class="TitleHeading TitleColorP col-md-5 grid-right wow fadeInRight animated">our process</span></div>
            <div class="OurProcessBodyContainer">
            <!---Pannel -->
            <div class="OurProcessPannel">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/Discover.png"></div>
            <div class="HexagonTitle">Discover</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!---Pannel -->
            <div class="OurProcessPannel">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/Design.png"></div>
            <div class="HexagonTitle">Design</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!---Pannel -->
            <div class="OurProcessPannel">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/develop.png"></div>
            <div class="HexagonTitle">Develop</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!---Pannel -->
            <div class="OurProcessPannel DeployMargin">
            <div class="OurProcessInnerPannel">
            <div class="OurProcessIconWraper">
            <div class="hexagon">
            <div class="HexagonInnerWraper">
            <div class="HexagonIcon"><img src="images/deploy.png"></div>
            <div class="HexagonTitle">Deploy</div></div><span></span></div>
            <div class="ProcessTextWraper">Lorem Ipsum is simply dummy text of the printing and typesetting industry imply dummy.</div></div></div></div>
            <!--- Pannel End --->
            <!-- ReadMore --->
            <div class="ProcessReadMoreWrap">
            <div class="RedmoreTg"></div></div>
            <!-- ReadMore --->
            </div></div>
            <!--- Our Process End -->
              <!--- Services --->
           <div class="ServicesWraper">
           <div class="grid">
					<figure class="effect-sadie">
						<img src="images/DesignServices.jpg" alt="img02" width="100%"/>
						<figcaption>
							<h2><span class="UnderLineHvr">De</span>sign<br>
							<span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-sadie">
						<img src="images/Develop.jpg" alt="img14" width="100%"/>
						<figcaption>
							<h2><span class="UnderLineHvr">De</span>v<br><span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
                    	<figure class="effect-sadie">
						<img src="images/DevelopServices.png" alt="img14" width="100%"/>
						<figcaption>
							<h2>Web Application <span class="UnderLineHvr">De</span>v<br>
<span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>							<a href="#">View more</a>
						</figcaption>			
					</figure>
                    	<figure class="effect-sadie">
						<img src="images/Dashboard.jpg" alt="img14" width="100%"/>
						<figcaption>
							<h2>Dashboard <span class="UnderLineHvr">De</span>v <br><span class="ServicesRegTxt">Losum Dummy, Losum Dummy
</span></h2><p>Custom Graphic Design  - Responsive	PSD to anything - Logos Marketing Materials</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div></div>
            <!--- Services End --->
            <!--- TestimonialsWraper  --->
            <div class="TestimonialsWraper">
            <div class="TestiMonialLeftWraper">
            <div class="TestiMonialLeftInnerWraper">
             <div id="da-slider" class="da-slider">
				<div class="da-slide">
				<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				<div class="da-slide">
					<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				<div class="da-slide">
					<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				<div class="da-slide">
					<p class="TestMonNrmalTxtColor">“Digitology has been the best Web development company I have worked with. They have met or exceeded my expectations on every project… They have allowed me to bring all of my projects together under one roof and begin to develop an integrated product and code base that can be leveraged across all of my existing and forthcoming services.”<p class="SignatureTxt TestMonSigColor">Dr. Richard M. Smith<br>President, StrataDat</p></p>
				</div>
				
			</div>
            
            <div class="TestimonalTitleWrap"><span class="TestimonalsTitleWht">LOTS</span><span class="TestimonalsTitlePink"> of </span><br>

<span class="TestimonalsTitleBlack">HIGH FIVES</span></div>
            </div></div></div>
            <!--- TestimonialsWraper End --->
              <!--- Social Contianer -->
            <div class="SocialContainer">
            <div class="SocialoverlyWraper">
            <div class="SocialLefrContentWraper"><span class="SocialTitle">I'M INTERESTED!</span><br><span class="SocialSubTitle">Questions, comments, or ready to start working with us?</span></div>
<div class="holdingbox">
 <span class="leftbox"></span>
 <span class="rightbox">
     <div class="contentx SocialLeftMargin">
     <nav class="social">
          <ul>
              <li><a href="#"><i class="fa fa-twitter"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-facebook"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-skype"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-youtube"></i>&nbsp;@Losum Dammy</a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i>&nbsp;@Losum Dammy</a></li>
           </ul>
      </nav></div>
 </div>
 
</div></div>
            <!--- Only Mobile -->
            <div class="SocialOnlyTabMobile">
             <ul>
            <li class="FbIcon"><a href="#">@ losum dammy</a></li>
            <li class="gogIcon"><a href="#">&nbsp; @ losum dammy</a></li>
            <li class="InIcon"><a href="#">&nbsp; @ losum dammy</a></li>
            <li class="SkypeIcon"><a href="#">&nbsp; @ losum dammy</a></li>
            <li class="YtIcon"><a href="#">&nbsp; @ losum dammy</a></li></ul>
             </div>
             <!--- Only Mobile End -->
            <!-- Social Container End --->
            <!--- Footer Container -->

            <div class="FtrContainer">
            <div class="FtrLinkCloumn">
            <div class="FtrColumnMenu">
            <div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#">Home</a></li>
<li><a href="#">Work</a></li>
<li><a href="#">Company</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Careers</a></li></ul></div>
<div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#"><span class="ServicesTxt">Services</span></a></li>
<li><a href="#">Strategy</a></li>
<li><a href="#">Design</a></li>
<li><a href="#">Development</a></li>
<li><a href="#">Search & Social</a></li>
<li><a href="#">Content</a></li>
<li><a href="#">Website Maintenance</a></li></ul></div></div></div>
<div class="FtraddressCloumn">
<div class="FtrColumnMenu">
  <div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#"><span class="ServicesTxt">GET IN TOUCH</span></a></li>
<li><a href="#"><span class="FtrWhiteTxt">Digitology</span><br>1234 Losum dammy <br>Losum dammy, HYD 500036</a></li></ul></div>
<div class="ftrMenu FtrTxtColor">
            <ul>
            <li><a href="#">P: 123.456.7890</a></li>
<li><a href="#">F: 123.456.7890</a></li>
<li><a href="#">info@digitology.co.uk</a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li></ul></div></div></div>
<div class="FtraboutCloumn">
<div class="FtrColumnMenuOutBorder"><span class="FtrAboutTxt">Digitology is an established Web development company delivering Web development services of any complexity to clients worldwide.<br><br>Web development services of any complexity to clients worldwide</span></div>		</div>
<div class="Childtr"><span class="ChildtrTxt">Hyderabad India, or · England, UK · Losumdammy, UK · Losumdammy,  Losum dammy, UK | ©2015 Digitology.co.uk &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">- Privacy Policy</a></span></div>            
<!-- Footer Contianer End -->
<a href="#0" class="cd-top">Top</a>
</div>
        <!-- container -->
    </div>
</div>
  <!--Menu-->
		<script src="js/classie.js"></script>
		<script src="js/main4.js"></script>
        <script src="js/main-green.js"></script>
        <script src="js/main-pink.js"></script>
        <!--Menu End-->
        <!--- FallDown Div --->
        <script src="js/forkit.js"></script>
        <!--- FallDown Div End --->
        <!--- Expender --->
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script src="js/readmore.js"></script>

  <script>
    $('#info').readmore({
      moreLink: '<a href="#">Usage, examples, and options</a>',
      collapsedHeight: 384,
      afterToggle: function(trigger, element, expanded) {
        if(! expanded) { // The "Close" link was clicked
          $('html, body').animate({scrollTop: $(element).offset().top}, {duration: 100});
        }
      }
    });

    $('article').readmore({speed: 500});
  </script>
        <!--- Expender End -->
        <!-- Hvr Effects -->
        <script>
			// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
        <!-- Hvr Effects End -->
        <!-- Testimonals -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: false,
					bgincrement	: 450
				});
			
			});
		</script>	
        <!-- Testimonals End -->
        <!--- Social Container -->
        <script>
             $('.holdingbox').hover(function(){
        $('.rightbox').animate({width: '556px'}, 1000)
    }, function(){
        $('.rightbox').animate({width: '1'}, 1000)
    });
       </script>
        <!--- Social Container End --->
         <!-- Page Scroll -->
<script src="js/main5.js"></script> <!-- Gem jQuery -->
        <!-- Page Scroll End -->
         <!--- Tabeed Mobile --->
      
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
		<!--- Tabbed Mobile end -->
</body>
</html>