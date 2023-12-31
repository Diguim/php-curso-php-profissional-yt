<?php 

function validate(array $validations){
    $result = [];
    $param = '';

    foreach($validations as $field => $validate){
        if(!str_contains($validate, '|')){
            $result[$field] = $validate($field);

            if(str_contains($validate, ':')){
                [$validate, $param] = explode(':', $validate);
            }
            $result[$field] = $validate($field, $param);
        }else{
            $result[$field] = multipleValidations($validate, $field, $param);
        }
    }

    if(in_array(false, $result)){
        return false;
    }

    return $result;

}

function multipleValidations($validate, $field, $param){

    $explodePipeValidate = explode('|', $validate);
    foreach($explodePipeValidate as $validate){
        if(str_contains($validate, ':')){
            [$validate, $param] = explode(':', $validate);
        }
        $result = $validate($field, $param);
    }

    return $result;
}

function required($field){
    if($_POST[$field] === ''){
        setFlash($field, 'O campo é obrigatório');
        return false;
    }
    return filter_input(INPUT_POST, $field);
}

function email($field){
    $emailIsValid = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);
    
    if(!$emailIsValid) {
        setFlash($field, 'O campo tem de ser um email válido');
        return false;
    }
    return filter_input(INPUT_POST, $field);
}

function unique($field, $param){
    $data = filter_input(INPUT_POST, $field);
    $user = findBy($param, $field, $data);

    if($user){
        setFlash($field, "Esse valor já está cadastrado");
        return false;
    }

    return $data;
}

function maxlen($field, $param){
    $data = filter_input(INPUT_POST, $field);

    if(strlen($data) > $param){
        setFlash($field, "Esse campo nao pode passar de {$param} caracteres");
        return false;
    }

    return $data;
}