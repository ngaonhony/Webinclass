<?php
$sql_danhmucsp = "SELECT * FROM category";
$query_danhmucsp = mysqli_query($mysqli, $sql_danhmucsp);

// Mảng chứa các biểu tượng tương ứng với từng danh mục
$iconMap = array(
    '1' => 'fa-solid fa-mobile',
    '2' => 'fa fa-laptop',
    '3' => 'fa fa-headphones',
    // Thêm các cặp key-value cho các danh mục khác nếu cần
);
?>
<div class="sidebar">
    <nav>
        <ul class="listsidebar">
            <li><a href="index.php"><span><i class="fa-solid fa-bars" style="size: 10px;"></i> ALL CATEGORY</span></a></li>
            <?php
            while ($row_danhmucsp = mysqli_fetch_array($query_danhmucsp)) {
                ?>
                <li>
                    <a href="index.php?quanly=danhmucsp&id=<?php echo $row_danhmucsp['categoryid'] ?>&trang=1">
                        <span><i class="<?php echo $iconMap[$row_danhmucsp['categoryid']] ?>"></i><?php echo $row_danhmucsp['name'] ?></span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</div>

