<?php
$page = "history";
include(__DIR__ . "/../header.php");

$files = [];
for ($i = 1; $i < 230; $i++) {
    $files[] = [$i,"file#" . $i . ".pdf", "01/01/2023", "printer#" . $i, "1"];
}

$itemsPerPage = 100;
$totalPages = ceil(count($files) / $itemsPerPage);
$current_page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$start = ($current_page - 1) * $itemsPerPage;
$end = $start + $itemsPerPage;
$filesToDisplay = array_slice($files, $start, $itemsPerPage);

?>
<link rel="stylesheet" href="./views/student/history/history.css">
<div class="container ms-0 mt-2 history-table">
    <!-- <form id="searchForm" action="" method="POST">
        <input placeholder="Tên file">
        <button class="bgc-white border-1 btn-test hover-bg-gray">Tìm kiếm</button>
    </form> -->
    <section class="table__header">
        <h1>Lịch sử in</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
            <img src="./views/student/history/img/search.png" alt="">
        </div>
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
                    <th> id <span class="icon-arrow active">&UpArrow;</span></th>
                    <th> tên <span class="icon-arrow">&UpArrow;</span></th>
                    <th> ngày <span class="icon-arrow">&UpArrow;</span></th>
                    <th> máy <span class="icon-arrow">&UpArrow;</span></th>
                    <th> số bản <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            <thead>
            <tbody>
                <?php
                foreach ($filesToDisplay as $file) {
                    echo '
                    <tr class="hover-bg-gray" >
                        <td>' . $file[0] . '</td>
                        <td>' . $file[1] . '</td>
                        <td>' . $file[2] . '</td>
                        <td>' . $file[3] . '</td>
                        <td>' . $file[4] . '</td>
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
    </section>

</div>
<div class="pagination history-pages">
    <?php
        $prev = "<";
        // Hiển thị nút trang trước đó nếu $current_page > 1
        if ($current_page > 1) {
            echo '<a class="text-decoration-none text-black px-2 hover-bold fw-bold" href="?page=student&controller=history&action=index&p=' . ($current_page - 1) . '">' . $prev .  '</a>';
        }
    ?>


    <?php
    // Hiển thị các nút trang
    for ($i = 1; $i <= $totalPages; $i++) {
        echo '<a class="text-decoration-none text-black px-2 hover-bold';
        if ($current_page == $i) echo ' fw-bold';
        echo '" href="?page=student&controller=history&action=index&p=' . $i . '">' . $i . '</a>';
    }
    ?>
    
    <?php
// Hiển thị nút trang tiếp theo nếu $current_page < $totalPages
        if ($current_page < $totalPages) {
            $next = ">";
            echo '<a class="text-decoration-none text-black px-2 hover-bold fw-bold" href="?page=student&controller=history&action=index&p=' . ($current_page + 1) . '">' . $next .  '</a>';
        }
    ?>
</div>
<script src="./views/student/history/history.js"></script>
<!-- <script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
    });
</script> -->

<?php
include(__DIR__ . "/../footer.php");
?>