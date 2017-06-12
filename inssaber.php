<?php

system("apt install wget curl jhead vim unzip -y");

$new = "/data/data/com.termux/files/usr/bin/";
$new1 = "/data/data/com.termux/files/usr/bin/sabercli";

system("cp saber $new");
system("chmod +x $new1");

echo (is_file('/data/data/com.termux/files/usr/bin/sabercli')) ? "success to install,\n run the tools with command saber\n" : "failed to install\n";
