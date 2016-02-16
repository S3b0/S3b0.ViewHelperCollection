<?php
namespace S3b0\ViewHelperCollection\ViewHelpers;


use TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * SanitizeOutputViewHelper
 *
 * @package Ecom\Terminal\ViewHelpers
 */
class SanitizeOutputViewHelper extends AbstractViewHelper
{
    /**
     * @var boolean
     */
    protected $escapeChildren = false;

    /**
     * @var boolean
     */
    protected $escapeOutput = false;

    /**
     * Minify All Output - based on the search and replace regexes.
     *
     * @param null $value
     * @return string
     */
    public function render($value = null)
    {
        if ($value === null) {
            $value = $this->renderChildren();
        }

        $search = [
            '/\>[^\S ]+/s', //strip whitespaces after tags, except space
            '/[^\S ]+\</s', //strip whitespaces before tags, except space
            '/(\s)+/s'  // shorten multiple whitespace sequences
        ];
        $replace = [
            '>',
            '<',
            '\\1'
        ];
        $buffer = preg_replace($search, $replace, $value);
        return $buffer;
    }
}