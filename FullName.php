<?php


class fullName{
    function makeFullName($firstName, $lastName){
        $fullName= $firstName.' '.$lastName;
            return $fullName;
    }

    function mycalculator($data){
        echo '<pre>';
        print_r($data);
        $btn= $data['btn'];
        Switch($btn){
            case '+' :
                $result= $data['first_number'] + $data['last_number'];
                break;
            case '-' :
                $result= $data['first_number'] - $data['last_number'];
                break;
            case '*' :
                $result= $data['first_number'] * $data['last_number'];
                break;
            case '/' :
                $result= $data['first_number'] / $data['last_number'];
                break;
            case '%' :
                $result= $data['first_number'] % $data['last_number'];
                break;
        }
        return $result;

    }
}