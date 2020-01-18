<?php
    header('Location: /wtf/' . preg_split("/\s+/", trim(shell_exec("ls ./wtf")))[0]);
    exit;
?>