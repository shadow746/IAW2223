<?php
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename=Ejer1_IntranetApache.pdf");

// The PDF source is in original.pdf
readfile("Ejer1_IntranetApache.pdf");
?>
