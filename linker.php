<?php

function cleaner($roughdata) {

    $new_assoc = array();
    $counter = 0;

    foreach (array_keys($roughdata) as $datakey) {

        $newkey = "\{" + strval($counter) + "\}";
        $items = clone $roughdata[$datakey];
        $op_array = array($newkey => $items);
        array_push($new_assoc, $op_array);
        $counter ++;
    }

    return $new_assoc;
}

function link_generator($string, $data) {
    
    $progress_array = array();
    $clean_data = cleaner($data);

    foreach (array_keys($clean_data) as $cdkey) {

        $values_list = clone $clean_data[$cdkey];

        if (!empty($progress_array)) {

            foreach ($values_list as $val) {
                $progress_string = array_shift($progress_array);
                $further_progress_string = preg_replace($cdkey, strval($val), $progress_string);
                array_push($progress_array, $further_progress_string);

            }
        } else {
            foreach ($values_list as $val) {

                $formated_string = preg_replace($cdkey, strval($val), $string);
                array_push($progress_array, $formated_string);
            }
        }
    }
    return $progress_array;
}

?>