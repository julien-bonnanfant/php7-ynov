<?php

/**
 * Contrairement à une méthode classique, une méthode statique n'a pas besoin
 * d'une instance de classe pour fonctionner, mais s'apelle sur la classe elle même
 * En contrepartie elle ne peut pas utiliser des propriétés ou des méthodes d'instance
 * et ne peut donc pas utiliser le mot clé $this. On utilise self:: à la place.
 */
class PDOFactory
{
	protected static $user = 'root';
	protected static $password = 'ynov';
	
	public static function createPDO()
	{
		$dsn = 'mysql:dbname=php;host=127.0.0.1';

		return new PDO($dsn, self::$user, self::$password);
	}
	
	public static function createPDODatabase($database)
	{
		$dsn = 'mysql:dbname='.$database.';host=127.0.0.1';
		
		return new PDO($dsn, self::$user, self::$password);
	}
}

$pdoDefault = PDOFactory::createPDO();
$pdoPolitic = PDOFactory::createPDODatabase('politic');
