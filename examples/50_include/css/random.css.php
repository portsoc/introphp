<?php
header("Content-type: text/css");

function rf() {
    return dechex( mt_rand( 0, 15 ));
}

function rcol() {
    echo "#".rf().rf().rf().rf().rf().rf();
}
?>

body {
	background-color: <?php rcol(); ?>;
}
header, footer, nav, article, section, aside {
	color: white;
}
footer, header {
	background-color: <?php rcol(); ?>;
}
nav {
	background-color: <?php rcol(); ?>;
}
article {
	background-color: <?php rcol(); ?>;
}
section {
	background-color: <?php rcol(); ?>;
}
aside {
	background-color: <?php rcol(); ?>;
}
