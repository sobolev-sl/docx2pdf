<?php

namespace Convertor\Docx;

use Convertor\Convertor;
use Gears\Pdf;

/**
 * Class DocxConvertor
 * @package Convertor\Docx
 */
class DocxConvertor implements Convertor
{
    /**
     * DocxConvertor constructor.
     */
    public function __construct() {
    }

    /**
     * @param string $srcfile
     * @param string $dstfile
     * @return mixed
     */
    public function convert(string $srcfile, string $dstfile)
    {
        return Pdf::convert($srcfile, $dstfile);
    }
}