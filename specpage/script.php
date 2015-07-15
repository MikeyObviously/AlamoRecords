<?php

error_reporting(0);
require_once 'excel_reader2.php';

$fileext=substr( $_FILES["file"]["name"],-4); 

if ($fileext != ".xls")
{

echo "<p style='margin-top: 50px; font-size:20px; font-family: arial, sans-serif; text-align: center;'>This script only works with Excel 2003 files.  Resave your file and try again.<p style='text-align:center;'><a href='index.php'>BACK</a>";
} 

else{
$data = new Spreadsheet_Excel_Reader($_FILES["file"]["name"]);
  


$thisdir=getcwd();											  

mkdir($thisdir . "/specpages", 0777);
chdir("specpages");

$zip = new ZipArchive;
$res = $zip->open('specpages.zip', ZipArchive::CREATE);


for ($i = 1; $i <= $data->rowcount($sheet_index=0); $i++){


$filename = $data->val($i, 1) . ".htm";

$fh = fopen($filename, 'w');

$towrite = "<html><body><div id='tabs-1'>" . $data->val($i,2) ."</div><div id='tabs-2'>" . $data->val($i,3) . "</div></body></html>"; 


fwrite ($fh, $towrite);
fclose($fh);

$zip->addFile($filename);


}

$zip->close();




if (file_exists('specpages.zip')) {
     header("Cache-Control: public");
     header("Content-Description: File Transfer");
     header("Content-Disposition: attachment; filename='specpages.zip'");
     header("Content-Type: application/zip");
     header("Content-Transfer-Encoding: binary");
     header('Content-Length: ' . filesize('specpages.zip'));

     // Read the file from disk
     readfile('specpages.zip');
	 
	 chdir("../");
	 delete_directory("specpages"); 
}
//ends else clause
}

function delete_directory($dirname) {
   if (is_dir($dirname))
      $dir_handle = opendir($dirname);
   if (!$dir_handle)
      return false;
   while($file = readdir($dir_handle)) {
      if ($file != "." && $file != "..") {
         if (!is_dir($dirname."/".$file))
            unlink($dirname."/".$file);
         else
            delete_directory($dirname.'/'.$file);    
      }
   }
   closedir($dir_handle);
   rmdir($dirname);
   return true;
}


?>