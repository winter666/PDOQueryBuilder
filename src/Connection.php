<?php


namespace Serge\PdoQueryBuilder;

use Serge\Dotenv\Env;
use PDO;

class Connection
{
    private static Connection|null $instance = null;
    private PDO $connection;

    private function __construct() {
        $env = Env::getInstance();
        $this->connection = new PDO($env->get('DB') . ':host='.$env->get('DB_HOST').';dbname='. $env->get('DB_NAME'), $env->get('DB_USERNAME'), $env->get('DB_PASSWORD'));
    }

    public static function getInstance(): static {
        if (static::$instance === null) {
            static::$instance = new Connection();
        }

        return static::$instance;
    }

    public function getConnection(): PDO {
        return $this->connection;
    }
}
