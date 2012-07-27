<?php
namespace Debug\ContentManagement\Debugger;

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
 */
class TemplateDebugger extends \Debug\Toolbar\Debugger\AbstractDebugger {

    /**
     * @var integer
     **/
    protected $priority = 10;

    /**
     * TODO: Document this Method! ( assignVariables )
     */
    public function assignVariables() {
        if (is_array($this->get('Templates'))) {
            $templates = array_flip($this->get('Templates'));
            foreach ($templates as $file => $value) {
                $templates[$file] = file_exists($file);
            }
            $this->view->assign('templates', $templates);
        }
    }

}

?>