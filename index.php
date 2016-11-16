<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Page 1</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- start Mixpanel -->
    <script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
    0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
    for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
    mixpanel.init("cefb5214f48a583fbbad4b86dbdfd2f1");</script>
    <!-- end Mixpanel -->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Page 1</h1>
          <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="page2.php">Page 2</a></li>
            <li role="presentation"><a href="page3.php">Page 3</a></li>
          </ul>
        </div>
        <div class="col-md-12">
          <button class="btn btn-primary" id="tbl1">Tombol 1</button>
          <button class="btn btn-primary" id="tbl2">Tombol 2</button>
          <button class="btn btn-primary" id="tbl2a">Tombol 2a</button>
          <br/>
          <a href="https://facebook.com" id="btn_fb">Facebook</a>
          <br/>
          <a href="signup.php" id="tbl_signup">Sign Up</a>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jQuery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      mixpanel.track("page1");

      $("#tbl1").click(function(){
        mixpanel.track("tombol 1");
      });

      $("#tbl2").click(function(){
        mixpanel.track(
          "tombol 2",
          {"isi": "tamvan"}
        );
      });

      $("#tbl2a").click(function(){
        mixpanel.track(
          "tombol 2",
          {"fungsi": "itulah"}
        );
      });

      $("#btn_fb").click(function(event){
        var cb = generate_callback($(this));
        var alamat = $(this).attr("href");
        event.preventDefault();
        mixpanel.track("ke facebook");
        setTimeout(cb, 500);
      });

      $("#tbl_signup").click(function(event) {
          var cb = generate_callback($(this));
          var alamat = $(this).attr("href");
          event.preventDefault();
          mixpanel.track("Tombol Signup");
          setTimeout(cb, 500);
      })
          
      function generate_callback(a) {
          return function() {
              window.location = a.attr("href");
          }
      }
    </script>
  </body>
</html>