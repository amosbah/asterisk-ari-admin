<?php
Doo::loadCore('db/DooModel');

class AppsBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 255.
     */
    public $name;

    /**
     * @var varchar Max length is 1000.
     */
    public $description;

    /**
     * @var varchar Max length is 255.
     */
    public $filename;

    /**
     * @var varchar Max length is 1000.
     */
    public $command;

    /**
     * @var timestamp
     */
    public $creation_date;

    /**
     * @var varchar Max length is 255.
     */
    public $context;

    /**
     * @var int Max length is 11.
     */
    public $extension;

    public $_table = 'apps';
    public $_primarykey = 'id';
    public $_fields = array('id','name','description','filename','command','creation_date','context','extension');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'name' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'description' => array(
                        array( 'maxlength', 1000 ),
                        array( 'optional' ),
                ),

                'filename' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'command' => array(
                        array( 'maxlength', 1000 ),
                        array( 'optional' ),
                ),

                'creation_date' => array(
                        array( 'datetime' ),
                        array( 'notnull' ),
                ),

                'context' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'extension' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                )
            );
    }

}