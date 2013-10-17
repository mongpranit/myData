
<div id="spinner" class="spinner" style="display:none;"><g:message code="spinner.alt" default="Loading.."/>uuuuu</div>

  <!-- Demo CSS 
	<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />-->
  <link rel="stylesheet" href="slide/flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="slide/slide/js/modernizr.js"></script>



	<section class="slider" style="width: 864px;height: 339px;">
        <div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="images/slide/n1.png"/>
    		</li>
  	    		<li>
  	    	    <img src="images/slide/n3.png" />
  	    		</li>
  	    		<li>
  	    	    <img src="images/slide/n2.png" />
  	    		</li>
  	    		<li>
  	    	    <img src="images/slide/n4.png" />
  	    		</li>
          </ul>
        </div>
      </section>
      
  <!-- jQuery 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script> -->

  <!-- FlexSlider -->
  <script defer src="slide/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="slide/slide/js/shCore.js"></script>
  <script type="text/javascript" src="slide/slide/js/shBrushXml.js"></script>
  <script type="text/javascript" src="slide/slide/js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="slide/slide/js/jquery.easing.js"></script>
  <script src="slide/slide/js/jquery.mousewheel.js"></script>
  <script defer src="slide/slide/js/demo.js"></script>
