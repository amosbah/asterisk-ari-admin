<?php
Doo::loadCore('db/DooModel');

class CdrBase extends DooModel{

    /**
     * @var int Max length is 11.  unsigned.
     */
    public $id;

    /**
     * @var datetime
     */
    public $calldate;

    /**
     * @var varchar Max length is 80.
     */
    public $src;

    /**
     * @var varchar Max length is 80.
     */
    public $dst;

    /**
     * @var varchar Max length is 80.
     */
    public $dcontext;

    /**
     * @var varchar Max length is 80.
     */
    public $clid;

    /**
     * @var varchar Max length is 50.
     */
    public $channel;

    /**
     * @var varchar Max length is 50.
     */
    public $dstchannel;

    /**
     * @var varchar Max length is 200.
     */
    public $lastapp;

    /**
     * @var varchar Max length is 200.
     */
    public $lastdata;

    /**
     * @var datetime
     */
    public $start;

    /**
     * @var datetime
     */
    public $answer;

    /**
     * @var datetime
     */
    public $end;

    /**
     * @var float unsigned
     */
    public $duration;

    /**
     * @var float unsigned
     */
    public $billsec;

    /**
     * @var enum 'ANSWERED','BUSY','FAILED','NO ANSWER','CONGESTION').
     */
    public $disposition;

    /**
     * @var varchar Max length is 50.
     */
    public $amaflags;

    /**
     * @var varchar Max length is 32.
     */
    public $uniqueid;

    /**
     * @var varchar Max length is 32.
     */
    public $linkedid;

    /**
     * @var int Max length is 11.
     */
    public $sequence;

    public $_table = 'cdr';
    public $_primarykey = 'id';
    public $_fields = array('id','calldate','src','dst','dcontext','clid','channel','dstchannel','lastapp','lastdata','start','answer','end','duration','billsec','disposition','amaflags','uniqueid','linkedid','sequence');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'integer' ),
                        array( 'min', 0 ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'calldate' => array(
                        array( 'datetime' ),
                        array( 'notnull' ),
                ),

                'src' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'dst' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'dcontext' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'clid' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'channel' => array(
                        array( 'maxlength', 50 ),
                        array( 'optional' ),
                ),

                'dstchannel' => array(
                        array( 'maxlength', 50 ),
                        array( 'optional' ),
                ),

                'lastapp' => array(
                        array( 'maxlength', 200 ),
                        array( 'notnull' ),
                ),

                'lastdata' => array(
                        array( 'maxlength', 200 ),
                        array( 'notnull' ),
                ),

                'start' => array(
                        array( 'datetime' ),
                        array( 'notnull' ),
                ),

                'answer' => array(
                        array( 'datetime' ),
                        array( 'notnull' ),
                ),

                'end' => array(
                        array( 'datetime' ),
                        array( 'notnull' ),
                ),

                'duration' => array(
                        array( 'optional' ),
                ),

                'billsec' => array(
                        array( 'optional' ),
                ),

                'disposition' => array(
                        array( 'optional' ),
                ),

                'amaflags' => array(
                        array( 'maxlength', 50 ),
                        array( 'optional' ),
                ),

                'uniqueid' => array(
                        array( 'maxlength', 32 ),
                        array( 'notnull' ),
                ),

                'linkedid' => array(
                        array( 'maxlength', 32 ),
                        array( 'notnull' ),
                ),

                'sequence' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }

}