<body style="margin:20;padding:0">
<?php

include("header.php");

include("$lib_path/view-tabs.php");

echo "<div class='container'><div id='tabs'><ul><li><a href='#tab-source'>Source</a></li></ul><div id='tab-render'></div><div id='tab-source'> <table class='TFtable';>";
foreach($contents as $n) {
        list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

        if(preg_match('/\[\?(.+?)\]/', $v, $matches)) {
                $v = "<a href=$matches[1]>$v</a>";
        }

        else if(preg_match('/\[(.+?)\]/', $v, $matches)) {
                $v = "<a href=$_SERVER[PHP_SELF]?action=source&file=$matches[1]>$v</a>";
        }

        echo "<tr id=$k>";
        if(isset($v)) { echo "<th height='10' style='text-align:right'>$k</th><td width='20'></td><td>$v</td>"; }
        else { echo "<th height='10' style='text-align:right'></th><td width='20'></td><td>$k</td>"; }
        echo "</tr>";
}

?>
</table>

</div>


</div>




</div></div>

</div>
