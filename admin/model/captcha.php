<html>
  <head>
    <title>reCAPTCHA demo: Explicit render for multiple widgets</title>
    <script type="text/javascript">
      var verifyCallback = function(response) {
        // alert(response);
      };
      var widgetId1;
      var widgetId2;
      var onloadCallback = function() {
        // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
        // The id of the reCAPTCHA widget is assigned to 'widgetId1'.
        // widgetId1 = grecaptcha.render('example1', {
        //   'sitekey' : '6Ldxc-MpAAAAAFGQ7bgx31VFeQnHImL0xqaVgwxj',
        //   'theme' : 'light'
        // });
        // widgetId2 = grecaptcha.render(document.getElementById('example2'), {
        //   'sitekey' : '6Ldxc-MpAAAAAFGQ7bgx31VFeQnHImL0xqaVgwxj'
        // });
        grecaptcha.render('example3', {
          'sitekey' : '6Ldxc-MpAAAAAFGQ7bgx31VFeQnHImL0xqaVgwxj',
          'callback' : verifyCallback,
          'theme' : 'dark'
        });
      };
    </script>
    <link rel="stylesheet" href="../view/style.css">
  </head>
  <body>
    <!-- The g-recaptcha-response string displays in an alert message upon submit. -->
    <!-- <form action="javascript:alert(grecaptcha.getResponse(widgetId1));">
      <div id="example1"></div>
      <br>
      <input type="submit" value="getResponse">
    </form>
    <br>
     Resets reCAPTCHA widgetId2 upon submit.
    <form action="javascript:grecaptcha.reset(widgetId2);">
      <div id="example2"></div>
      <br>
      <input type="submit" value="reset">
    </form>
    <br>
    POSTs back to the page's URL upon submit with a g-recaptcha-response POST parameter. -->
    <div class="gridcenter">
    <form action="captcharesponse.php" method="POST">
      <div id="example3"></div>
      <br>
      <input type="submit" value="Submit">
    </form>
    </div>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
  </body>
</html>