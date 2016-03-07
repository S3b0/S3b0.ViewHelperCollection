<?php
namespace S3b0\ViewHelperCollection\ViewHelpers;


use TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * GetArrayElementViewHelper
 *
 * @package Ecom\Terminal\ViewHelpers
 */
class GetArrayElementViewHelper extends AbstractViewHelper
{

    /**
     * @param mixed $key
     * @param array $array
     *
     * @return string
     */
    public function render($key, array $array = [])
    {
        return sizeof($array) && array_key_exists($key, $array) ? $array[$key] : '';
    }
}