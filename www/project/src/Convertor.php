<?php

namespace Convertor;

use SplFileInfo;

/**
 * Interface Convertor
 * @package Convertor
 */
interface Convertor
{
    /**
     * @param string $srcfile
     * @param string $dstfile
     * @return mixed
     */
    public function convert(string $srcfile, string $dstfile);
}