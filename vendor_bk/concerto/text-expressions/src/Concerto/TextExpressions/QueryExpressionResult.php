<?php

	namespace Concerto\TextExpressions;
	use ArrayAccess;
	use Iterator;

	class QueryExpressionResult extends ExpressionResult {
		/**
		 * Build a query string from the results.
		 *
		 * @return	string
		 */
		public function build() {
			return str_replace('=&', '&', http_build_query($this->data, null, '&'));
		}
	}