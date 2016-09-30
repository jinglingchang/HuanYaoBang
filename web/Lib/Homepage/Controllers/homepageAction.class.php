<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HomepageAction extends Action {

   public function index(){

        $this->display('index');
   }

   public function huanyaoxuzhi(){

   		$this->display('huanyaoxuzhi');
   }

   public function daoyitai(){

   		$this->display('daoyitai');
   }

   public function zuixinhuodong(){

   		$this->display('zuixinhuodong');
   }

   public function yaoqinghaoyou(){

   		$this->display('yaoqinghaoyou');
   }

   public function tianxiedingdan(){

         $this->display('tianxiedingdan');
   }

   public function querendingdan(){

         $this->display('querendingdan');
   }

   public function zhifujieguo(){

         $this->display('zhifujieguo');
   }

   

}
