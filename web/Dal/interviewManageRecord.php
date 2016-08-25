<?php

class InterviewManageRecordDal extends ActiveRecord {

	public $table_name = 'interview_manage_record';

	public function createInterviewRecord($interview_manage_id,$interview_status){

		if(!empty($interview_manage_id)){

			$create = array();

			$create['interview_manage_id'] = $interview_manage_id;

			$create['interview_status'] = $interview_status;

			$create['create_time'] = time();

			$this->add($create);

		}

	}

}

?>