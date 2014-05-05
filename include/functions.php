<?php

/**
	* Класс в который нужно выносить все простые функции. Они будут доступны в конвертах, триггерах, проверках.
	*
	* Пример:
	* final public function is_email( $email ){
	*	
	* 	$p = '/^[a-z0-9!#$%&*+-=?^_`{|}~]+(\.[a-z0-9!#$%&*+-=?^_`{|}~]+)*';
	* 	$p .= '@([-a-z0-9]+\.)+([a-z]{2,3}';
	* 	$p .= '|info|arpa|aero|coop|name|museum|mobi)$/ix';
	*
	* 	return preg_match( $p, $email );		 
	* }
	*
	* Внутри класса доступны:
	* $this->db 		- Экземпляр класса для работы с базой данных
	* $this->storage 	- Экземпляр класса хранилища, там доступен дебаг, модули и многое другое. Смотрите класс Api2Db_Storage
*/

class Application_Functions extends Api2Db_Functions
{



}
