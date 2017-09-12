<?php
require 'TextWrapExerciseInterface.php';

class TextWrap implements TextWrapExerciseInterface{
    
    public static function formatWrap(string $text, int $length): array {
        $text = 'I dont know what am I gonna do to do this program';
        $arrayW = explode(' ', $text);
        //tamanho máximo por linha
        $length = 10;
        //variavel auxilar, foreach vai usá-lo
        $Clength = 0;
        $Ind = 0;
        foreach($arrayW as $W){
          //
          $WordL = strlen($W) + 1;
          
          if(($Clength + $WordL) <= $length){
              $arrayOutput[$Ind] .= $W . ' ';

              $Clength += $WordL;
          }else{
              $Ind += 1;

              $Clength = $WordL;

              $arrayOutput[$Ind] = $W;
          }
        }
        //if((strlen($text)) > 10){
             
        //}
        /*Implementar o método em si e abaixo retorno como array*/
        return str_split($text);
        return $length;
    }
}
