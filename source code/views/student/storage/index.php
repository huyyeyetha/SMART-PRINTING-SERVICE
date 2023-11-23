<?php
$page = "storage";
include(__DIR__ . "/../header.php");

$files = [];
for ($i = 0; $i < 230; $i++) {
    $files[] = ["file#" . $i . ".pdf", "01/01/2023", "1 KB"];
}

$itemsPerPage = 50;
$totalPages = ceil(count($files) / $itemsPerPage);
$current_page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$start = ($current_page - 1) * $itemsPerPage;
$end = $start + $itemsPerPage;
$filesToDisplay = array_slice($files, $start, $itemsPerPage);

?>

<div class="container ms-0 mt-2">
    <form id="searchForm" action="" method="POST">
        <input placeholder="Tên file">
        <button class="bgc-white border-1 btn-test hover-bg-gray">Tìm kiếm</button>
    </form>
    <div class="informText c-red"></div>
    <table>
        <tr class="border-bottom border-black">
            <td class="ps-1 pe-5 col-5">Tên file</td>
            <td class="pe-5">Ngày đăng tải</td>
            <td class="pe-5">Kích thước</td>
            <td class="pe-5">Tùy chọn</td>
        </tr>
        <?php
        foreach ($filesToDisplay as $file) {
            echo '
            <tr class="hover-bg-gray">
                <td>' . $file[0] . '</td>
                <td>' . $file[1] . '</td>
                <td>' . $file[2] . '</td>
                <td>
                    <a class="fst-italic px-1 hover-bold text-decoration-none text-black">Đổi tên</a>
                    <a class="fst-italic px-1 hover-bold text-decoration-none text-black">Xóa</a>
                </td>
            </tr>
            ';
        }
        ?>
    </table>

    <div class="pagination">
        <?php
        // Hiển thị các nút trang
        for ($i = 1; $i <= $totalPages; $i++) {
            echo '<a class="text-decoration-none text-black px-2 hover-bold';
            if ($current_page == $i) echo ' fw-bold';
            echo '" href="?page=student&controller=storage&action=index&p=' . $i . '">' . $i . '</a>';
        }
        ?>
    </div>
</div>
<script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
    });
</script>
<?php
include(__DIR__ . "/../footer.php");
?>