<?php


class resumeUploadAdditionalDal extends ActiveRecord{

	public $table_name = 'hr_upload_resume_addition';

	public function getResumeUploadInfo($upload_file_name,$file_type,$upload_user_id,$resume_id,$complete_score){

		$create_field = array('resume_id','upload_file_name','complete_score','file_type','upload_user_id');

		$where = '';

		foreach($create_field as $value){

			if(!empty($$value)){

				switch($value){

					case 'resume_id':

						if(!empty($where)){

							$where .= ' and resume_id = '.$resume_id;

						} else{

							$where .= ' resume_id = '.$resume_id;

						}

						break;
				}

			}

		}

	}


	public function createResumeUploadRecord($upload_file_name,$file_type,$upload_user_id,$resume_id,$complete_score,$create_time = 1){

		$create_field = array('resume_id','upload_file_name','complete_score','file_type','upload_user_id');

		$create_array = array();

		foreach($create_field as $value){

			if(!empty($$value)){

				$create_array[$value] = $$value;

			}
		}

		if(count($create_array) > 0){

			if($create_time == 1){

				$create_array['create_time'] = time();

			} else{

				$create_array['create_time'] = $create_time;

			}
			$upload_id = $this->add($create_array);

		} else{

			$upload_id = 0;
		}

		return $upload_id;

	}
}

?>