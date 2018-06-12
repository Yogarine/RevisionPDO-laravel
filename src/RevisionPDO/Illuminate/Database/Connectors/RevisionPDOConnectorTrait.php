<?php
namespace RevisionPDO\Illuminate\Database\Connectors;

trait RevisionPDOConnectorTrait
{
    /**
     * Create a new PDO connection.
     *
     * @param  string  $dsn
     * @param  array   $config
     * @param  array   $options
     * @return \RevisionPDO\PDO
     */
    public function createConnection($dsn, array $config, array $options)
    {
        /** @noinspection PhpUndefinedClassInspection */
        $pdo = parent::createConnection($dsn, $config, $options);

        return new \RevisionPDO\PDO($pdo);
    }
}