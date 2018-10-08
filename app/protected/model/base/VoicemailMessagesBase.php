<?php
Doo::loadCore('db/DooModel');

class VoicemailMessagesBase extends DooModel{

    /**
     * @var varchar Max length is 255.
     */
    public $dir;

    /**
     * @var int Max length is 11.
     */
    public $msgnum;

    /**
     * @var varchar Max length is 80.
     */
    public $context;

    /**
     * @var varchar Max length is 80.
     */
    public $macrocontext;

    /**
     * @var varchar Max length is 80.
     */
    public $callerid;

    /**
     * @var int Max length is 11.
     */
    public $origtime;

    /**
     * @var int Max length is 11.
     */
    public $duration;

    /**
     * @var blob
     */
    public $recording;

    /**
     * @var varchar Max length is 30.
     */
    public $flag;

    /**
     * @var varchar Max length is 30.
     */
    public $category;

    /**
     * @var varchar Max length is 30.
     */
    public $mailboxuser;

    /**
     * @var varchar Max length is 30.
     */
    public $mailboxcontext;

    /**
     * @var varchar Max length is 40.
     */
    public $msg_id;

    public $_table = 'voicemail_messages';
    public $_primarykey = 'msgnum';
    public $_fields = array('dir','msgnum','context','macrocontext','callerid','origtime','duration','recording','flag','category','mailboxuser','mailboxcontext','msg_id');

    public function getVRules() {
        return array(
                'dir' => array(
                        array( 'maxlength', 255 ),
                        array( 'notnull' ),
                ),

                'msgnum' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'context' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'macrocontext' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'callerid' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'origtime' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'duration' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'recording' => array(
                        array( 'optional' ),
                ),

                'flag' => array(
                        array( 'maxlength', 30 ),
                        array( 'optional' ),
                ),

                'category' => array(
                        array( 'maxlength', 30 ),
                        array( 'optional' ),
                ),

                'mailboxuser' => array(
                        array( 'maxlength', 30 ),
                        array( 'optional' ),
                ),

                'mailboxcontext' => array(
                        array( 'maxlength', 30 ),
                        array( 'optional' ),
                ),

                'msg_id' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                )
            );
    }

}