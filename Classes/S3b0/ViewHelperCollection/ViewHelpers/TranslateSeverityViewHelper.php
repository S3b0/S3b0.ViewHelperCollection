<?php
namespace S3b0\ViewHelperCollection\ViewHelpers;


use TYPO3\Flow\Error\Message;
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
            case Message::SEVERITY_NOTICE:
                return 'info';
            case Message::SEVERITY_WARNING:
                return 'warning';
            case Message::SEVERITY_ERROR:
                return 'danger';
            default:
                return 'success';
        }
    }
}