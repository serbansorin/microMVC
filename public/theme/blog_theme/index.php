<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Bloggers Green</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="public/theme/blog_theme/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
</head>
<body>
<div id="content">
  <div>
    <h1>Bloggersgreen</h1>
    <h2>Free CSS Template</h2>
  </div>
  <div id="menu">
    <ul>
      <li><a href="#" id="main-menu1">Home</a></li>
      <li><a href="index.php?c=user&a=list" id="main-menu2">Users</a></li>
      <li><a href="index.php?c=articole&a=list" id="main-menu3">Articole</a></li>
      <li><a href="#" id="main-menu5">Contact Us</a></li>
    </ul>
  </div>
  <div id="left"> 
    <div id="message">
    <?php 
      $message = \framework\Mess::getAllMess();
      if($message){
        foreach ($message as $mess) {
          echo $mess;
        }
      }       
    ?>
    </div>   
    <?php echo $content; ?>
  </div>
  <div id="right">
    <h2>Lorem Ipsum</h2>
    <p>Nunc pellentesque. Sed vestibulum blandit nisl. Quisque elementum convallis purus. Suspendisse potenti. Donec nulla est, laoreet quis, pellentesque in. <a href="#">More&#8230;</a></p>
    <h2>Ipsum Dolorem</h2>
    <ul>
      <li><a href="#">Sagittis Bibendum Erat</a></li>
      <li><a href="#">Malesuada Turpis</a></li>
      <li><a href="#">Quis Gravida Massa</a></li>
      <li><a href="#">Inerat Viverra Ornare</a></li>
    </ul>
  </div>
  <div>
    <p>&nbsp;</p>
  </div>
  <div id="footer">
    <p>Copyright &copy; 2006 Sitename.com. Designed by <a href="http://www.freecsstemplates.org" class="link1">Free CSS Templates</a></p>
  </div>
</div>
</body>
</html>
