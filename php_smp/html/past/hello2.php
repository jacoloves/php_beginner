<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hello, World</title>
  </head>
  <body>
    Hello <strong>
      <?php echo htmlspecialchars($_GET['name'], ENT_QUOTES); ?>
    </strong>!
  </body>
</html>


