<?php
function checkInput($id,$go,$input)
{
	if ($go != 0) {
		$data = DB::table('selects')
            ->join('pivot_selectprod', 'pivot_selectprod.select_id', '=', 'selects.id')
            ->where('pivot_selectprod.service_id',$id)->where('pivot_selectprod.is_main',1)
            ->where('selects.type',$input)->get();
        return $data;
	}else{
		return 'wew';	
	}
	
}
?>