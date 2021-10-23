<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>@yield('title') | Bầu Trời Xanh</title>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/front-end/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/front-end/animate/animate.css" />
  <link rel="stylesheet" href="/front-end/animate/set.css" />
  <link rel="stylesheet" href="/front-end/gallery/blueimp-gallery.min.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  @yield('css')
</head>

<body>

  @yield('body')

  <!-- Messenger Plugin chat Code -->
  <div id="fb-root" ></div>
  <!-- Your Plugin chat code -->
  <div id="fb-customer-chat" class="fb-customerchat" minimized="true">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "164141412103102");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
      FB.init({
        xfbml: true,
        version: 'v11.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <script src="/front-end/jquery.js"></script>
  <script src="/front-end/wow/wow.min.js"></script>
  <script src="/front-end/bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script src="/front-end/mobile/touchSwipe.min.js"></script>
  <script src="/front-end/respond/respond.js"></script>
  <script src="/front-end/gallery/jquery.blueimp-gallery.min.js"></script>
  <script src="/front-end/script.js"></script>
  @yield('scripts')
</body>

</html>