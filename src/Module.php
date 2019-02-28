<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\PDF;

/**
 * Class Module
 * @package MSBios\PDF
 */
class Module extends \MSBios\Module
{
    /** @const VERSION  */
    const VERSION = '0.0.1';

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getDir()
    {
        return __DIR__;
    }

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getNamespace()
    {
        return __NAMESPACE__;
    }
}
