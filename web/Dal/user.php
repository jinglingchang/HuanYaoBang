<?php

class userDal extends ActiveRecord {

    public $table_name = 'employer_account';

    public function getUserInfoByEmails($email){

        if(!empty($email)){

            $user_info = $this->where("email like '".$email."'")->find();

            return $user_info;

        }

    }


    public function updateUserAccountByidAndUpdate($id, $update) {

        if (!empty($id) && is_array($update)) {

            return $this->where("id = " . $id)->save($update);
        }
    }

    //根据邮箱获取用户信息

    public function getUserInfoByEmail($email, $status = 0) {

        if (!empty($email)) {

            $account_info = $this->where("email like '" . $email . "' and employer_account_status = " . $status)->find();

            return $account_info;
        }
    }

    //根据用户ID获取用户信息

    public function getUserInfoByUserId($user_id) {

        if (!empty($user_id)) {

            $account_info = $this->where('id = ' . $user_id)->find();


            return $account_info;
        }
    }

    public function registerUserAccountByArray($array) {

        if (is_array($array)) {

            $id = $this->add($array);

            return $id;
        }
    }

    //根据邮箱和密码 注册用户

    public function registerUserAccount($email, $status = 1) {

        $create = array();

        if (!empty($email)) {

            $create['email'] = $email;

            $create['register_time'] = time();

            $create['employer_account_status'] = $status;

            $id = $this->add($create);

            return $id;
        }
    }

    public function updateUserPasswordByEmail($email, $password) {

        if (!empty($email) && !empty($password)) {

            $account_info = $this->where("email like '" . $email . "'")->find();

            if ($account_info != NULL) {

                $update = array();

                $update['password'] = md5($password);

                $this->where("email like '" . $email . "'")->save($update);

                return $account_info['id'];
            }
        }
    }

    //根据邮箱和密码 获取用户信息

    public function getUserInfoByEmailAndPassword($email, $password) {

        if (!empty($email) && !empty($password)) {

            $user_info = $this->where("email like '" . $email . "' and password like '" . md5($password) . "' and employer_account_status = 0")->find();

            return $user_info;
        }
    }

    public function updateUserAccountByUpdateAndEmail($email, $update) {

        if (!empty($email) && is_array($update)) {

            $user_info = $this->where("email  like '" . $email . "'")->find();

            if ($user_info != NULL) {

                $this->where("email  like '" . $email . "'")->save($update);

                return $user_info['id'];
            }
        }
    }

    public function getMemberListByCompanyId($company_id) {

        if (!empty($company_id)) {

            $result = $this->where('company_id = ' . $company_id)->order('account_role DESC')->select();

            return $result;
        }
    }

}

?>