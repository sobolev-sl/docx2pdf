<?php

require __DIR__ . '/vendor/autoload.php';

if(Gears\Pdf::convert('document.docx', 'document_docx.pdf'))
	echo "Success converted";
