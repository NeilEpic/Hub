<?php
$toWrite = $_GET["Content"];
$Password = $_GET["Password"];
if(!isset($toWrite,$Password)) {
echo"Buy Froggo Hub for $3!";
return;
}
function AppendFile($file, $content) {
if(!$file or !$content)return "Include the 2 Arguments please! | AppendFile('filename/directory','content to add inside of the file')";
if (!file_exists($file)){
return "File does not exist!";
}
else
{
if(file_put_contents($file, $content, FILE_APPEND)) {
return "Success";
}
else
{
return "Error, could not add the content inside of the file!";
}
}
}

function OverwriteFile($file, $content) {
if(!$file or !$content)return "Include the 2 Arguments please! | OverwriteFile('filename/directory','content to replace inside of the file')";
if (!file_exists($file)){
return "File does not exist!";
}
else
{
if(file_put_contents($file, $content)) {
return "Success";
}
else
{
return "Error, could not replace the file content with the content provided in arugment 2!";
}
}
}
if($Password and $Password==="xD") { $toWrite = $toWrite."\n";
echo"Tried to add to the file, responce: ".AppendFile("wl.txt", $toWrite);
return;
}
else
{
echo"Buy Froggo Hub for $3!";
return;
}
?>
