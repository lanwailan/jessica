<?php

defined('BASEPATH') OR exit('No direct script access allowed');

function _https_curl_post($url){ 
  
       $ch = curl_init(); 
       curl_setopt($ch, CURLOPT_URL,$url);
       curl_setopt($ch, CURLOPT_ENCODING , 'gzip');
       curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);

       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
       curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

       curl_setopt($ch, CURLOPT_TIMEOUT, 60);
       $data = curl_exec($ch);       
       curl_close($ch); 
       
    if ($data){
       return $data;
    }else{
       return false;
    }
}

function p($arr){
    echo "<pre>";
    print_r($arr);
    echo "<pre>";
}

 /**
  * 计算时间差
  * @param int $timestamp1 时间戳开始
  * @param int $timestamp2 时间戳结束
  * @return array
  */
  function time_diff($timestamp1, $timestamp2)
  {
     if ($timestamp2 <= $timestamp1)
     {
         return ['hours'=>0, 'minutes'=>0, 'seconds'=>0];
     }
     $timediff = $timestamp2 - $timestamp1;
     // 时
     $remain = $timediff%86400;
     $hours = intval($remain/3600);
 
     // 分
     $remain = $timediff%3600;
     $mins = intval($remain/60);
     // 秒
     $secs = $remain%60;
 
     $time = ['hours'=>$hours, 'minutes'=>$mins, 'seconds'=>$secs];
 
     return $time;
 }