<?php
    function View($page, $data = "", $list = []) {
        require VIEW."/header.php";
        require VIEW."/$page.php";
        require VIEW."/footer.php";
        exit;
    }

    function Viewstatus($page, $data = "", $list = []) {
        require VIEW."/$page.php";
        exit;
    }

    function go($msg, $url) {
        echo "<script>";
        echo "alert('$msg');";
        echo "location.href = '{$url}';";
        echo "</script>";
        exit;
    }