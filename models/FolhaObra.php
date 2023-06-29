<?php

class FolhaObra extends ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('data'),
        array('valortotal', 'message' => 'tem que preencher o Valor Total'),
        array('ivatotal', 'message' => 'tem que preencher o Iva Total'),
        array('estado','message' => 'tem que preencher o Estado da Folha de Obra'),
        array('user_id','message' => 'tem que preencher o Id do User'),
        array('cliente_id','message' => 'tem que preencher Id do Cliente')
    );

    static $validates_size_of = array(
        array('estado','maximum' => 20, 'too_long' => 'Não deve ultrapassar os 20 carateres!')
    );
    static $validates_inclusion_of = array(
        array('estado', 'in' => array('Emitida', 'Paga', 'Em lançamento'),
            'message' => 'O estado deve ser Emitida, Paga ou Em lançamento')
    );
    static $has_many = array(
        array('linhas_obras','users')
    );

}