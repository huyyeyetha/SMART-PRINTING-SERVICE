<?php
$page = "buy_paper";
include(__DIR__ . "/../header.php");
?>

<form class="col-6" method="POST">
    <h1 class="h3 mb-3 fw-normal">Mua thêm giấy</h1>

    <input class="form-control" type="text" value="Số lượng giấy còn lại của bạn: 23" readonly>
    <div class="form-floating">
        <input type="number" class="form-control" id="floatingInput" placeholder="Số lượng giấy">
        <label for="floatingInput">Số lượng giấy muốn mua</label>
    </div>

    <button class="btn btn-primary py-2 w-100" type="submit">Mua</button>
</form>

<?php
include(__DIR__ . "/../footer.php");
?>