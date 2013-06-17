<?php

/**
 * =============================================================================
 * @file       Commons/Template/Plugin/PartialPlugin.php
 * @author     Lukasz Cepowski <lukasz@cepowski.com>
 * 
 * @copyright  PHP Commons
 *             Copyright (C) 2009-2013 PHP Commons Contributors
 *             All rights reserved.
 *             www.phpcommons.com
 * =============================================================================
 */

namespace Commons\Template\Plugin;

use Commons\Plugin\AbstractPlugin;
use Commons\Template\AbstractTemplate;

class PartialPlugin extends AbstractPlugin
{
    
    public function partial($templatePath, array $params = array())
    {
        $class = get_class($this->getInvoker());
        $template = new $class;
        if ($template instanceof AbstractTemplate) {
            $template
                ->setAll($params)
                ->setPluginBroker($this->getInvoker()->getPluginBroker());
        }
        return $template->render($templatePath);
    }
    
}

