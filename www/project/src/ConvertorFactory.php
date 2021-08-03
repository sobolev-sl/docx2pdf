<?php


namespace Convertor;

use Convertor\Doc\DocConvertor;
use Convertor\Docx\DocxConvertor;

/**
 * Class ConvertorFactory
 * @package Convertor
 */
class ConvertorFactory
{
    /**
     * ConvertorFactory constructor.
     */
    public function __construct()
    {}

    /**
     * @param string $sourceFile
     * @return Convertor
     */
    public static function factory(string $sourceFile = ''): Convertor
    {
        $file = new \SplFileInfo($sourceFile);

        $ext = $file->getExtension();

        switch ($ext) {
            case 'docx':
                return new DocxConvertor();
            case 'doc':
                return new DocConvertor();
        }
    }
}