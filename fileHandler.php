<?php

if (isset($_GET['files'])) {
    foreach ($_FILES as $file) {
        $fileContents = file_get_contents($file['tmp_name']);
        $arr = array_map('trim', explode('\r\n', $fileContents));
//        var_dump($arr);
        // if the file ends with '\r\n', the last element of the array will be empty.  remove it
//        if(is_empty(array_slice($arr, -1))) {
//            echo 'y';
//        }
        $lastSlice = array_slice($arr, -1);
        var_dump($lastSlice);
        echo $lastSlice[0];
        if(empty($lastSlice)){
            echo 'y';
        } else {
            echo 'n';
        }
        
        

//        if(strpos(strrev('\r\n'), strrev($fileContents)) === 0) {
//            echo 'Yes';
//        }
//        if (substr($fileContents, -4, 0) == '\r\n') {
//            print 'y';
//        } else {
//            print 'n';
//        }
//        $arr = array_map('trim', explode('\r\n', $fileContents));
//        var_dump($arr);
////        $fileContents = str_replace(' ', '', $fileContents);
////        $newArray = array();
//        $arr = explode('\r\n', $fileContents);
////        var_dump($arr);
//        foreach ($arr as $a) {
////            $x = explode(',', $a);
//            $a = trim($a);
//            var_dump($a);
////            $newArray[] = $x;
//        }
////        foreach($newArray as $n) {
////            echo '1: ' . var_dump($n);
////        }
////        $csv = str_getcsv($file_contents);
////        var_dump($csv);
////        foreach($csv as $line){
////            echo $line;
////        }
    }
}
?>
