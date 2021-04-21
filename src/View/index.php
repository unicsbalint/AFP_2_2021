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
      <div style="display:none" id="orderS">Custom order</div>
    </div>
    <div id="homepage-3">
      <div style="display:none" id="model3Text">MODEL 3</div>
      <div style="display:none" id="order3">Custom order</div>
    </div>
    <div id="homepage-X">
      <div style="display:none" id="modelXText">MODEL X</div>
      <div style="display:none" id="orderX">Custom order</div>
    </div>
    <div id="homepage-Y">
      <div style="display:none" id="modelYText">MODEL Y</div>
      <div style="display:none" id="orderY">Custom order</div>
    </div>
</body>
</html>