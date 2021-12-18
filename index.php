<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/style.css" type="text/css" />
  <title>Contact form | by Qasim</title>
</head>
<body>
  <div class="alert">
    <span id="close">close</span>
    <p></p>
  </div>
  <form class="form" action="send.php" method="post">
    <h2>Get in touch</h2>
    <div class="input">
      <span>person</span>
      <input type="text" name="name" id="name" placeholder="Your name" />
    </div>
    <div class="input">
      <span>email</span>
      <input type="text" name="email" id="email" placeholder="Your email" />
    </div>
    <textarea name="message" id="message" placeholder="Your message..."></textarea>
    <button id="btn" type="submit">Send <span>send</span></button>
  </form>
  <script src="dist/jquery.min.js" type="text/javascript"></script>
  <!--<script type="text/javascript">
    $("#close").click(()=> {
      $(".alert").removeClass("act");
      $(".alert").removeClass("done");
    });
    $("#btn").click(()=> {
      if ($("#name").val() == "") {
        $(".alert").addClass("act");
        $(".alert p").html("The name fild can't be empty!");
        return false;
      }
      if ($("#email").val() == "") {
        $(".alert").addClass("act");
        $(".alert p").html("The email fild can't be empty!");
        return false;
      }
      if ($("#message").val() == "") {
        $(".alert").addClass("act");
        $(".alert p").html("The message fild can't be empty!");
        return false;
      } else {
        return true;
        // send data
        var uName = $("#name").val();
        var uEmail = $("#email").val();
        var uMessage = $("#message").val();
        $.ajax({
          type: "post",
          url: "send.php",
          data: {
            'name': uName, 'email': uEmail, 'message': uMessage
          },
          success: function() {
            $(".alert").addClass("done");
            $(".alert p").html("Your message send successfully!");
          }
        });
      }
    });
  </script>-->
</body>
</html>