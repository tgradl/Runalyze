<?php
/**
 * This file contains class::Insrter
 * @package Runalyze\Model
 */

namespace Runalyze\Model;

/**
 * Insert object to database
 * 
 * It may be of need to set an object before using prepared statements.
 * 
 * @author Hannes Christiansen
 * @package Runalyze\Model
 */
abstract class Inserter {
	/**
	 * PDO
	 * @var \PDO
	 */
	protected $PDO;

	/**
	 * Object
	 * @var \Runalyze\Model\Object
	 */
	protected $Object;

	/**
	 * Prepared insert statement
	 * @var \PDOStatement
	 */
	protected $Prepared = null;

	/**
	 * Construct inserter
	 * @param \PDO $connection
	 * @param \Runalyze\Model\Object $object [optional]
	 */
	public function __construct(\PDO $connection, Object $object = null) {
		$this->PDO = $connection;
		$this->Object = $object;
	}

	/**
	 * Tablename without prefix
	 * @return string
	 */
	abstract protected function table();

	/**
	 * Keys to insert
	 * @return array
	 */
	protected function keys() {
		if (!is_null($this->Object)) {
			return $this->Object->properties();
		}

		return array();
	}

	/**
	 * Prepare insert
	 * @throws \RuntimeException
	 */
	public function prepare() {
		$keys = $this->keys();

		if (empty($keys)) {
			throw new \RuntimeException('This class does not support prepared inserts.');
		}

		$this->Prepared = $this->PDO->prepare('
			INSERT INTO `'.PREFIX.$this->table().'`
			(`'.implode('`,`', $keys).'`)
			VALUES (:'.implode(', :', $keys).')
		');
	}

	/**
	 * Set object
	 * @param \Runalyze\Model\Object $object
	 */
	final public function insert(Object $object = null) {
		if (!is_null($object)) {
			$this->Object = $object;
		}

		$this->before();
		$this->runInsert();
		$this->after();
	}

	/**
	 * Run insert
	 */
	private function runInsert() {
		if (!is_null($this->Prepared)) {
			$this->runPreparedInsert();
		} else {
			$this->runManualInsert();
		}
	}

	/**
	 * Run prepared statement
	 */
	private function runPreparedInsert() {
		$values = array();

		foreach ($this->keys() as $key) {
			$values[':'.$key] = $this->value($key);
		}

		$this->Prepared->execute($values);
	}

	/**
	 * Run manual insert
	 */
	private function runManualInsert() {
		$keys = $this->keys();
		$values = array();

		foreach ($keys as $key) {
			$values[] = $this->PDO->quote($this->value($key));
		}

		$this->PDO->exec('
			INSERT INTO `'.PREFIX.$this->table().'`
			(`'.implode('`,`', $keys).'`)
			VALUES ('.implode(',', $values).')
		');
	}

	/**
	 * Value for key
	 * @param string $key
	 * @return string
	 */
	protected function value($key) {
		$value = $this->Object->get($key);

		if (is_array($value)) {
			return Object::implode($value);
		}

		return $value;
	}

	/**
	 * Tasks before insertion
	 */
	protected function before() {
		$this->Object->synchronize();
	}

	/**
	 * Tasks after insertion
	 */
	protected function after() {}

	/**
	 * Last inserted ID
	 * @return int
	 * @throws \RuntimeException
	 */
	final public function insertedID() {
		if (!($this->Object instanceof ObjectWithID)) {
			throw new \RuntimeException('Only objects with id serve an inserted id.');
		}

		return $this->PDO->lastInsertId();
	}
}