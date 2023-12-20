<?php
$page = "print";
include(__DIR__ . "/../header.php");
?>

<div>
    <form id="printForm" action="" method="POST">
        <div class="mb-3 mt-3 border-bottom border-black pb-3">
            <div class="mb-3">
                <label for="fileInput2" class="form-label">Chọn file từ máy của bạn:</label>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7">
                            <input class="form-control w-100 border-black" type="file" id="fileInput2" accept=".doc,.docx,.pdf">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 mt-3 border-bottom border-black pb-3">
            <div class="mb-3">
                <label for="fileInput2" class="form-label">Chọn máy in:</label>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7 border">
                            <div class="fs-4" onclick="toggleChoose()" id="inform">Bạn chưa chọn máy in</div>
                            <div class=" position-relative top-0" id="choosePrinter">
                                <div class="fs-4">
                                    <input type="text" class="fs-5 fst-italic ps-4" placeholder="tìm kiếm ..." id="sortPrinter">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">Vị trí</div>
                                        <div class="col-4">Đang bận</div>
                                        <div class="col-4">Lượng giấy</div>
                                    </div>
                                </div>
                                <div class="container pe-0" style="max-height:200px; overflow: auto; overflow-x:hidden" id="printerContainer">

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
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
            <input type="radio" class="border-black" id="2side" name="pageSides" checked>
            <label class="form-check-label" for="2side">In hai mặt</label>
        </div>
        <button type="submit" class="btn border-black hover-bg-gray btn-test">In tài liệu</button>
    </form>
    <div class="informText c-red"></div>
</div>

<script>
    var printers = [
        ["101H1", "3m", "456"],
        ["102H2", "0m", "3411"],
        ["103H3", "5m", "4234"],
        ["104H4", "2m", "3556"],
        ["105H5", "1m", "4562"],
        ["106H6", "4m", "6783"],
        ["101A1", "5m", "345"],
        ["102A2", "2m", "155"],
        ["103A3", "0m", "1556"],
        ["104A4", "1m", "743"],
        ["105A5", "4m", "3523"],
        ["106A6", "0m", "654"],
    ]
    document.getElementById('printForm').addEventListener('submit', function(event) {
        event.preventDefault();
    });

    var inputElement = document.getElementById("sortPrinter");
    var pContainer = document.getElementById("printerContainer");

    for (var i = 0; i < printers.length; i++) {
        createRow(printers[i]);
    }

    function createRow(printerData) {
        var arow = document.createElement("div");
        arow.classList.add("row", "hover-bg-gray");

        var acol1 = document.createElement("div");
        acol1.classList.add("col");

        var acol2 = document.createElement("div");
        acol2.classList.add("col");

        var acol3 = document.createElement("div");
        acol3.classList.add("col");

        acol1.innerHTML = printerData[0];
        acol2.innerHTML = printerData[1];
        acol3.innerHTML = printerData[2];

        arow.addEventListener("click", function() {
            document.getElementById("inform").innerHTML = printerData[0];
            toggleChoose()
        });

        arow.appendChild(acol1);
        arow.appendChild(acol2);
        arow.appendChild(acol3);

        pContainer.appendChild(arow);
    }

    function toggleChoose() {
        var choose = document.getElementById("choosePrinter");
        choose.classList.toggle("d-none")
    }


    inputElement.addEventListener("input", function(event) {
        var inputValue = event.target.value;
        pContainer.innerHTML = "";


        for (var i of printers) {
            if (i[0].includes(inputValue)) {
                createRow(i);
            }
        }

        function createRow(printerData) {
            var arow = document.createElement("div");
            arow.classList.add("row", "hover-bg-gray");

            var acol1 = document.createElement("div");
            acol1.classList.add("col");

            var acol2 = document.createElement("div");
            acol2.classList.add("col");

            var acol3 = document.createElement("div");
            acol3.classList.add("col");

            acol1.innerHTML = printerData[0];
            acol2.innerHTML = printerData[1];
            acol3.innerHTML = printerData[2];

            arow.addEventListener("click", function() {
                document.getElementById("inform").innerHTML = printerData[0];
                toggleChoose();
            });

            arow.appendChild(acol1);
            arow.appendChild(acol2);
            arow.appendChild(acol3);

            pContainer.appendChild(arow);
        }

    });
</script>
<?php
include(__DIR__ . "/../footer.php");
?>