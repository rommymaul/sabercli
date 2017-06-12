<?php
//installing packgages
echo "installing packgages\n";
sleep(1);
system("apt install wget curl jhead vim unzip -y");
echo "\n";

//new path of saber v.1
$new = "/data/data/com.termux/files/usr/bin/";

//copying saber v.1 to new path
echo "\n copying saber\n";
sleep(1);
system("cp saber $new");

//checking if saber v.1 already copied
echo "\n checking saber\n";
sleep(1);
echo (is_file('/data/data/com.termux/files/usr/bin/saber')) ? "success to install,\n run the tools with command saber\n" : "failed to install\n";
