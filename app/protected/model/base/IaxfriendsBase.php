<?php
Doo::loadCore('db/DooModel');

class IaxfriendsBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 40.
     */
    public $name;

    /**
     * @var enum 'friend','user','peer').
     */
    public $type;

    /**
     * @var varchar Max length is 40.
     */
    public $username;

    /**
     * @var varchar Max length is 40.
     */
    public $mailbox;

    /**
     * @var varchar Max length is 40.
     */
    public $secret;

    /**
     * @var varchar Max length is 40.
     */
    public $dbsecret;

    /**
     * @var varchar Max length is 40.
     */
    public $context;

    /**
     * @var varchar Max length is 40.
     */
    public $regcontext;

    /**
     * @var varchar Max length is 40.
     */
    public $host;

    /**
     * @var varchar Max length is 40.
     */
    public $ipaddr;

    /**
     * @var int Max length is 11.
     */
    public $port;

    /**
     * @var varchar Max length is 20.
     */
    public $defaultip;

    /**
     * @var varchar Max length is 20.
     */
    public $sourceaddress;

    /**
     * @var varchar Max length is 20.
     */
    public $mask;

    /**
     * @var varchar Max length is 40.
     */
    public $regexten;

    /**
     * @var int Max length is 11.
     */
    public $regseconds;

    /**
     * @var varchar Max length is 20.
     */
    public $accountcode;

    /**
     * @var varchar Max length is 20.
     */
    public $mohinterpret;

    /**
     * @var varchar Max length is 20.
     */
    public $mohsuggest;

    /**
     * @var varchar Max length is 40.
     */
    public $inkeys;

    /**
     * @var varchar Max length is 40.
     */
    public $outkeys;

    /**
     * @var varchar Max length is 10.
     */
    public $language;

    /**
     * @var varchar Max length is 100.
     */
    public $callerid;

    /**
     * @var varchar Max length is 40.
     */
    public $cid_number;

    /**
     * @var enum 'yes','no').
     */
    public $sendani;

    /**
     * @var varchar Max length is 40.
     */
    public $fullname;

    /**
     * @var enum 'yes','no').
     */
    public $trunk;

    /**
     * @var varchar Max length is 20.
     */
    public $auth;

    /**
     * @var int Max length is 11.
     */
    public $maxauthreq;

    /**
     * @var enum 'yes','no','auto').
     */
    public $requirecalltoken;

    /**
     * @var enum 'yes','no','aes128').
     */
    public $encryption;

    /**
     * @var enum 'yes','no','mediaonly').
     */
    public $transfer;

    /**
     * @var enum 'yes','no').
     */
    public $jitterbuffer;

    /**
     * @var enum 'yes','no').
     */
    public $forcejitterbuffer;

    /**
     * @var varchar Max length is 200.
     */
    public $disallow;

    /**
     * @var varchar Max length is 200.
     */
    public $allow;

    /**
     * @var varchar Max length is 40.
     */
    public $codecpriority;

    /**
     * @var varchar Max length is 10.
     */
    public $qualify;

    /**
     * @var enum 'yes','no').
     */
    public $qualifysmoothing;

    /**
     * @var varchar Max length is 10.
     */
    public $qualifyfreqok;

    /**
     * @var varchar Max length is 10.
     */
    public $qualifyfreqnotok;

    /**
     * @var varchar Max length is 20.
     */
    public $timezone;

    /**
     * @var enum 'yes','no').
     */
    public $adsi;

    /**
     * @var varchar Max length is 20.
     */
    public $amaflags;

    /**
     * @var varchar Max length is 200.
     */
    public $setvar;

    public $_table = 'iaxfriends';
    public $_primarykey = 'id';
    public $_fields = array('id','name','type','username','mailbox','secret','dbsecret','context','regcontext','host','ipaddr','port','defaultip','sourceaddress','mask','regexten','regseconds','accountcode','mohinterpret','mohsuggest','inkeys','outkeys','language','callerid','cid_number','sendani','fullname','trunk','auth','maxauthreq','requirecalltoken','encryption','transfer','jitterbuffer','forcejitterbuffer','disallow','allow','codecpriority','qualify','qualifysmoothing','qualifyfreqok','qualifyfreqnotok','timezone','adsi','amaflags','setvar');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'name' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'type' => array(
                        array( 'optional' ),
                ),

                'username' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'mailbox' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'secret' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'dbsecret' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'context' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'regcontext' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'host' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'ipaddr' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'port' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'defaultip' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'sourceaddress' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'mask' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'regexten' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'regseconds' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'accountcode' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'mohinterpret' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'mohsuggest' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'inkeys' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'outkeys' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'language' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                ),

                'callerid' => array(
                        array( 'maxlength', 100 ),
                        array( 'optional' ),
                ),

                'cid_number' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'sendani' => array(
                        array( 'optional' ),
                ),

                'fullname' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'trunk' => array(
                        array( 'optional' ),
                ),

                'auth' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'maxauthreq' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'requirecalltoken' => array(
                        array( 'optional' ),
                ),

                'encryption' => array(
                        array( 'optional' ),
                ),

                'transfer' => array(
                        array( 'optional' ),
                ),

                'jitterbuffer' => array(
                        array( 'optional' ),
                ),

                'forcejitterbuffer' => array(
                        array( 'optional' ),
                ),

                'disallow' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'allow' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'codecpriority' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'qualify' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                ),

                'qualifysmoothing' => array(
                        array( 'optional' ),
                ),

                'qualifyfreqok' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                ),

                'qualifyfreqnotok' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                ),

                'timezone' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'adsi' => array(
                        array( 'optional' ),
                ),

                'amaflags' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'setvar' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                )
            );
    }

}