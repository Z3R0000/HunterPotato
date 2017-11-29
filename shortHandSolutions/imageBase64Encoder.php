<?php
function imgEncode($img_file){
//Getting Image and Encoding
$imgData = base64_encode(file_get_contents($img_file))
//Return ing with Data type and mime type
$src = 'data: '.mime_content_type($img_file).';base64,'.$imgData;
return $src;
}

//outputs the image
echo '<img src="'.imgEncode('https://raw.githubusercontent.com/po7a7o/po7a7o.github.io/master/abe1459747e0ac9e03c2aa128180d48e.jpg').'">';
 ?>