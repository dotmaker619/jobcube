<?php
class mid_termSystem extends System{
	function searchProc( &$gm, &$table, $loginUserType, $loginUserRank )
	{
		$type = SearchTableStack::getType();
		$db = $gm[ $type ]->getDB();
		$table = $db->searchTable( $table, 'disp', "=", true );
		$table = $db->sortTable( $table, 'sort_rank', 'asc' );
	}

}