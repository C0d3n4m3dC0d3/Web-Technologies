<?php
  $lec_name = "Arrays in PHP: Simple, Associative, Multidimensional";
  //Simple Array
  $moustache = array("Handlebar", "Salvador Dali", "Fu Manchu");
  //Associative Array
  $handlebar = array(
                      "creep_factor" => "High!",
                      "name" => "Handlebar",
                      "no_of_days" => 14
                    );
  //Multidimensional Array
 $moustaches = array(
                      array(
                        "creep_factor" => "High!",
                        "name" => "Handlebar",
                        "no_of_days" => 14
                      ),
                      array(
                        "creep_factor" => "Extreme!",
                        "name" => "Salvador Dali",
                        "no_of_days" => 62
                      ),
                      array(
                        "creep_factor" => "Very High!",
                        "name" => "Fu Manchu",
                        "no_of_days" => 58
                      )
                    );
?>

<html>
  <head>
    <title>ARRAYS in PHP </title>
  </head>

  <body>
    <h1><?php echo "Hey! We're doing $lec_name!";?> </h1>
    <br>
    <h3> <?php echo "Simple Array: moustache";?> </h3>
    <ol start = "0">
      <li><?php echo $moustache[0];?></li>
      <li><?php echo $moustache[1];?></li>
      <li><?php echo $moustache[2];?></li>
    </ol>

    <h3> <?php echo "Associatve Array: handlebar";?> </h3>
    <ul type = "circle">
      <li><?php print("Name : $handlebar[name]"); ?></li>
      <li><?php echo "Creep Factor : $handlebar[creep_factor]";?></li>
      <li><?php print("Days to grow: $handlebar[no_of_days]");?></li>
    </ul>
    <h3> <?php echo "Multidimensional Array: moustaches";?> </h3>
    <ol start = "0">
      <li>
        <ul type = "circle">
          <li><?php print($moustaches[0]["name"]); ?></li>
          <li><?php print($moustaches[0]["creep_factor"]);?></li>
          <li><?php print($moustaches[0]["no_of_days"]);?></li>
        </ul>
      </li>
      <li>
        <ul type = "circle">
          <li><?php print($moustaches[1]["name"]); ?></li>
          <li><?php print($moustaches[1]["creep_factor"]);?></li>
          <li><?php print($moustaches[1]["no_of_days"]);?></li>
        </ul>
      </li>
      <li>
        <ul type = "circle">
          <li><?php print($moustaches[2]["name"]); ?></li>
          <li><?php print($moustaches[2]["creep_factor"]);?></li>
          <li><?php print($moustaches[2]["no_of_days"]);?></li>
        </ul>
      </li>
    </ol>

  </body>
</html>
