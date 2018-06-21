
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Future Romdennes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Include stylesheets and fonts -->
    <?php include("static/sheets-fonts.php"); ?>

    <link href="foundation/stylesheets/foundation.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body id="proposal-body">

    <div id="proposal">
      <p>You made it! There's no turning back once you click the button...</p>
      <small>(You can pause by hovering inside the timer in the upper right corner though)</small>
      <br><br>
      <btn id="start" class="btn btn-large btn-primary">Begin</btn>
    </div>

    <div id="hide">
      <div id="featuredContent" style="display: none">
        <div>
          <p>Today is the day you've been waiting for.</p>
        </div>
        <div>
          <p>I recently purchased an item more expensive than anything I have purchased before, with the exception of my education.</p>
        </div>
        <div>
          <p>I'll come back to the purchase in a moment. For now I'd like to reflect on that education.</p>
        </div>
        <div>
          <p>An education is a commitment one makes to oneself, an investment in one's future.</p>
        </div>
        <div>
          <p>I am thankful for the education I committed to. Besides being an investment in the future, the education I committed to led me to you.</p>
        </div>
        <div>
          <p>Although I didn't fully realize it at the time, the commitment I made to an education was not just an investment in my own future.</p>
        </div>
        <div>
          <p>It was an investment in our future, and in the foundation upon which our relationship would be built.</p>
        </div>
        <div>
          <p>Nearly four years have passed, and we've shared many experiences while constructing that foundation.</p>
        </div>
        <div>
          <p>We've been vulnerable, we've had difficult times, but we've also made some great memories, and we've always been happy together.</p>
        </div>
        <div>
          <p>The foundation of our relationship has been laid, and I know we're both fully prepared and excited to begin building the rest of our lives.</p>
        </div>
        <div>
          <p>I mentioned that an education is a commitment to one's own future.</p>
        </div>
        <div>
          <p>The purchase I recently made symbolizes a commitment as well - a commitment to you and to our future together.</p>
        </div>
        <div>
          <p>For roughly the past three years you've been longing for this day, claiming that I would make you wait for forever.</p>
        </div>
        <div>
          <p>And for three years I've been patiently waiting to be able to tell you that you were right.</p>
        </div>
        <div>
          <p>Almost four years ago we walked this same path together after our first date, and our walk concluded with a new beginning.</p>
        </div>
        <div>
          <p>It was the beginning of a relationship that I now know will last a lifetime.</p>
        </div>
        <div>
          <p>Today is the day I can finally tell you that you were right - I have made you wait for forever.</p>
        </div>
        <div>
          <p>Our forever.</p>
        </div>
      </div>
    </div>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="flatstrap/assets/js/jquery.js"></script>
    <script src="foundation/javascripts/jquery.foundation.orbit.js"></script>

    <script type="text/javascript">
        $('#start').click(function() {
          var slide=1;
          $('#proposal').fadeOut(2000);
          setInterval(function(){$('#featuredContent').fadeIn(2000)}, 2000);
          $("#featuredContent").orbit({
            animation: 'fade',
            animationSpeed: 3000,
            advanceSpeed: 17000,
            directionalNav: false,
            captions: false,
            bullets: false,
            fluid: '16x6',
            singleCycle: true
          });
        });
    </script>

  </body>
</html>
