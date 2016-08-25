<?php


class emailVerifyCodeDal extends ActiveRecord{

	public $table_name = 'employer_email_check';


	public function updateEmailVerifyCode($email){

		if(!empty($email)){

			$email_info = $this->where("email like '".$email."'")->find();

			$code = md5('hirelib_'.time());

			if($email_info != NULL){

				$update = array();

				$update['verify_code'] = $code;

				$update['verify_time'] = time() + 86400;

				$this->where("email like '".$email."'")->save($update);

			} else{

				$create = array();

				$create['verify_code'] = $code;

				$create['verify_time'] = time() + 86400;

				$create['email'] = $email;

				$this->add($create);
			}

			return $code;

		}

	}

	public function deleteVerifyCodeByEmail($email){

		if(!empty($email)){

			$code_info = $this->where("email like '".$email."'")->find();

			if($code_info != NULL){

				$this->where("email like '".$email."'")->delete();
			}

		}

	}

	public function getVerifyCodeInfoByCode($code){

		if(!empty($code)){

			$code_info = $this->where("verify_code like '".$code."'")->find();

			if($code_info != NULL){

				return $code_info;

			}

		}

	}

}

?>