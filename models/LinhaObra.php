<?php

class LinhaObra extends ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('quantidade', 'message' => 'tem que preencher a Quantidade'),
        array('valorunitario', 'message' => 'tem que preencher o Valor Unitário'),
        array('valoriva', 'message' => 'tem que preencher o Valor Iva'),
        array('folhaobra_id', 'message' => 'tem que preencher a Id da folha de Obra'),
        array('servico_id', 'message' => 'tem que preencher o Id do Serviço')
    );
}