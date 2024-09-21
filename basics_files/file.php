<?php

echo __FILE__."<br>"; 
echo __LINE__."<br>"; 
echo __DIR__."<br>"; 

if(file_exists("file.php"))
{
    echo "Ya the file exist<br>";
}
//OR
if(file_exists(__FILE__))
{
    echo "Ya the file exist<br>";
}
if(is_file(__FILE__))
{
    echo "Ya this is a file <br>";
}
else 
{
    echo "NO <br>";
}
if(is_dir(__DIR__))
{
    echo "ya this is a dir <br>";
}
else 
{
    echo "no this is not a dir <br>";
}
echo is_file(__FILE__) ? "yes":"NO";












?>