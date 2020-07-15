<?php
  define("TITLE", "foreach loop");
  //Create an array
  $arr = array("Choi Soobin", "Choi Yeonjun", "Choi Beomgyu", "Kang Taehyun", "Huening Kai");
?>

<html>
  <head>
    <title><?php echo TITLE;?> </title>
  </head>

  <body style = "background: darkviolet; margin: 75px 490px; color: white; text-align: center; font-size: 23px;">
    <h1> Let's loop through the array and sort them!</h1>
    <h2> My array: $arr <h2>
      <h4>
            <?php
              $i = 1;
              foreach($arr as $txt)
              {
                echo $i++. ". ". $txt . "<br>";
              }
            ?>
      </h4>

      <h2> Sorted array: sort($arr);<h2>
        <h4>
              <?php
                sort($arr);
                $i = 1;
                foreach($arr as $txt)
                {
                  echo $i++. ". ". $txt . "<br>";
                }
              ?>
        </h4>

        <h2> Reverse sorted array: rsort($arr);<h2>
          <h4>
                <?php
                  rsort($arr);
                  $i = 1;
                  foreach($arr as $txt)
                  {
                    echo $i++. ". ". $txt . "<br>";
                  }
                ?>
          </h4>


  </body>
</html>
