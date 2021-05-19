<?php
require_once "../../View/header.php";
require_once "../../Controller/LoginController.php";
require_once "../../Controller/UserController.php";


$lgController = LoginController::getInstance();
$updateHandler = new UserController();


?>
<body>

<?php if ($lgController->IsUserLoggedIn()): ?>

<div class="container my-5">


    <form method="post" id="form" class="form-group" name="userForm">
        <div class="form-controll" id="userForm">

        </div>
        <button type="button" name="submit" id="updateProf" class="btn btn-info">
    </form>

    <?php  endif; ?>
</div>

</body>
<script>
    $(document).ready(function () {
        $.ajax({
            url: "../../Controller/localController.php",
            type: 'POST',
            data: {"whichFunction": "getUserDatas", "email": "<?php echo $_SESSION["email"]?>"},
            dataType: "JSON",
            async: false,
            success: function (response) {
                (response.post_name == null) ? response.post_name = response.name : response.post_name;
                (response.post_address == null) ? response.post_address = response.address : response.address;
                (response.post_phone_number == null) ? response.post_phone_number = response.phone_number : response.phone_number;
                let table = ``;
                table += `
                <label for="description">Név</label>
                <input type="text" name="name" class="form-control col-12" id="name" value="${response.name}">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control col-12" id="email" value="${response.email}">
                <label for="address">Lakcim</label>
                <input type="text" name="address" class="form-control col-12" id="address" value="${response.address}">
                <label for="address">Telefonszám</label>
                <input type="text" name="phone_num" class="form-control col-12" id="phone_num" value="${response.phone_number}">
                <label for="address">Adószám</label>
                <input type="text" name="vat_num" class="form-control col-12" id="vat_num" value="${response.vat_number}">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="is_post_datas" >
                    <label class="form-check-label" for="is_post_datas">
                        Egyéni postázási cím...
                    </label>
                </div>
                <div class="toggle" style="display: none;" id="toggle">
                    <label for="description">Postázási Név</label>
                    <input type="text" name="post_name" class="form-control col-12" id="post_name" value="${response.post_name}">
                    <label for="post_address">Postázási cím</label>
                    <input type="text" name="post_address" class="form-control col-12" id="post_address" value="${response.post_address}">
                    <label for="address">Lakcim</label>
                    <input type="text" name="post_phone_number" class="form-control col-12" id="post_phone_number" value="${response.post_phone_number}">
                </div>
                `;
                $("#userForm").html(table);
            }


        });
    });

    $(document).ready(function () {
        let isClicked = false;

        $('#is_post_datas').click(function () {
            if (isClicked) {
                $('.toggle').hide();
                isClicked = false;
            } else {
                isClicked = true;
                $('.toggle').show();
            }
        })
    });

    $("#updateProf").click(function (e) {

        /// fucking hardcode 'couse kurva az anyja :-)
        const name=$("#name").val();
        const email=$("#email").val();
        const address=$("#address").val();
        const phone_num=$("#phone_num").val();
        const vat_num=$("#vat_num").val();
        const post_name=$("#post_name").val();
        const post_address=$("#post_address").val();
        const post_phone_number=$("#post_phone_number").val();
        let formObj={
            "name":name,
            "email":email,
            "address":address,
            "phone_num":phone_num,
            "vat_num":vat_num,
            "post_name":post_name,
            "post_address":post_address,
            "post_phone_number":post_phone_number
        };
        e.preventDefault();
        $.ajax({
            url: "../../Controller/localController.php",
            type: 'POST',
            data: {"whichFunction": "updateProfile",data:formObj, "user_id": "<?php echo $_SESSION["user_id"]?>"},
            dataType: "JSON",
            async: false,
            success: function (response) {
                if (response) {
                    alert("Profile updated successfully!");
                }else{
                    alert("Upps... Something went wrong.");

                }

            }
        });
    });


</script>
