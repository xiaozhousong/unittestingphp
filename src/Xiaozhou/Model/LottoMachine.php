<?php

namespace Xiaozhou\Model;

class LottoMachine
{
    private $loNum;
    private $hiNum;
    private $initShuffle;
    private $shuffle;
    public $allNums;

    function __construct($loNumVal,$hiNumVal,$initShuffleVal,$shuffelVal){
      $this->loNum = $loNumVal;
      $this->hiNum = $hiNumVal;
      $this->initShuff = $initShuffVal;
      $this->shuffle = $shuffleVal;
    }

    public function initialiseNumRange(){
      $this->allNums = range($this->loNum,$this->hiNum);
    }


    public function getLowNum(){

      $loNumVal = min($number);
      return $loNumVal;
    }



}
