<?php
$dotenv = Dotenv\Dotenv::create(__DIR__);

$dotenv->load();

class LoadEnv 
{    
    public function Getdotenv()
    {
        $active_group = getenv('ACTIVE_GROUP');
        $pgsql_host = getenv('POSTGRES_HOST');
        $pgsql_dbname = getenv('POSTGRES_DBNAME');
        $database = getenv('DATABASE');
        $database_url = getenv('DATABASE_URL');
        $base_url = getenv('BASE_URL');
        $database_user = getenv('DATABASE_USER');
        $database_password = getenv('DATABASE_PASSWORD');

        $env_variables['getvariables'] = array(
            'active_group' => $active_group,
            'pgsql_host' => $pgsql_host,
            'pgsql_dbname' => $pgsql_dbname,
            'database' => $database,
            'database_url' => $database_url,
            'base_url' => $base_url,
            'database_user' => $database_user,
            'database_password' => $database_password
        );

        return $env_variables['getvariables'];
    }
}
