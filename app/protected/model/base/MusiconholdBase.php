<?php
Doo::loadCore('db/DooModel');

class MusiconholdBase extends DooModel{

    /**
     * @var varchar Max length is 80.
     */
    public $name;

    /**
     * @var enum 'custom','files','mp3nb','quietmp3nb','quietmp3').
     */
    public $mode;

    /**
     * @var varchar Max length is 255.
     */
    public $directory;

    /**
     * @var varchar Max length is 255.
     */
    public $application;

    /**
     * @var varchar Max length is 1.
     */
    public $digit;

    /**
     * @var varchar Max length is 10.
     */
    public $sort;

    /**
     * @var varchar Max length is 10.
     */
    public $format;

    /**
     * @var datetime
     */
    public $stamp;

    public $_table = 'musiconhold';
    public $_primarykey = 'name';
    public $_fields = array('name','mode','directory','application','digit','sort','format','stamp');

    public function getVRules() {
        return array(
                'name' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'mode' => array(
                        array( 'optional' ),
                ),

                'directory' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'application' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'digit' => array(
                        array( 'maxlength', 1 ),
                        array( 'optional' ),
                ),

                'sort' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                ),

                'format' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                ),

                'stamp' => array(
                        array( 'datetime' ),
                        array( 'optional' ),
                )
            );
    }

}