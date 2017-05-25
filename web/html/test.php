<?$filelist = array();
$str = '';
if ($handle = opendir(".")) {
  while ($entry = readdir($handle)) {
    //if($entry == '.' || $entry = '..') continue;
    $str += '"js/"$entry"'.',<br>';
    echo $entry."<br>";
  }
  closedir($handle);
}
?>