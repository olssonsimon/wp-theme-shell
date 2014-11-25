<?php

$path  = $argv[1];

// dirs
$dirs = array(
  "inc/",
  "lib/",
  "css/",
  "img/",
  "js/",
  "page-templates/",
  "languages/"
);

// files
$files  = array(
  "footer.php",
  "header.php",
  "index.php",
  "functions.php",
  "front-page.php",
  "page.php",
  "style.css"
);

// generate directories
foreach ($dirs as $dir):
  mkdir($path . '/' . $dir, 0700) or die("Unable to create directory" . $dir . "\n");
endforeach;

// generate files
foreach ($files as $file):
  $f = fopen($path . '/' . $file, "w") or die("Unable to create file" . $file . "\n");

  switch ($file):
    case 'functions.php':
      fwrite($f, "<?php");
      break;

    case 'style.css':
      fwrite($f, "/*\nTheme Name: \nTheme URI: -\nDescription: A brief description.\nVersion: 1.0\nAuthor: \nAuthor URI: \n*/\n");
      break;

    case 'footer.php':
      break;

    case 'header.php':
      break;
    
    default:
      fwrite($f, "<?php get_header(); ?>\n\n<?php get_footer(); ?>");
      break;
  endswitch;
  
  fclose($f);
endforeach;

echo "Created wordpress theme shell at: " . $path . "\n";
echo "Happy coding!" . "\n";