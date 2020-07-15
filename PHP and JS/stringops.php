<?php
//String Operators
  define ("TITLE", "String Operators");
  $str1 = "I love ";
  $str2 = "to sleep";
  $str3 = "! <3";
?>

<html>
  <head>
    <title><?php echo TITLE;?> </title>
  </head>
  <body style = "background : powderblue;">
    <h1><?php echo TITLE;?></h1>
    <h3>
      My strings are:<br>
      <ol>
        <li><?php echo $str1;?></li>
        <li><?php echo $str2;?></li>
        <li><?php echo $str3;?></li>
      </ol>
    </h3>
    <h2>
      Let's concatenate them:<br>
      <?php print($str1 . " . " . $str2 . " . " . $str3);?>
    </h2>
    <?php
      $str1 = $str1.$str2;
      $str1 .= $str3;
    ?>
    <br>
    <h1 style = "color: coral;">
    The result is: <?php echo $str1;?>
    </h1>
  </body>
</html>
