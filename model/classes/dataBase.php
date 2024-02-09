<?php
    class DataBase
    {
        protected static $db;

        public function __construct()
        {
            // $driver = 'mysql';
            // $host = 'localhost';
            // $database = 'hozpedaki';
            $username = 'root';

            try
            {
                self::$db = new PDO('mysql: host=localhost; dbname=hozpedaki', $username);

                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            catch (PDOException $ex)
            {
                echo $ex->getMessage();
            }
        }

        public static function getConnection()
        {
            if (!self::$db)
            {
                new DataBase();
            }

            return self::$db;
        }
    }
?>