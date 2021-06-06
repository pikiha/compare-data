<?php

class Compare extends CI_Model
{

	public function getcompare()
	{
		$query = $this->db->query("

			SELECT activity_debitur.id_activity_debitur, activity_debitur.user_id,activity_debitur.user_id_kreditur,activity_debitur.jenis,activity_debitur.total,activity_debitur.percent, activity.firstname,activity.lastname,activity.email,activity.phone,activity.address, activity.file1,activity.file2,activity.file3,activity.file4,activity.file5,activity.total_k,activity.percent_k FROM activity_debitur LEFT JOIN activity ON activity_debitur.user_id_kreditur = activity.user_id

			")->result();
		return $query;
	}

}
?>