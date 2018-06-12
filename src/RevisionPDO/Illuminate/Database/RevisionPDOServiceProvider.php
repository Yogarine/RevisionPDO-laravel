<?php
namespace RevisionPDO\Illuminate\Database;

use Illuminate\Support\ServiceProvider;

/**
 * @author Alwin Garside <alwin@garsi.de>
 */
class RevisionPDOServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('db.connector.mysql',  '\RevisionPDO\Illuminate\Database\Connectors\MySqlConnector');
        $this->app->singleton('db.connector.pgsql',  '\RevisionPDO\Illuminate\Database\Connectors\PostgresConnector');
        $this->app->singleton('db.connector.sqlite', '\RevisionPDO\Illuminate\Database\Connectors\SQLiteConnector');
        $this->app->singleton('db.connector.sqlsrv', '\RevisionPDO\Illuminate\Database\Connectors\SqlServerConnector');
    }
}
