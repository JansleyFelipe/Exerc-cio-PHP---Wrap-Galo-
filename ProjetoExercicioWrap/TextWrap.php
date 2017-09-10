<?php
require 'TextWrapExerciseInterface.php';

class TextWrap implements TextWrapExerciseInterface{
    
    public static function formatWrap(string $text, int $length): array {
        /*Implementar o método em si e abaixo retorno como array*/
        return str_split($text);
    }
}
