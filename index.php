<?php

require_once './DocsGenerator.php';
$generator = new DocsGenerator();
$generator->generate();

header ('./Layout.md');

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
