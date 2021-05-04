<?php
//require_once('src/Model/Db/DbController.php');
//$con = new dBFunctions();
//$connection = $con->connectToDatabase();
//$select = $con->getRecord('select * from `Model`');
//
//require_once('src/Model/Model.php');
//$Model=new Model();
//$Model=$select;
?>

<!DOCTYPE html>
<html lang="hu">
<?php
include "header.php";
?>
<body>
<?php
include "nav.php";
?>
    <div id="homepageHeader"></div>
    <div id="homepage-S">
      <div style="display:none" id="modelSText">MODEL S</div>
      <a href="orderS/orderS.php" style="display:none" id="orderS">Check it out</a>
    </div>
    <div id="homepage-3">
      <div style="display:none" id="model3Text">MODEL 3</div>
      <a href="order3/order3.php" style="display:none" id="order3">Check it out</a>
    </div>
    <div id="homepage-X">
      <div style="display:none" id="modelXText">MODEL X</div>
      <a href="orderX/orderX.php" style="display:none" id="orderX">Check it out</a>
    </div>
    <div id="homepage-Y">
      <div style="display:none" id="modelYText">MODEL Y</div>
      <a href="orderY/orderY.php" style="display:none" id="orderY">Check it out</a>
    </div>
</body>
</html>