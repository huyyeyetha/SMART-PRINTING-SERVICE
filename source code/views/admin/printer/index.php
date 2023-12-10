<?php
$page = "printer";
include(__DIR__ . "/../header.php");

$number_of_printer = 6;
$temp = $number_of_printer + 1;
$printer = [];
for ($i = 1; $i < $temp; $i++) {
    $printer[] = [$i, "printer#" . $i, "H" . mt_rand(1, 3)];
}

$itemsPerPage = 10;
$totalPages = ceil(count($printer) / $itemsPerPage);
$current_page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$start = ($current_page - 1) * $itemsPerPage;
$end = $start + $itemsPerPage;
$printerToDisplay = array_slice($printer, $start, $itemsPerPage);

?>
<link rel="stylesheet" href="./views/admin/printer/printer.css">
<div class="container ms-0 mt-2 history-table">
    <!-- ADD PRINTER FORM -->
    <div class="row justify-content-md-center" id="add-printer-form">
        <div class="col-6">
            <form>
                <div class="mb-3">
                    <label for="printer-id" class="form-label">ID máy in</label>
                    <input type="text" class="form-control" id="printer-id">
                </div>
                <div class="mb-3">
                    <label for="printer-name" class="form-label">Tên máy in</label>
                    <input type="text" class="form-control" id="printer-name">
                </div>
                <div class="mb-3">
                    <label for="building-name" class="form-label">Tòa</label>
                    <input type="text" class="form-control" id="building-name">
                </div>
                <button type="button" class="btn btn-primary" onclick="add_printer()">Submit</button>
                <button type="button" class="btn btn-warning" onclick="add_printer_form_close()">Cancel</button>
            </form>
        </div>
    </div>
    <div id="main-screen">
        <section class="table__header">
            <h1 style="font-size: 1.5rem;">Điều khiển máy in</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="./views/student/history/img/search.png" alt="">
            </div>
            <button class="btn btn-info" onclick="add_printer_form_open()">Thêm máy in</button>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="./views/student/history/img/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="./views/student/history/img/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="./views/student/history/img/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="./views/student/history/img/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <div class="informText c-red"></div>

        <section class="table__body" id="customers_table">
            <table>
                <thead>
                    <tr class="border-bottom border-black">
                        <th> Id <span class="icon-arrow active">&UpArrow;</span></th>
                        <th> Máy in <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Tòa <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Trạng thái <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hành động <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                    <thead>
                    <tbody id="list-of-printer">
                        <?php
                        foreach ($printerToDisplay as $printer) {
                            echo '
                        <tr class="hover-bg-gray" >
                            <td>' . $printer[0] . '</td>
                            <td>' . $printer[1] . '</td>
                            <td>' . $printer[2] . '</td>
                            <td>' .
                                '<input type="checkbox" class="btn-check" id="cbprinter' . $printer[0] . '" autocomplete="off" checked>
                            <label class="btn btn-outline-primary" id="lbprinter' . $printer[0] . '" for="cbprinter' . $printer[0] . '">Bật</label>
                            </td>
                            <td><button class="btn btn-danger" id="delete-printer-' . $printer[0] . '">Xóa</button></td>
                        </tr>';
                        }
                        ?>
                    </tbody>
            </table>
        </section>
    </div>

</div>
<div class="pagination history-pages">
    <?php
    $prev = "<";
    // Hiển thị nút trang trước đó nếu $current_page > 1
    if ($current_page > 1) {
        echo '<a class="text-decoration-none text-black px-2 hover-bold fw-bold" href="?page=admin&controller=printer&action=index&p=' . ($current_page - 1) . '">' . $prev .  '</a>';
    }
    ?>


    <?php
    // Hiển thị các nút trang
    for ($i = 1; $i <= $totalPages; $i++) {
        echo '<a class="text-decoration-none text-black px-2 hover-bold';
        if ($current_page == $i) echo ' fw-bold';
        echo '" href="?page=admin&controller=printer&action=index&p=' . $i . '">' . $i . '</a>';
    }
    ?>

    <?php
    // Hiển thị nút trang tiếp theo nếu $current_page < $totalPages
    if ($current_page < $totalPages) {
        $next = ">";
        echo '<a class="text-decoration-none text-black px-2 hover-bold fw-bold" href="?page=admin&controller=printer&action=index&p=' . ($current_page + 1) . '">' . $next .  '</a>';
    }
    ?>
</div>
<script src="./views/admin/printer/printer.js"></script>
<!-- <script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
    });
</script> -->

<?php
include(__DIR__ . "/../footer.php");
?>