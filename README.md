###Description
Generates a simple Wordpress theme shell including common files and a proposed directory structure.

###Usage
Run the script and pass in the path to the theme folder.

#####Example: 
```
php generate-wp-theme-shell /Users/you/developer/wordpress/wp-content/themes/yourtheme
```

###Generated Structure

####Directories
```
/inc
/lib
/css
/img
/js
/page-templates
/languages
```

#####/inc
Place files you wish to include in your other files here.

#####/lib
Place external libraries here

#####/css
Place css files here

#####/img
Place images here

#####/js
Place javascript files here

#####/page-templates
Place page template files here

#####/languages
Place language files here

####Files
```
footer.php
header.php
index.php
functions.php
front-page.php
page.php
sidebar.php
archive.php
style.css
```
For more information about what goes in these files go to:
http://codex.wordpress.org/Theme_Development#Template_File_Checklist
