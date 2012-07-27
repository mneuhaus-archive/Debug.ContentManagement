<?php
namespace Debug\ContentManagement\Collector;

/*                                                                        *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * @FLOW3\Aspect
 */
class TemplateCollector {

    /**
     * Intercept the Response to attach the Toolbar
     *
     * @param \TYPO3\FLOW3\AOP\JoinPointInterface $joinPoint
     * @FLOW3\Before("method(Foo\ContentManagement\Operations\FileExistsOperation->evaluate())")
     * @return void
     */
    public function catchTemplates(\TYPO3\FLOW3\AOP\JoinPointInterface $joinPoint) {
        $flowQuery = $joinPoint->getMethodArgument("flowQuery");
        $value = $flowQuery->getContext();
        \Debug\Toolbar\Service\DataStorage::add('Template:Templates', $value[0]);
    }

}

?>