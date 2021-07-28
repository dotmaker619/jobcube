<?php
include_once './module/'.$moduleName.'/custom/logic/ImportLogic.php';

class At_termImportLogic extends ImportLogic
{
	var $type = 'at_term';
	var $check_name = 'id';
	var $id_update = false;
	var $delete = true;

	/**
	 * 元データから新フォーマット用のデータを生成する
	 *
	 * @param base パラメータを生成する元データ
	 * @return 生成したデータ
	 */
	function createParam( $base )
	{
		$data['category'] = 'mid';

		return $data;
	}

}
