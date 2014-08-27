<?php
//includes
include('lib/index.php');

//break apart arguments array passed to script
$input_file_path = $argv[1];
$from_language = $argv[2];
$to_language = $argv[3];

//Google Translate class instansiation
$gt = new gtranslate;
$gt->setOptions(array(
	'key' => GOOGLE_TRANSLATE_KEY,
	'target' => $to_language,
	'source' => $from_language
	));

//read input file
//IMPORTANT -- Any newlines in JSON contents will break the json_decoder!
$input_file = file_get_contents($input_file_path);
$input_array = json_decode($input_file,true);
$translated_array = array_translate($gt,$input_array);
$translated_json = json_encode($translated_array,JSON_PRETTY_PRINT);

//output the result
echo $translated_json;

?>
