<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class employerUserMoneyDal extends ActiveRecord {

    public $table_name = 'employer_company_money';

    public function createUserMoney($company_id, $money) {

        if (!empty($company_id) && !empty($money)) {

            $create = array();

            $create['company_id'] = $company_id;

            $create['money'] = $money;

            $id = $this->add($create);

            if (!empty($id)) {

                return true;
            } else {

                return false;
            }
        }
    }

    public function getUserMoneyByCompanyId($company_id) {

        if (!empty($company_id)) {

            $result = $this->where("company_id = " . $company_id)->find();

            return $result;
        }
    }

    public function updateUserMoneyByCompanyId($company_id, $update) {

        if (!empty($company_id) && is_array($update)) {

            $result = $this->where("company_id = " . $company_id)->find();

            if ($result != NULL) {

                $result = $this->where("company_id = " . $company_id)->save($update);

                return $result;
            }
        }
    }

}
