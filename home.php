<!DOCTYPE html>
<html>
  <head>
    <title>The Future Romdennes</title>

    <!-- Include stylesheets and fonts -->
    <?php include("static/sheets-fonts.php"); ?>

  </head>
  <body class="landing">

    <div class="container-fluid center">
      <div class="row-fluid">
        <h1 class="page-title">The Future Romdennes</h1>
        <h1>Coming Soon</h1>

        <!-- Button to trigger modal -->
        <div>
          <a id="lock-btn" href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal"><i class="icon-unlock icon-large"></i></a>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
            <h3 id="myModalLabel" style="font-size: 36px">The Surprise</h3>
          </div>
          <div class="modal-body">
            <p>Are you ready for this? First, you have to answer a question... Who was playing on our first date?</p>
            <br>
            <form name="myForm">
              <input type="text" name="home" placeholder="Home"> vs. <input type="text" name="away" placeholder="Away">
              <div id="wrong"></div>
              <small id="hint" style="display: none">Hint: there's a record of this somewhere if you've forgotten and you need to go searching...</small>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary" onclick="validate()"><i class="icon-arrow-right"></i></button>
          </div>
        </div>
      </div>
    </div>

    <?php include("static/javascripts.php"); ?>
  </body>
</html>