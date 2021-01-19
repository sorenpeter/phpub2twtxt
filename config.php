<?php header('Content-type: text/plain; charset=utf-8'); 
// sp@darch.dk 2020-01-19

// Name (and path) of you twtxt.txt file
$txt_file = '../twtxt.txt'; 

$new_post = filter_input(INPUT_POST, 'new_post', FILTER_SANITIZE_SPECIAL_CHARS);

// verificar se title está preenchido
if($new_post) {
    $contents = file_get_contents($txt_file);
    $contents .= "\n" . date(DATE_RFC3339) . "\t" ;
    $contents .= "$new_post";

    file_put_contents($txt_file, $contents);

    header("Refresh:0; url=index.html");
    //header("Location: index.html");
    //header("Location: $txt_file");
    exit;
} else {
	//header("Location: index.html");
    echo "Opps something went wrong...\n\nCheck the error_log on the server";
    exit;
}
?>
