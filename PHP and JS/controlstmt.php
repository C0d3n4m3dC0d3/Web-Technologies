<?php
  define("TITLE", "Control Statements: if, else, else-if");
  $name = "Beomgyu";
?>
<html>
  <head>
    <title>if, else, else-if</title>
  </head>
  <body style = "background: powderblue;">
    <h1><?php echo TITLE ?></h1>
    <h3>
      <?php
        if($name == "Beomgyu")
          echo "Nice to meet you, mr.Tiger!!";
        else if($name == "Soobin")
          echo "Nice to meet you, mr.Rabbit!";
        else
          echo "The system sends its warm wishes to the TXT members!";
      ?>
    </h3>
  </body>
</html>
