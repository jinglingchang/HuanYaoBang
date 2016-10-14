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

   public function createorder(){

      $this->display('tianxiedingdan');   
   }

   public function daoyitaidetail(){

         $this->display('daoyitaidetail');
   }

   public function myorder(){

         $this->display('myorder');
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
   public function doczhaomu(){

      $this->display('doczhaomu');

   }
   public function sqcg(){

      $this->display('sqcg');

   }
   public function shoushu(){

      $this->display('shoushu');

   }
   public function useraccess(){

      $this->display('useraccess');
      
   }

   public function docaccessdetail(){
      
      $this->display('docaccessdetail');

   }

   

}
