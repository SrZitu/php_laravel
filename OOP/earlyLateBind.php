<?php

//Early Static Binding
class EarlyBinding
{
	protected static $tableName = 'Model';

	public static function getTableName()
	{ //self dewar karone nij class er method or property er value access pabe ata early Binding
    
		return self::$tableName; 
	}
}

class EarlyModel extends EarlyBinding
{
	protected static $tableName = 'User';
}

echo EarlyModel::getTableName(); // Model, not User
echo PHP_EOL;

//Late Static Binding
class LateBinding
{
	protected static $tableName = 'Model';

	public static function getTableName()
	{ 
    // static dile child class er property or method er access pabe ata late binding
		return static::$tableName; 
	}
}

class LateModel extends LateBinding
{
	protected static $tableName = 'User';
}

echo LateModel::getTableName(); //  User