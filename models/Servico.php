<?php

class Servico extends ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('referencia', 'message' => 'Deve preencher a Referência'),
        array('descricao', 'message' => 'Deve preencher a Descrição'),
        array('valorunitario', 'message' => 'Deve preencher o Valor Unitário'),
        array('iva_id', 'message' => 'Deve preencher o Id do Iva')
    );

    static $validates_size_of = array(
        array('descricao', 'maximum' => 80, 'too_long' => 'Não deve ultrapassar os 80 carateres!'),
    );

    static $validates_format_of = array(
        array('referencia', 'with' => '/^\d{1,9}$/', 'message' => 'A referência tem que ter no mínimo entre 1 a 9 números.'),
    );

    static $validates_uniqueness_of = array(
        array('referencia', 'message' => 'Esta referência já existe!')
    );

    static $has_many = array(
        array('linhas_obras')
    );

    static $belongs_to = array(
        array('iva')
    );


}