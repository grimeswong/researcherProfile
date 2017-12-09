<!DOCTYPE html>
<html>
    <head>
      <title>@yield('title')</title>
      <meta charset="UTF-8">  <!-- charset setting -->
       <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- responsive setting, it doesn't spread the content that use all width -->
       <!-- <link rel="stylesheet" href="style.css"> --> <!-- external css file -->
       <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

       <!-- Bootstrap CDN link -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    </head>

    <body>
      <div class="preload"> <!-- for preload screen -->
        <div class="loader">

        </div>
      </div>

      <div class="body-wrapper" style="display: none;">
        <div class="header">
            <a class="col-sm-4 offset-sm-2" href="{{asset('/')}}">Researchers' Profile</a>
        </div> <!-- end of header -->

        @yield('content')

        <div class="footer">
            copyright 2017
        </div>
      </div>
    </body>
</html>

<script type="text/javascript">

/*** Loader ***/
/*** Function to get the document width and height and set the loader top and left position by half of them ***/
$(window).on('load', function(e) {  // executes when complete page is fully loaded, including all frames, objects images
// $(document).ready(function() {   // executes when HTML-Document is loaded and DOM is ready
  // var height = $(document).outerHeight();
  // console.log("height =" + height);
  // $(".loader").css("top", height/2+"px");
  // var width = $(document).outerWidth();
  // console.log("width =" + width);
  // $(".loader").css("left", (width/2-25)+"px");
  jQuery(".preload").fadeOut(3000);
  jQuery(".body-wrapper").css("display", "block");
});

  var ypos, image;
  function parallax () {
      ypos = window.pageYOffset;
      image = document.getElementById('image');
      image.style.top = ypos * .8 + 'px'; //don't go above 1
  }

  //when window detect the user is scrolling, call the function parallax
  window.addEventListener('scroll', parallax)  // first parameter is event, second parameter is the function call
</script>

@yield('script')
