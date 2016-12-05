<?php
class CsvActivity {

  public function writeCsv($formdata){
    $fp = fopen("formdata.csv","a");
    if($fp)
    {
      fwrite($fp,$formdata."\n");
      fclose($fp);
    }
  }

    public function readCsv(){
        $array = file("class/formdata.csv") or die("Unable to open file!");
        foreach ($array as $key => $value) {
          # code...
          $array[$key] = explode(',',$value);
        }
        return $array;
    }
}
?>
