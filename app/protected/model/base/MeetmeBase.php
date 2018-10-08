<?php
Doo::loadCore('db/DooModel');

class MeetmeBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $bookid;

    /**
     * @var varchar Max length is 80.
     */
    public $confno;

    /**
     * @var datetime
     */
    public $starttime;

    /**
     * @var datetime
     */
    public $endtime;

    /**
     * @var varchar Max length is 20.
     */
    public $pin;

    /**
     * @var varchar Max length is 20.
     */
    public $adminpin;

    /**
     * @var varchar Max length is 20.
     */
    public $opts;

    /**
     * @var varchar Max length is 20.
     */
    public $adminopts;

    /**
     * @var varchar Max length is 80.
     */
    public $recordingfilename;

    /**
     * @var varchar Max length is 10.
     */
    public $recordingformat;

    /**
     * @var int Max length is 11.
     */
    public $maxusers;

    /**
     * @var int Max length is 11.
     */
    public $members;

    public $_table = 'meetme';
    public $_primarykey = 'bookid';
    public $_fields = array('bookid','confno','starttime','endtime','pin','adminpin','opts','adminopts','recordingfilename','recordingformat','maxusers','members');

    public function getVRules() {
        return array(
                'bookid' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'confno' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'starttime' => array(
                        array( 'datetime' ),
                        array( 'optional' ),
                ),

                'endtime' => array(
                        array( 'datetime' ),
                        array( 'optional' ),
                ),

                'pin' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'adminpin' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'opts' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'adminopts' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'recordingfilename' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'recordingformat' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                ),

                'maxusers' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'members' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }

}