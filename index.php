
<?php
$html = '
<h1><a name="top"></a>mPDF</h1>
<h2>Basic HTML Example</h2>
This file demonstrates most of the HTML elements.
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
';



$template = 'bootstrape';

// pdf lib
require_once 'lib/mpdf/mpdf.php';

//templt
include_once 'templates/'.$template.'/template.php';

?>