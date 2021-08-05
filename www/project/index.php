<?php

require __DIR__ . '/vendor/autoload.php';

use Convertor\ConvertorFactory;

/**/
$test_files = [
	'files/document0.docx',
	'files/document1.doc',
	'files/document2.docx',
	'files/document3.doc',
	'files/document4.docx',
	'files/document5.doc',
        'files/document6.docx'
];

$convert_path = 'upload';

// Test time line
$start_time = microtime(true);

for($i = 0; $i < count($test_files); $i++) {
    $srcFile = $test_files[$i];
    $dstFile = $convert_path . '/document' . $i . '.pdf';

    $convertor = ConvertorFactory::factory($srcFile);

    $convertor->convert($srcFile, $dstFile);

}

// Test time line
echo "Время работы" . (microtime(true) - $start_time);
