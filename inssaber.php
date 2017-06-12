<?php
//installing packgages
system("apt install wget curl jhead vim unzip -y \n");

//new path of saber v.1
$new = "/data/data/com.termux/files/usr/bin/";

//copying saber v.1 to new path
system("cp saber $new");

//checking if saber v.1 already copied
echo (is_file('/data/data/com.termux/files/usr/bin/saber')) ? "success to install,\n run the tools with command saber\n" : "failed to install\n";
