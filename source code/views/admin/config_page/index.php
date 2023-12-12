<?php
$page = "config_page";
include(__DIR__ . "/../header.php");
?>


<script>
    function showDiv(divId) {
        var divs = document.querySelectorAll('.menu-div');
        for (var i = 0; i < divs.length; i++) {
            divs[i].style.display = 'none';
        }
        document.getElementById(divId).style.display = 'block';
    }

    function initializePage() {
        var divs = document.querySelectorAll('.menu-div');
        for (var i = 0; i < divs.length; i++) {
            divs[i].style.display = 'none';
        }
        document.getElementById('menu').style.display = 'block';
    }
</script>
<style>
    #main-config-screen {
        background-image: url('link_den_hinh_nen_cua_ban');
        background-size: cover;
        margin-left: 200px;
        margin-top: 100px;
    }

    .menu-div {
        display: none;
    }
</style>

<div id="main-config-screen">
    <form class="col-6">
        <select class="form-select" onchange="showDiv(this.value)">
            <option selected>Chọn loại cấu hình</option>
            <option value="page_size">Kích thước giấy cho phép</option>
            <option value="default_numpage">Số lượng trang in mặc định</option>
            <option value="file_allow">Loại tập tin được in</option>
            <option value="oneside">Số trang trên một mặt</option>
        </select>
    </form>
    <div id="page_size" class="menu-div">
        <h2>Kích thước giấy cho phép</h2>
        <form id="answersForm" action="#" method="post">
            <input type="checkbox" id="A1" name="answers[]" value="A1">
            <label for="A1">A1</label><br>

            <input type="checkbox" id="A2" name="answers[]" value="A2">
            <label for="A2">A2</label><br>

            <input type="checkbox" id="A3" name="answers[]" value="A3">
            <label for="A3">A3</label><br>

            <input type="checkbox" id="A4" name="answers[]" value="A4" checked>
            <label for="A4">A4</label><br>

            <input type="button" class="btn btn-primary" value="Xác nhận" onclick="showSizepage()">
        </form>
        <div id="sizeselect"></div>
        <script>
            function showSizepage() {
                var sizeselect = [];
                var checkboxes = document.querySelectorAll('input[name="answers[]"]:checked');

                checkboxes.forEach(function(checkbox) {
                    sizeselect.push(checkbox.value);
                });
                var sizeselectDiv = document.getElementById("sizeselect");
                sizeselectDiv.innerHTML = "<p>Kích thước giấy cho phép: " + sizeselect.join(', ') + "</p>";
            }
        </script>
    </div>
    <div id="default_numpage" class="menu-div">
        <h2>Số lượng trang in mặc định cho mỗi sinh viên</h2>
        <input type="number" id="inputValue" value="100" onchange="showUpdatedValue()">
        <div id="displayValue"></div>
        <script>
            function showUpdatedValue() {
                var inputElement = document.getElementById("inputValue");
                var displayElement = document.getElementById("displayValue");
                var value = inputElement.value;
                displayElement.innerHTML = "<p>Số lượng trang A4: " + value + "</p>";
            }
            showUpdatedValue();
        </script>
    </div>
    <div id="file_allow" class="menu-div">
        <h2>Loại tập tin được in</h2>
        <form id="answersForm" action="#" method="post">
            <input type="checkbox" id="pdf" name="filetype[]" value=".pdf" checked>
            <label for="pdf">.pdf</label><br>

            <input type="checkbox" id="doc" name="filetype[]" value=".doc">
            <label for="doc">.doc .docx</label><br>

            <input type="checkbox" id="jpg" name="filetype[]" value=".jpg">
            <label for="jpg">.jpg</label><br>

            <input type="checkbox" id="xlsx" name="filetype[]" value=".xlsx">
            <label for="xlsx">.xlsx</label><br>

            <input type="button" class="btn btn-primary" value="Xác nhận" onclick="showFiletype()">
        </form>
        <div id="filetype"></div>
        <script>
            function showFiletype() {
                var filetype = [];
                var checkboxfile = document.querySelectorAll('input[name="filetype[]"]:checked');
                checkboxfile.forEach(function(checkbox) {
                    filetype.push(checkbox.value);
                });
                var filetypeDiv = document.getElementById("filetype");
                filetypeDiv.innerHTML = "<p>Loại tập tin được phép: " + filetype.join(', ') + "</p>";
            }
        </script>
    </div>
    <div id="oneside" class="menu-div">
        <h2>Số trang trên một mặt</h2>
        <form id="answersForm" action="#" method="post">
            <input type="checkbox" id="1" name="numpage[]" value="1" checked>
            <label for="1">1</label><br>

            <input type="checkbox" id="2" name="numpage[]" value="2">
            <label for="2">2</label><br>

            <input type="checkbox" id="3" name="numpage[]" value="3">
            <label for="3">3</label><br>

            <input type="checkbox" id="4" name="numpage[]" value="4">
            <label for="4">4</label><br>

            <input type="button" class="btn btn-primary" value="Xác nhận" onclick="shownum()">
        </form>
        <div id="numpage"></div>
        <script>
            function shownum() {
                var numpage = [];
                var checkboxnum = document.querySelectorAll('input[name="numpage[]"]:checked');
                checkboxnum.forEach(function(checkbox) {
                    numpage.push(checkbox.value);
                });
                var numpageDiv = document.getElementById("numpage");
                numpageDiv.innerHTML = "<p>Số lượng trang trên một mặt được phép: " + numpage.join(', ') + "</p>";
            }
        </script>
    </div>
</div>

</html>


<?php
include(__DIR__ . "/../footer.php");
?>