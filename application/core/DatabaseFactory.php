<?php

/**
 * Class DatabaseFactory
 *
 * Use it like this:
 * $database = DatabaseFactory::getFactory()->getConnection();
 *
 * That's my personal favourite when creating a database connection.
 * It's a slightly modified version of Jon Raphaelson's excellent answer on StackOverflow:
 * http://stackoverflow.com/questions/130878/global-or-singleton-for-database-connection
 *
 * Full quote from the answer:
 *
 * "Then, in 6 months when your app is super famous and getting dugg and slashdotted and you decide you need more than
 * a single connection, all you have to do is implement some pooling in the getConnection() method. Or if you decide
 * that you want a wrapper that implements SQL logging, you can pass a PDO subclass. Or if you decide you want a new
 * connection on every invocation, you can do do that. It's flexible, instead of rigid."
 *
 * Thanks! Big up, mate!
 */
class DatabaseFactory
{
	private static $factory;
	private $database;
        private $mysqliconn;
        
        private $geodatabase;
        
	public static function getFactory()
	{
		if (!self::$factory) {
			self::$factory = new DatabaseFactory();
		}
		return self::$factory;
	}

        
        public function getGeoConnection() {
            
            if (!$this->geodatabase) {
			         $username = Config::get('MongoDB_USER');
                                 $password = Config::get('MongoDB_PASS');
                                 $mDB_name = Config::get('MongoDB_NAME');
                                 
			         $m = new MongoClient("mongodb://$username:$password@localhost", array("db" => $mDB_name));
                                 
				$this->geodatabase = $m->$mDB_name;
		}
		return $this->geodatabase;
            
        }
        
	public function getConnection() {
		if (!$this->database) {
			$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
			$this->database = new PDO(
				Config::get('DB_TYPE') . ':host=' . Config::get('DB_HOST') . ';dbname=' .
				Config::get('DB_NAME') . ';port=' . Config::get('DB_PORT') . ';charset=' . Config::get('DB_CHARSET'),
				Config::get('DB_USER'), Config::get('DB_PASS'), $options
			);
		}
		return $this->database;
	}
        
        
        
        
        public function getMysqliConnection() {
		if (!$this->mysqliconn) {
			
                        $servername = Config::get('DB_HOST');
                        $username = Config::get('DB_USER');
                        $password = Config::get('DB_PASS');
                        $dbname = Config::get('DB_NAME');
                    
                    
			$this->mysqliconn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
				
			
		}
		return $this->mysqliconn;
	}
        
        
         
        
        
        
}