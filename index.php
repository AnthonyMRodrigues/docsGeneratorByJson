<?php
    /**
     * Created by PhpStorm.
     * User: anthonyrodrigues
     * Date: 6/28/18
     * Time: 2:28 PM
     */

    $teste = file_get_contents('./public/layout_21.json');
    $teste = json_decode($teste);
    baguncinhaEmLosAngeles($teste);
    function imprime($texto, $value)
    {
        var_dump($texto);
        if (is_array($value)) {
            foreach ($value as $val) {
                imprime($texto, $val);
            }
        }
        $teste = '<p>' . $texto . ':' . $value . '</p>';

    }

    function baguncinhaEmLosAngeles($teste)
    {
        $validacao = [];
        foreach ($teste as $te => $value) {
            if (is_object($value)) {
                baguncinhaEmLosAngeles($value);
            }
            imprime($te, $value);
        }
    }
//
//
//    $layoutNome
//    =========================
//
//$layoutDeion
//
//$validacao['nomenclatura']['name']
//--------
//
//#### $validacao['nomenclatura']['deion']
//
//* **$validacao['nomenclatura']['rules'][0]**:**$valor**
//* **$validacao['nomenclatura']['rules'][1]**:**$valor**
//* **$validacao['nomenclatura']['rules'][2]**:**$valor**
//* **$validacao['nomenclatura']['rules'][3]**:**$valor**
//
//$validacao['registros']['name']
//--------
//
//    #### $validacao['registros']['deion']
//
//1. **$validacao['registros']['rules'][0]**
//1. **$validacao['registros']['rules'][0]**:**$valor**
//2. **$validacao['registros']['rules'][1]**:**$valor**
//3. **$validacao['registros']['rules'][2]**:**$valor**
//
//2. **$validacao['registros']['rules'][0]**
//2. **$validacao['registros']['rules'][0]**:**$valor**
//2. **$validacao['registros']['rules'][1]**:**$valor**
//3. **$validacao['registros']['rules'][2]**:**$valor**
//
//3. **$validacao['registros']['rules'][1]**:**$valor**
//4. **$validacao['registros']['rules'][2]**:**$valor**
//5. **$validacao['registros']['rules'][3]**:**$valor**
