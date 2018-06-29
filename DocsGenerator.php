<?php

class DocsGenerator
{
    public function getHeaders($arquivo)
    {
        $headerHTML = "";
        foreach ($arquivo as $key => $value) {
            if(is_array($value) || is_object($value)){
                continue;
            }
            $headerHTML .= "# $value \n";
        }

        return $headerHTML;
    }


    public function getValidationsFromField($field, $table = false)
    {


        $validationsHTML = '';

        if (is_object($field) || is_array($field)) {
            foreach ($field as $key => $value){
                if (is_object($value) || is_array($value)) {
                    if (is_array($value)) {
                        $validationsHTML .= "## $key \n";
                    }
                    $validationsHTML .= $this->getValidationsFromField($value, true);
                    continue;
                }

                if ($key === 'registro') {
                    $validationsHTML .= "## $key: $value \n";
                } else {
                    $validationsHTML .= "### $key: $value \n";
                }
            }
        }

        return $validationsHTML;
    }

    public function getBody($arquivo)
    {
        $bodyHTML = "";
        foreach ($arquivo->validacao->conteudo->registros as $key => $value) {
            $bodyHTML .= $this->getValidationsFromField($value);
        }

        return $bodyHTML;
    }

    public function getFile()
    {
        $file = file_get_contents('./public/layout_21.json');
        return json_decode($file);
    }

    public function generate()
    {
        $file = $this->getFile();
        $content = $this->getHeaders($file).$this->getBody($file);
        file_put_contents('./Layout.md', $content);

    }
}