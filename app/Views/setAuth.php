<?php

foreach ($data as $row) {
    echo $row->username." <a href='".$row->urlSetting."'>".$row->caption."</a><br>";
}

?>