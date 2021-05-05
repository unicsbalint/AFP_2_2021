<?php
require_once "../../View/header.php";
require_once "../../Controller/LoginController.php";
require_once "../../Controller/UserController.php";
require_once "../../Controller/DbController.php";

$lgController = new LoginController;
$updateHandler = new UserController();
$dbfunctions = new DbController;
$params = [
    ':email' => $_SESSION['email']
];
$query = "SELECT id_user, name, email, password, address FROM user WHERE email = :email";
$record = $dbfunctions->getRecord($query, $params);

?>
<body>

<?php if ($lgController->IsUserLoggedIn()):?>

    <form method="post" class="form-group" name="userForm">

        <label for="description">Név</label>
        <input type="text" name="name" class="form-control col-12" value="<?php echo $record['name'] ?>">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control col-12" value="<?php echo $record['email'] ?>">
        <label for="address">Lakcim</label>
        <input type="text" name="address" class="form-control col-12" value="<?php echo $record['address'] ?>">


        <input type="submit" name="submit" class="btn btn-info">
    </form>
    <?php
    if (isset($_POST) && isset($_POST["submit"])) {
        require_once '../../Model/User.php';
        $updatedUser = new User();
        $updatedUser = $_POST;

        $updateHandler->updateProfile($updatedUser, $_SESSION["email"]);

        unset($_POST["submit"]);
    }
    ?>
<?php endif; ?>

</body>
