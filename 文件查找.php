<?php
$dir="/Applications/XAMPP/htdocs/phptest";
readfiledir($dir,$dirnum,$filenum);
$dirnum=0;
$filenum=0;
function readfiledir($dir,&$dirnum,&$filenum)
{
    echo $dir;
    if (!is_dir($dir)) {
        echo "123";
        return false;
    } else {
        echo "321";
        $handler = opendir($dir);

        while (($file = readdir($handler)) != flase) {
            if ($file == "." || $file == "..") {
                continue;
            }
            $file = $dir . DIRECTORY_SEPARATOR . $file;
            if (is_file($file)) {
                var_dump($file);
                $filenum++;
            } else if (is_dir($file)) {
                readfiledir($file,$dirnum,$filenum);
                $dirnum++;
            }
        }

    }

}
echo $dirnum."<br />";
echo $filenum."<br />";


?>