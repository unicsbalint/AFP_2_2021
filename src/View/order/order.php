<?php
include "../header.php";

require_once "../../Controller/OrderController.php";

$orderController=new OrderController();
$tipusok=$orderController->getTypes();

?>
<body>
<?php
include "../nav.php";
?>
</body>
<section class="container">
    <form method="post" class="form-group">
        <label for="carmodel">Válasszon egy szint!</label><br></>
    <select name="colors" id="colors" class=" form-control col-2">
        <?php
        $count=count($orderController->getColor())-1;
        for ($i=0;$i<=$count;$i++){
            ?>
            <option value="<?php echo $orderController->getColor()[$i]["color"] ?>"><?php echo $orderController->getColor()[$i]["name"] ?> </option>
        <?php } ?>
    </select>

    <label for="carmodel">Válasszon egy modellt</label><br></>
    <select name="models" id="cars" class="form-control col-2">
        <?php
        $selectedType=$orderController->getTypes();
        $count=count($selectedType)-1;
        for ($i=0;$i<=$count;$i++){
        ?>
            <option value="<?php echo $selectedType[$i]["model_name"] ?>"><?php echo $selectedType[$i]["model_name"] ?> </option>
        <?php } ?>
    </select>
    </form>
</section>

</body>