<?php
Doo::loadCore('db/DooModel');

class PsDomainAliasesBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var varchar Max length is 80.
     */
    public $domain;

    public $_table = 'ps_domain_aliases';
    public $_primarykey = 'id';
    public $_fields = array('id','domain');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'domain' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                )
            );
    }

}