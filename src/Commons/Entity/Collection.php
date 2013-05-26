<?php

/**
 * =============================================================================
 * @file        Commons/Entity/Collection.php
 * @author     Lukasz Cepowski <lukasz@cepowski.com>
 *
 * @copyright  PHP Commons
 *              Copyright (C) 2009-2012 HellWorx Software
 *              All rights reserved.
 *              www.hellworx.com
 * =============================================================================
 */

namespace Commons\Entity;

use Commons\Container\SetContainer;

class Collection extends SetContainer
{
    
    /**
     * Collection to array.
     * @see \Commons\Container\CollectionContainer::toArray()
     */
    public function toArray()
    {
        $collection = array();
        foreach ($this->getAll() as $entity) {
            if ($entity instanceof Entity) {
                $collection[] = $entity->toArray();
            } else {
                $collection[] = $entity;
            }
        }
        return $collection;
    }
    
}
