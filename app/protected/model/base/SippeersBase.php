<?php
Doo::loadCore('db/DooModel');

class SippeersBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 40.
     */
    public $name;

    /**
     * @var varchar Max length is 45.
     */
    public $ipaddr;

    /**
     * @var int Max length is 11.
     */
    public $port;

    /**
     * @var int Max length is 11.
     */
    public $regseconds;

    /**
     * @var varchar Max length is 40.
     */
    public $defaultuser;

    /**
     * @var varchar Max length is 80.
     */
    public $fullcontact;

    /**
     * @var varchar Max length is 20.
     */
    public $regserver;

    /**
     * @var varchar Max length is 255.
     */
    public $useragent;

    /**
     * @var int Max length is 11.
     */
    public $lastms;

    /**
     * @var varchar Max length is 40.
     */
    public $host;

    /**
     * @var enum 'friend','user','peer').
     */
    public $type;

    /**
     * @var varchar Max length is 40.
     */
    public $context;

    /**
     * @var varchar Max length is 95.
     */
    public $permit;

    /**
     * @var varchar Max length is 95.
     */
    public $deny;

    /**
     * @var varchar Max length is 40.
     */
    public $secret;

    /**
     * @var varchar Max length is 40.
     */
    public $md5secret;

    /**
     * @var varchar Max length is 40.
     */
    public $remotesecret;

    /**
     * @var enum 'udp','tcp','tls','ws','wss','udp,tcp','tcp,udp').
     */
    public $transport;

    /**
     * @var enum 'rfc2833','info','shortinfo','inband','auto').
     */
    public $dtmfmode;

    /**
     * @var enum 'yes','no','nonat','update','outgoing').
     */
    public $directmedia;

    /**
     * @var varchar Max length is 29.
     */
    public $nat;

    /**
     * @var varchar Max length is 40.
     */
    public $callgroup;

    /**
     * @var varchar Max length is 40.
     */
    public $pickupgroup;

    /**
     * @var varchar Max length is 40.
     */
    public $language;

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
    public $insecure;

    /**
     * @var enum 'yes','no').
     */
    public $trustrpid;

    /**
     * @var enum 'yes','no','never').
     */
    public $progressinband;

    /**
     * @var enum 'yes','no').
     */
    public $promiscredir;

    /**
     * @var enum 'yes','no').
     */
    public $useclientcode;

    /**
     * @var varchar Max length is 40.
     */
    public $accountcode;

    /**
     * @var varchar Max length is 200.
     */
    public $setvar;

    /**
     * @var varchar Max length is 40.
     */
    public $callerid;

    /**
     * @var varchar Max length is 40.
     */
    public $amaflags;

    /**
     * @var enum 'yes','no').
     */
    public $callcounter;

    /**
     * @var int Max length is 11.
     */
    public $busylevel;

    /**
     * @var enum 'yes','no').
     */
    public $allowoverlap;

    /**
     * @var enum 'yes','no').
     */
    public $allowsubscribe;

    /**
     * @var enum 'yes','no').
     */
    public $videosupport;

    /**
     * @var int Max length is 11.
     */
    public $maxcallbitrate;

    /**
     * @var enum 'yes','no').
     */
    public $rfc2833compensate;

    /**
     * @var varchar Max length is 40.
     */
    public $mailbox;

    /**
     * @var enum 'accept','refuse','originate').
     */
    public $session-timers;

    /**
     * @var int Max length is 11.
     */
    public $session-expires;

    /**
     * @var int Max length is 11.
     */
    public $session-minse;

    /**
     * @var enum 'uac','uas').
     */
    public $session-refresher;

    /**
     * @var varchar Max length is 40.
     */
    public $t38pt_usertpsource;

    /**
     * @var varchar Max length is 40.
     */
    public $regexten;

    /**
     * @var varchar Max length is 40.
     */
    public $fromdomain;

    /**
     * @var varchar Max length is 40.
     */
    public $fromuser;

    /**
     * @var varchar Max length is 40.
     */
    public $qualify;

    /**
     * @var varchar Max length is 45.
     */
    public $defaultip;

    /**
     * @var int Max length is 11.
     */
    public $rtptimeout;

    /**
     * @var int Max length is 11.
     */
    public $rtpholdtimeout;

    /**
     * @var enum 'yes','no').
     */
    public $sendrpid;

    /**
     * @var varchar Max length is 40.
     */
    public $outboundproxy;

    /**
     * @var varchar Max length is 40.
     */
    public $callbackextension;

    /**
     * @var int Max length is 11.
     */
    public $timert1;

    /**
     * @var int Max length is 11.
     */
    public $timerb;

    /**
     * @var int Max length is 11.
     */
    public $qualifyfreq;

    /**
     * @var enum 'yes','no').
     */
    public $constantssrc;

    /**
     * @var varchar Max length is 95.
     */
    public $contactpermit;

    /**
     * @var varchar Max length is 95.
     */
    public $contactdeny;

    /**
     * @var enum 'yes','no').
     */
    public $usereqphone;

    /**
     * @var enum 'yes','no').
     */
    public $textsupport;

    /**
     * @var enum 'yes','no').
     */
    public $faxdetect;

    /**
     * @var enum 'yes','no').
     */
    public $buggymwi;

    /**
     * @var varchar Max length is 40.
     */
    public $auth;

    /**
     * @var varchar Max length is 40.
     */
    public $fullname;

    /**
     * @var varchar Max length is 40.
     */
    public $trunkname;

    /**
     * @var varchar Max length is 40.
     */
    public $cid_number;

    /**
     * @var enum 'allowed_not_screened','allowed_passed_screen','allowed_failed_screen','allowed','prohib_not_screened','prohib_passed_screen','prohib_failed_screen','prohib').
     */
    public $callingpres;

    /**
     * @var varchar Max length is 40.
     */
    public $mohinterpret;

    /**
     * @var varchar Max length is 40.
     */
    public $mohsuggest;

    /**
     * @var varchar Max length is 40.
     */
    public $parkinglot;

    /**
     * @var enum 'yes','no').
     */
    public $hasvoicemail;

    /**
     * @var enum 'yes','no').
     */
    public $subscribemwi;

    /**
     * @var varchar Max length is 40.
     */
    public $vmexten;

    /**
     * @var enum 'yes','no').
     */
    public $autoframing;

    /**
     * @var int Max length is 11.
     */
    public $rtpkeepalive;

    /**
     * @var int Max length is 11.
     */
    public $call-limit;

    /**
     * @var enum 'yes','no').
     */
    public $g726nonstandard;

    /**
     * @var enum 'yes','no').
     */
    public $ignoresdpversion;

    /**
     * @var enum 'yes','no').
     */
    public $allowtransfer;

    /**
     * @var enum 'yes','no').
     */
    public $dynamic;

    /**
     * @var varchar Max length is 256.
     */
    public $path;

    /**
     * @var enum 'yes','no').
     */
    public $supportpath;

    public $_table = 'sippeers';
    public $_primarykey = 'id';
    public $_fields = array('id','name','ipaddr','port','regseconds','defaultuser','fullcontact','regserver','useragent','lastms','host','type','context','permit','deny','secret','md5secret','remotesecret','transport','dtmfmode','directmedia','nat','callgroup','pickupgroup','language','disallow','allow','insecure','trustrpid','progressinband','promiscredir','useclientcode','accountcode','setvar','callerid','amaflags','callcounter','busylevel','allowoverlap','allowsubscribe','videosupport','maxcallbitrate','rfc2833compensate','mailbox','session-timers','session-expires','session-minse','session-refresher','t38pt_usertpsource','regexten','fromdomain','fromuser','qualify','defaultip','rtptimeout','rtpholdtimeout','sendrpid','outboundproxy','callbackextension','timert1','timerb','qualifyfreq','constantssrc','contactpermit','contactdeny','usereqphone','textsupport','faxdetect','buggymwi','auth','fullname','trunkname','cid_number','callingpres','mohinterpret','mohsuggest','parkinglot','hasvoicemail','subscribemwi','vmexten','autoframing','rtpkeepalive','call-limit','g726nonstandard','ignoresdpversion','allowtransfer','dynamic','path','supportpath');

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

                'ipaddr' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'port' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'regseconds' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'defaultuser' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'fullcontact' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'regserver' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'useragent' => array(
                        array( 'maxlength', 255 ),
                        array( 'optional' ),
                ),

                'lastms' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'host' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'type' => array(
                        array( 'optional' ),
                ),

                'context' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'permit' => array(
                        array( 'maxlength', 95 ),
                        array( 'optional' ),
                ),

                'deny' => array(
                        array( 'maxlength', 95 ),
                        array( 'optional' ),
                ),

                'secret' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'md5secret' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'remotesecret' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'transport' => array(
                        array( 'optional' ),
                ),

                'dtmfmode' => array(
                        array( 'optional' ),
                ),

                'directmedia' => array(
                        array( 'optional' ),
                ),

                'nat' => array(
                        array( 'maxlength', 29 ),
                        array( 'optional' ),
                ),

                'callgroup' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'pickupgroup' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'language' => array(
                        array( 'maxlength', 40 ),
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

                'insecure' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'trustrpid' => array(
                        array( 'optional' ),
                ),

                'progressinband' => array(
                        array( 'optional' ),
                ),

                'promiscredir' => array(
                        array( 'optional' ),
                ),

                'useclientcode' => array(
                        array( 'optional' ),
                ),

                'accountcode' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'setvar' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'callerid' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'amaflags' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'callcounter' => array(
                        array( 'optional' ),
                ),

                'busylevel' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'allowoverlap' => array(
                        array( 'optional' ),
                ),

                'allowsubscribe' => array(
                        array( 'optional' ),
                ),

                'videosupport' => array(
                        array( 'optional' ),
                ),

                'maxcallbitrate' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'rfc2833compensate' => array(
                        array( 'optional' ),
                ),

                'mailbox' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'session-timers' => array(
                        array( 'optional' ),
                ),

                'session-expires' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'session-minse' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'session-refresher' => array(
                        array( 'optional' ),
                ),

                't38pt_usertpsource' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'regexten' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'fromdomain' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'fromuser' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'qualify' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'defaultip' => array(
                        array( 'maxlength', 45 ),
                        array( 'optional' ),
                ),

                'rtptimeout' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'rtpholdtimeout' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'sendrpid' => array(
                        array( 'optional' ),
                ),

                'outboundproxy' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'callbackextension' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'timert1' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'timerb' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'qualifyfreq' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'constantssrc' => array(
                        array( 'optional' ),
                ),

                'contactpermit' => array(
                        array( 'maxlength', 95 ),
                        array( 'optional' ),
                ),

                'contactdeny' => array(
                        array( 'maxlength', 95 ),
                        array( 'optional' ),
                ),

                'usereqphone' => array(
                        array( 'optional' ),
                ),

                'textsupport' => array(
                        array( 'optional' ),
                ),

                'faxdetect' => array(
                        array( 'optional' ),
                ),

                'buggymwi' => array(
                        array( 'optional' ),
                ),

                'auth' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'fullname' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'trunkname' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'cid_number' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'callingpres' => array(
                        array( 'optional' ),
                ),

                'mohinterpret' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'mohsuggest' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'parkinglot' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'hasvoicemail' => array(
                        array( 'optional' ),
                ),

                'subscribemwi' => array(
                        array( 'optional' ),
                ),

                'vmexten' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'autoframing' => array(
                        array( 'optional' ),
                ),

                'rtpkeepalive' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'call-limit' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'g726nonstandard' => array(
                        array( 'optional' ),
                ),

                'ignoresdpversion' => array(
                        array( 'optional' ),
                ),

                'allowtransfer' => array(
                        array( 'optional' ),
                ),

                'dynamic' => array(
                        array( 'optional' ),
                ),

                'path' => array(
                        array( 'maxlength', 256 ),
                        array( 'optional' ),
                ),

                'supportpath' => array(
                        array( 'optional' ),
                )
            );
    }

}