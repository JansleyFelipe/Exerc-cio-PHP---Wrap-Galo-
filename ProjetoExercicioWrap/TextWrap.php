<?php
require 'TextWrapExerciseInterface.php';

class TextWrap implements TextWrapExerciseInterface{
    
    public static function formatWrap(string $text, int $length): array {
        //Texto de entrada
        $text = 'I dont know what am I gonna do to do this program';
        //tamanho máximo por linha
        $length = 10;
        //Assim que detectar um " ", sabera que uma palavra acabou
        $arrayW = explode(' ', $text);
        
        return str_split($text);
        return $length;
    }
}
