<?php
$page = "print";
include(__DIR__ . "/../header.php");
?>

<div>
    <form id="printForm" action="" method="POST">
        <div class="mb-3 mt-3 border-bottom border-black pb-3">
            <label for="fileInput1" class="form-label">Chọn file từ kho lưu trữ cá nhân:</label>
            <input type="text" class="form-control w-50 border-black" placeholder="*.pdf, *.doc" id="fileInput1">
            <div class="fst-italic my-2">hoặc</div>
            <div class="mb-3">
                <label for="fileInput2" class="form-label">Chọn file từ máy của bạn:</label>
                <input class="form-control w-50 border-black" type="file" id="fileInput2">
            </div>
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Trang in:</label>
            <input type="password" class="form-control border-black w-50" id="pages" placeholder="Example: 1,2,3-7">
        </div>
        <div class="mb-3">
            <label class="form-label">Khổ giấy:</label>
            <select class="form-select w-25 border-black" aria-label="Default select example">
                <option value="a3">A3</option>
                <option selected value="a4">A4</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Số trang một mặt:</label>
            <select class="form-select w-25 border-black" aria-label="Default select example">
                <option selected value="a3">1</option>
                <option value="a4">2</option>
                <option value="a4">4</option>
            </select>
        </div>
        <div class="mb-3 form-check">
            <input type="radio" class="border-black" id="1side" name="pageSides">
            <label class="form-check-label me-3" for="1side">In một mặt</label>
            <input type="radio" class="border-black" id="2side" name="pageSides">
            <label class="form-check-label" for="2side">In hai mặt</label>
        </div>
        <button type="submit" class="btn border-black hover-bg-gray btn-test">In tài liệu</button>
    </form>
    <div class="informText c-red"></div>
</div>

<script>
    document.getElementById('printForm').addEventListener('submit', function(event) {
        event.preventDefault();
    });
</script>
<?php
include(__DIR__ . "/../footer.php");
?>