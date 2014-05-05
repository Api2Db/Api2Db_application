<?php

class Application_Checks extends Api2Db_Checks
{

	/**
		* @param array $arg содержит сделующие данные:
		* $arg['fileld'] - Ключ поля, указанный в модуле.
		* $arg['value']  - полученное значение поля, которое надо проверять
		* $arg['edit']   - указывает на то что поле редактируемое или нет
		* $arg['values'] - Все введенные значения. Значения могут быт предварительно ковертированны.
		* $arg['isset']  - указывает о том что поле все таки кто то отпрвил и возможно пустое
		*
		* @return bool|array
		* Если есть ошибка то возвращаем массив с какими хотим данными, они будут видны в результатах.
	*/

	final public function simle_check( $arg ){

		if( $arg['isset'] )
			if( empty($arg['value']) )
			   	return array( 'error' => 'value_is_empty', 'value' => $arg['value'] );
			else
				return true;
		else
			return true;
	}

}
