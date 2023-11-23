<?php
$page = "account";
include(__DIR__ . "/../header.php");
?>

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-lg-2">
            Mã số sinh viên:
        </div>
        <div class="col">
            ***student.id***
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Họ và tên:
        </div>
        <div class="col">
            ***student.name***
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Lượng giấy sở hữu:
        </div>
        <div class="col">
            ***paper.amount***
        </div>
    </div>
    <div class="row">
        <div class="col">
            ***các thông tin khác***
        </div>
    </div>
</div>

<?php
include(__DIR__ . "/../footer.php");
?>