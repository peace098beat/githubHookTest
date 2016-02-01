<?php

exec('cd /home/fififactory/www/githubHookTest');
exec('git --git-dir=.git pull');
exec('echo "SUSSSS" > fifi.log');
echo 'fifi';
?>