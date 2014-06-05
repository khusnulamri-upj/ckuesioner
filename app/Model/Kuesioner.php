<?php
class Kuesioner extends AppModel {
    public $validate = array(
        'nama' => array(
            'rule' => 'notEmpty'
        ),
        'singkatan' => array(
            'rule' => 'notEmpty'
        )
    );
}