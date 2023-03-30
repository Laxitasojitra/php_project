<?php include('admin/config.php');?>
<?php include('login-check.php');?>

<?php include('header.php');?>




<html>
  <head>
    <style>
      * {
        box-sizing: border-box;
      }

      .column {
        float: left;
        width: 33.33%;
        padding: 5px;
      }

      /* Clearfix (clear floats) */
      .row::after {
        content: "";
        clear: both;
        display: table;
      }
    </style>
  </head>
  <body>
    <center><h1>Photography & Videography</h1></center>
    <center>
      <p>Amazing cameras with capture memorizable memory!<br><br>
        As an event organiser, event photography can seem like the least of your
        concerns. When you have a budget to think of and a long list of
        arrangements, photography can seem inconsequential. But this is actually
        a huge oversight made by many event organisers. Event photography is one
        of the most powerful tools in your arsenal, as it not only improves your
        brand image but can be used as information to support your event
        attendees.
      </p>
    </center>

    <div class="row">
      <div class="column">
        <img src="all_photos1/51.jpg" alt="Snow" style="width: 100%" />
      </div>
      <div class="column">
        <img src="all_photos1/52.jpg" alt="Forest" style="width: 100%" />
      </div>
      <div class="column">
        <img src="all_photos1/53.jpg" alt="Mountains" style="width: 100%" />
      </div>
    </div>
<br>
    <div class="row">
      <div class="column">
        <img src="all_photos1/54.jpg" alt="Snow" style="width: 100%" />
      </div>
      <div class="column">
        <img src="all_photos1/55.jpg" alt="Forest" style="width: 100%" />
      </div>
      <div class="column">
        <img src="all_photos1/56.jpg" alt="Mountains" style="width: 100%" />
      </div>
    </div>
  </body>
</html>
<?php include('footer.php');?>