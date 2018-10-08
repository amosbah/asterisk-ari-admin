<?php
Doo::loadCore('db/DooModel');

class ExtensionsBase extends DooModel{

    /**
     * @var bigint Max length is 20.
     */
    public $id;

    /**
     * @var varchar Max length is 40.
     */
    public $context;

    /**
     * @var varchar Max length is 40.
     */
    public $exten;

    /**
     * @var int Max length is 11.
     */
    public $priority;

    /**
     * @var varchar Max length is 40.
     */
    public $app;

    /**
     * @var varchar Max length is 256.
     */
    public $appdata;

    public $_table = 'extensions';
    public $_primarykey = 'id';
    public $_fields = array('id','context','exten','priority','app','appdata');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'integer' ),
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'context' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'exten' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'priority' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'app' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'appdata' => array(
                        array( 'maxlength', 256 ),
                        array( 'notnull' ),
                )
            );
    }

}