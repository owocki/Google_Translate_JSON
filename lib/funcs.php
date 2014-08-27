<?php

function should_skip_key($key){
    $ignoreKeys = explode(',',JSON_KEYS_TO_IGNORE);
    foreach($ignoreKeys as $ignoreKey){
        if(strstr($key, $ignoreKey))
            return true;
    }
    return false;
}

function array_translate($gt,$input){
    $result = array();
    if(is_array($input))
        foreach($input as $key => $val){
            if(should_skip_key($key))
                $result[$key] = $val;
            else
                $result[$key] = array_translate($gt,$val);

        }
    else{
        $result = $gt->translateSingle($input);
    }

    return $result;
}

?>
