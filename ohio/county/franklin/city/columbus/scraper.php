<?php



// click link listed at http://columbuspolice.org/bulkreports/
// and then find all a href links listed on that page

/* download each file */

// file get content
$homepage = file_get_contents('http://columbuspolice.org/bulkreports/Electronic%20Reports%2012-27-2017/170584765.pdf');
echo $homepage;

