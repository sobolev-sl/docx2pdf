<?php

namespace Convertor\Doc;

use Convertor\Convertor;

/**
 * Class DocConvertor
 * @package Convertor\Doc
 */
class DocConvertor implements Convertor
{
    /**
     * @var string $out_dir
     */
    private $out_dir;

    /**
     * DocConvertor constructor.
     * @param string $out_dir
     */
    public function __construct(string $out_dir = 'upload')
    {
        $this->out_dir = $out_dir;
    }

    /**
     * @param string $srcfile
     * @param string $dstfile
     */
    public function convert(string $srcfile, string $dstfile = '')
    {
        // Start command:
        // Convert option:
        // --convert-to pdf
        $exec_command = '/usr/bin/libreoffice --convert-to pdf';

        // Add source file
        $exec_command .= ' ' . $srcfile;

        // Add output dir
        if(!empty($this->out_dir))
            $exec_command .= ' --outdir ' . $this->out_dir;

        exec($exec_command);
    }
}