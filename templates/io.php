<?php
echo $args['name']." from include";
echo shell_exec ('cat /sys/class/thermal/thermal_zone0/temp');