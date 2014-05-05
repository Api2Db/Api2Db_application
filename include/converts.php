<?php


class Application_Converts extends Api2Db_Converts
{

	/**
		* @param array $field содержит сделующие данные:
		* $arg['key']    - Ключ поля, указанный в модуле.
		* $arg['val']    - полученное значение поля, которое надо конвертировать
		* $arg['type']   - Тип поля, по умолчанию text. 
		*
		* @param array $row содержит текущий элемент результата sql запроса, чистый, без конвертирования
		*
		* @return array $field. Что вернете, то и будет в результате, здесь будте осторожны
	*/

	public function example_convert( $field, $row ){

		return $field;
	}

}
