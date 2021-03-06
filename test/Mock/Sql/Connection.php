<?php

/**
 * =============================================================================
 * @file       Mock/Sql/Connection.php
 * @author     Lukasz Cepowski <lukasz@cepowski.com>
 * 
 * @copyright  PHP Commons
 *             Copyright (C) 2009-2013 PHP Commons Contributors
 *             All rights reserved.
 *             www.phpcommons.com
 * =============================================================================
 */

namespace Mock\Sql;

use Commons\Sql\Connection\AbstractConnection;
use Commons\Sql\Driver\DriverInterface;
use Commons\Sql\Query;

class Connection extends AbstractConnection
{
    
    public function connect($options = null)
    {
        return $this;
    }
    
    public function disconnect()
    {
        return $this;
    }
    
    public function isConnected()
    {
        return true;
    }
    
    public function prepareStatement($rawSql, $options = null)
    {
        return Statement($this->getDriver(), $rawSql);
    }
    
    public function begin()
    {
        return $this;
    }
    
    public function commit()
    {
        return $this;
    }
    
    public function rollback()
    {
        return $this;
    }
    
    public function inTransaction()
    {
        return false;
    }
    
    public function getDatabaseType()
    {
        return null;
    }
    
}
