<?php

	namespace Concerto\TextExpressions;
	use ArrayAccess;
	use Iterator;

	class ExpressionResult implements ArrayAccess, Iterator {
		protected $data;

		public function __construct(array $match) {
			$this->data = [];

			foreach ($match as $key => $value) {
				if (is_integer($key) && $key !== '0') continue;

				$this->data[$key] = $value;
			}
		}

		public function __get($key) {
			return $this->offsetGet($key);
		}

		public function __isset($key) {
			return $this->offsetExists($key);
		}

		public function __set($key, $value) {
			return $this->offsetSet($key, $value);
		}

		public function __unset($key) {
			return $this->offsetUnset($key);
		}

		public function __toString() {
			if (isset($this->data['0'])) {
				return $this->data['0'];
			}

			return '';
		}

		public function current() {
			return current($this->data);
		}

		public function key() {
			return key($this->data);
		}

		public function next() {
			return next($this->data);
		}

		public function offsetExists($offset) {
			return isset($this->data[$offset]);
		}

		public function offsetGet($offset) {
			return $this->data[$offset];
		}

		public function offsetSet($offset, $value) {
			return $this->data[$offset] = $value;
		}

		public function offsetUnset($offset) {
			unset($this->data[$offset]);
		}

		public function rewind() {
			reset($this->data);
		}

		public function replace($replacement) {
			if (($replacement instanceof VariableExpressionInterface) === false) {
				$replacement = new VariableExpression($replacement);
			}

			return $replacement->execute($this->data);
		}

		public function valid() {
			$key = key($this->data);

			return ($key !== null && $key !== false);
		}
	}