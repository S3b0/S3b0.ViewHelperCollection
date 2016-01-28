<?php
namespace S3b0\ViewHelperCollection\ViewHelpers;


use TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * TranslateSeverityViewHelper
 * Translates Flow default severities to TWBS alert class extensions!
 *
 * @package Ecom\Terminal\ViewHelpers
 */
class TranslateSeverityViewHelper extends AbstractViewHelper
{

    /**
     * @param null $value
     *
     * @return string
     */
    public function render($value = null)
    {
        if ($value === null) {
            $value = $this->renderChildren();
        }

        switch ($value) {
            case 'Notice':
                return 'info';
            case 'Warning':
                return 'warning';
            case 'Error':
                return 'danger';
            default:
                return 'success';
        }
    }
}