<?php
include "../header.php";

require_once "../../Controller/OrderController.php";

$orderController = new OrderController();
$tipusok = $orderController->getTypes();

?>
<body>
<?php
?>
<section class="container">
    <form method="post" class="form-group" name="orderForm" >
        <label for="carmodel">Válasszon egy szint!</label><br></
    >
    <select name="colors" id="colors" class=" form-control col-12">
        <?php
        $count = count($orderController->getColor()) - 1;
        for ($i = 0; $i <= $count; $i++) {
            ?>
            <option value="<?php echo $orderController->getColor()[$i]["id_color"] ?>"><?php echo $orderController->getColor()[$i]["name"] ?> </option>
        <?php } ?>
    </select>

    <label for="carmodel">Válasszon egy modellt</label><br></>
    <select name="models" id="cars" class="form-control col-12">
        <?php
        $selectedType = $orderController->getTypes();
        $count = count($selectedType) - 1;
        for ($i = 0; $i <= $count; $i++) {
            ?>
            <option value="<?php echo $selectedType[$i]["id"] ?>"><?php echo $selectedType[$i]["model_name"] ?>$ </option>
        <?php } ?>
    </select>
    <label for="extras">Válasszon egy extrat</label>
    <select name="extras" id="extras" class="form-control col-12">
        <?php
        $selectedExtras = $orderController->getExtras();
        $count = count($selectedType) - 1;
        for ($i = 0; $i <= $count; $i++) {
            ?>
            <option value="<?php echo $selectedExtras[$i]["_id"] ?>"><?php echo $selectedExtras[$i]["description"] ?> </option>
        <?php } ?>
    </select>

    <label for="description">Leiras</label>
    <input type="text" name="description" class="form-control col-12">

    <input type="submit" name="submit" class="btn btn-info">
    </form>
</section>

    <!-- Modal ablak a submit gomb click eventjére-->
<div class="bg-modal">
    <div class="modal-content">
        <form action="">
            <div class="userDetails">
                <label for="userDetails">Vásárló adatok</label><br>
                <input type="text" placeholder="Név">
                <input type="text" placeholder="E-mail">
                <input typy="text" placeholder="Cím">
            </div>

            <div class="carDetails">
                <label for="carDetails">Termék adatok</label><br>
                <input type="text" placeholder="Szín">
                <input type="text" placeholder="Model">
                <input type="text" placeholder="Extra">
                <input type="text" placeholder="Leírás">
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST) && isset($_POST["submit"]) ) {
    require_once '../../Model/Car.php';
    $orderedCar = new Car();
    $orderedCar=$_POST;
    $orderController->insertOrder($orderedCar);

    unset($_POST["submit"]);
}
?>
</body>