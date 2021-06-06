<?php

class Activity extends CI_Model
{

	public function selectall()
	{
		$query = $this->db->query("
			SELECT * FROM `activity` WHERE id_activity")->result();
		return $query;
	}

	public function selectallDebitur()
	{
		$query = $this->db->query("
			SELECT activity_debitur.id_activity_debitur,
			activity_debitur.user_id,activity_debitur.user_id_kreditur,activity_debitur.jenis,activity_debitur.total,
			activity.firstname,activity.lastname,activity.email,activity.phone,activity.address,activity_debitur.percent
			FROM activity_debitur
			LEFT JOIN activity ON activity_debitur.user_id_kreditur = activity.user_id
			")->result();
		return $query;
	}

	public function store($tabel, $data)
	{
		return $this->db->insert($tabel, $data);
	}

	function count($table ,$category)
	{
		return $this->db->count_all($table ,$category);
	}

}

?>