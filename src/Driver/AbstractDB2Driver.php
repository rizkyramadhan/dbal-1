<?php

namespace Doctrine\DBAL\Driver;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver;
use Doctrine\DBAL\Driver\Exception as TheDriverException;
use Doctrine\DBAL\Exception\DriverException;
use Doctrine\DBAL\Platforms\DB2Platform;
use Doctrine\DBAL\Schema\DB2SchemaManager;

/**
 * Abstract base implementation of the {@link Doctrine\DBAL\Driver} interface for IBM DB2 based drivers.
 */
abstract class AbstractDB2Driver implements Driver
{
    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new DB2Platform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(Connection $conn)
    {
        return new DB2SchemaManager($conn);
    }

    /**
     * @param string $message
     *
     * @return DriverException
     */
    public function convertException($message, TheDriverException $exception)
    {
        return new DriverException($message, $exception);
    }
}
