<?php
/**
 * Created by PhpStorm.
 * User: yazidneghiche
 * Date: 12/10/2020
 * Time: 10:51
 */

/**
 * Class Enigme
 */
class Enigme
{

    public $bananes;

    public $km;

    public $canMove = true;

    public $tansport = 300;

    public $mustReturn = false;

    public $dropped = 0;

    public $bannanaDepositPlanned = 300;

    public $currentKm = 0;

    /**
     * Enigme constructor.
     * @param $transport
     */
    public function __construct($transport){
        $this->transport = $transport;
    }


    /**
     *
     */
    public function reinit(){
        $this->bananes = 3000;
    }


    /**
     *
     */
    public function move(){

        while($this->bananes > 0 && $this->currentKm < 1000){

            //Check if it must return
            $this->mustReturn();

            //Eat on bannana/km
            $this->eat();

            //Set kms
            if($this->mustReturn){
                $this->currentKm =  $this->currentKm -1;
            }else{
                $this->km = $this->km +1;
                $this->currentKm =  $this->currentKm + 1;
            }

        }
    }


    /**
     * Check if it can
     */
    public function canMove(){

        $move = true;

        //1.If bannanas is empty return false
        if( $this->bananes/ 2 == $this->tansport){
            $move = false;
        }

        //2.Check if deposit planned is egual to kms
        if( $this->bannanaDepositPlanned == $this->km){
            $this->km = 0;
            $move = false;
        }

        return $move;
    }

    /**
     * Eat banane each km
     */
    public function eat(){
        $this->km = $this->km - 1;
        $this->bananes = $this->bananes - 1;
    }

    /**
     *
     */
    public function mustReturn(){
        if(!$this->canMove()){
            echo' le chameau avance</br>';
            return $this->mustReturn = true;
        }
        echo' le chameau avance</br>';
        return $this->mustReturn = false;
    }

    /**
     *
     */
    public function getLimit(){
        if($this->km == 0){
            $this->reinit();
        }
    }

    /**
     *
     */
    public function changebase(){

    }


}