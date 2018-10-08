<?php
Doo::loadCore('db/DooModel');

class VoicemailBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $uniqueid;

    /**
     * @var varchar Max length is 80.
     */
    public $context;

    /**
     * @var varchar Max length is 80.
     */
    public $mailbox;

    /**
     * @var varchar Max length is 80.
     */
    public $password;

    /**
     * @var varchar Max length is 80.
     */
    public $fullname;

    /**
     * @var varchar Max length is 80.
     */
    public $alias;

    /**
     * @var varchar Max length is 80.
     */
    public $email;

    /**
     * @var varchar Max length is 80.
     */
    public $pager;

    /**
     * @var enum 'yes','no').
     */
    public $attach;

    /**
     * @var varchar Max length is 10.
     */
    public $attachfmt;

    /**
     * @var varchar Max length is 80.
     */
    public $serveremail;

    /**
     * @var varchar Max length is 20.
     */
    public $language;

    /**
     * @var varchar Max length is 30.
     */
    public $tz;

    /**
     * @var enum 'yes','no').
     */
    public $deletevoicemail;

    /**
     * @var enum 'yes','no').
     */
    public $saycid;

    /**
     * @var enum 'yes','no').
     */
    public $sendvoicemail;

    /**
     * @var enum 'yes','no').
     */
    public $review;

    /**
     * @var enum 'yes','no').
     */
    public $tempgreetwarn;

    /**
     * @var enum 'yes','no').
     */
    public $operator;

    /**
     * @var enum 'yes','no').
     */
    public $envelope;

    /**
     * @var int Max length is 11.
     */
    public $sayduration;

    /**
     * @var enum 'yes','no').
     */
    public $forcename;

    /**
     * @var enum 'yes','no').
     */
    public $forcegreetings;

    /**
     * @var varchar Max length is 80.
     */
    public $callback;

    /**
     * @var varchar Max length is 80.
     */
    public $dialout;

    /**
     * @var varchar Max length is 80.
     */
    public $exitcontext;

    /**
     * @var int Max length is 11.
     */
    public $maxmsg;

    /**
     * @var decimal Max length is 5. ,2).
     */
    public $volgain;

    /**
     * @var varchar Max length is 80.
     */
    public $imapuser;

    /**
     * @var varchar Max length is 80.
     */
    public $imappassword;

    /**
     * @var varchar Max length is 80.
     */
    public $imapserver;

    /**
     * @var varchar Max length is 8.
     */
    public $imapport;

    /**
     * @var varchar Max length is 80.
     */
    public $imapflags;

    /**
     * @var datetime
     */
    public $stamp;

    public $_table = 'voicemail';
    public $_primarykey = 'uniqueid';
    public $_fields = array('uniqueid','context','mailbox','password','fullname','alias','email','pager','attach','attachfmt','serveremail','language','tz','deletevoicemail','saycid','sendvoicemail','review','tempgreetwarn','operator','envelope','sayduration','forcename','forcegreetings','callback','dialout','exitcontext','maxmsg','volgain','imapuser','imappassword','imapserver','imapport','imapflags','stamp');

    public function getVRules() {
        return array(
                'uniqueid' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'context' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'mailbox' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'password' => array(
                        array( 'maxlength', 80 ),
                        array( 'notnull' ),
                ),

                'fullname' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'alias' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'email' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'pager' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'attach' => array(
                        array( 'optional' ),
                ),

                'attachfmt' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                ),

                'serveremail' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'language' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'tz' => array(
                        array( 'maxlength', 30 ),
                        array( 'optional' ),
                ),

                'deletevoicemail' => array(
                        array( 'optional' ),
                ),

                'saycid' => array(
                        array( 'optional' ),
                ),

                'sendvoicemail' => array(
                        array( 'optional' ),
                ),

                'review' => array(
                        array( 'optional' ),
                ),

                'tempgreetwarn' => array(
                        array( 'optional' ),
                ),

                'operator' => array(
                        array( 'optional' ),
                ),

                'envelope' => array(
                        array( 'optional' ),
                ),

                'sayduration' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'forcename' => array(
                        array( 'optional' ),
                ),

                'forcegreetings' => array(
                        array( 'optional' ),
                ),

                'callback' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'dialout' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'exitcontext' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'maxmsg' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'volgain' => array(
                        array( 'float' ),
                        array( 'optional' ),
                ),

                'imapuser' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'imappassword' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'imapserver' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'imapport' => array(
                        array( 'maxlength', 8 ),
                        array( 'optional' ),
                ),

                'imapflags' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'stamp' => array(
                        array( 'datetime' ),
                        array( 'optional' ),
                )
            );
    }

}