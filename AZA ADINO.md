ip serveur

ip/ETU/nomprojet

modifier dans config.php 

$app->set('flight.base_url', '/',);   
changer en /ETU/nomprojet

modifer aussi 
database' => [
		 MySQL Example:
		 'host'     => 'localhost',      // Database host (e.g., 'localhost', 'db.example.com')
		 'dbname'   => 'your_db_name',   // Database name (e.g., 'flightphp')
		 'user'     => 'your_username',  // Database user (e.g., 'root')
		 'password' => 'your_password',  // Database password (never commit real passwords)

		 SQLite Example:
		 'file_path' => __DIR__ . $ds . '..' . $ds . 'database.sqlite', // Path to SQLite file
	],