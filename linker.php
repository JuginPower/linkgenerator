<?php

function cleaner($roughdata) {

    $new_assoc = array();
    $counter = 0;

    foreach (array_keys($roughdata) as $datakey) {

        $newkey = "\{" + strval($counter) + "\}";
        $item = $roughdata[$datakey];
        $op_array = array($newkey => $item);
        array_push($new_assoc, $op_array);
        $counter ++;
    }

    return $new_assoc;
}

function link_generator($string, $data) {
    
    $progress = array();
    $clean_data = cleaner($data);

}

?>