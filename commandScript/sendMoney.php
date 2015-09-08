<?php
$command = "\n".'screen -S minecraft -p 0 -X stuff "`printf "eco give LeonardoPiero 5 \r"`";';
file_put_contents('commandScript.sh', $command, FILE_APPEND | LOCK_EX);
?>