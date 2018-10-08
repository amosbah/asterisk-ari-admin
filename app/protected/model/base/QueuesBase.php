<?php
Doo::loadCore('db/DooModel');

class QueuesBase extends DooModel{

    /**
     * @var varchar Max length is 128.
     */
    public $name;

    /**
     * @var varchar Max length is 128.
     */
    public $musiconhold;

    /**
     * @var varchar Max length is 128.
     */
    public $announce;

    /**
     * @var varchar Max length is 128.
     */
    public $context;

    /**
     * @var int Max length is 11.
     */
    public $timeout;

    /**
     * @var enum 'yes','no').
     */
    public $ringinuse;

    /**
     * @var enum 'yes','no').
     */
    public $setinterfacevar;

    /**
     * @var enum 'yes','no').
     */
    public $setqueuevar;

    /**
     * @var enum 'yes','no').
     */
    public $setqueueentryvar;

    /**
     * @var varchar Max length is 8.
     */
    public $monitor_format;

    /**
     * @var varchar Max length is 512.
     */
    public $membermacro;

    /**
     * @var varchar Max length is 512.
     */
    public $membergosub;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_youarenext;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_thereare;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_callswaiting;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_quantity1;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_quantity2;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_holdtime;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_minutes;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_minute;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_seconds;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_thankyou;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_callerannounce;

    /**
     * @var varchar Max length is 128.
     */
    public $queue_reporthold;

    /**
     * @var int Max length is 11.
     */
    public $announce_frequency;

    /**
     * @var enum 'yes','no').
     */
    public $announce_to_first_user;

    /**
     * @var int Max length is 11.
     */
    public $min_announce_frequency;

    /**
     * @var int Max length is 11.
     */
    public $announce_round_seconds;

    /**
     * @var varchar Max length is 128.
     */
    public $announce_holdtime;

    /**
     * @var varchar Max length is 128.
     */
    public $announce_position;

    /**
     * @var int Max length is 11.
     */
    public $announce_position_limit;

    /**
     * @var varchar Max length is 50.
     */
    public $periodic_announce;

    /**
     * @var int Max length is 11.
     */
    public $periodic_announce_frequency;

    /**
     * @var enum 'yes','no').
     */
    public $relative_periodic_announce;

    /**
     * @var enum 'yes','no').
     */
    public $random_periodic_announce;

    /**
     * @var int Max length is 11.
     */
    public $retry;

    /**
     * @var int Max length is 11.
     */
    public $wrapuptime;

    /**
     * @var int Max length is 11.
     */
    public $penaltymemberslimit;

    /**
     * @var enum 'yes','no').
     */
    public $autofill;

    /**
     * @var varchar Max length is 128.
     */
    public $monitor_type;

    /**
     * @var enum 'yes','no','all').
     */
    public $autopause;

    /**
     * @var int Max length is 11.
     */
    public $autopausedelay;

    /**
     * @var enum 'yes','no').
     */
    public $autopausebusy;

    /**
     * @var enum 'yes','no').
     */
    public $autopauseunavail;

    /**
     * @var int Max length is 11.
     */
    public $maxlen;

    /**
     * @var int Max length is 11.
     */
    public $servicelevel;

    /**
     * @var enum 'ringall','leastrecent','fewestcalls','random','rrmemory','linear','wrandom','rrordered').
     */
    public $strategy;

    /**
     * @var varchar Max length is 128.
     */
    public $joinempty;

    /**
     * @var varchar Max length is 128.
     */
    public $leavewhenempty;

    /**
     * @var enum 'yes','no').
     */
    public $reportholdtime;

    /**
     * @var int Max length is 11.
     */
    public $memberdelay;

    /**
     * @var int Max length is 11.
     */
    public $weight;

    /**
     * @var enum 'yes','no').
     */
    public $timeoutrestart;

    /**
     * @var varchar Max length is 128.
     */
    public $defaultrule;

    /**
     * @var varchar Max length is 128.
     */
    public $timeoutpriority;

    public $_table = 'queues';
    public $_primarykey = 'name';
    public $_fields = array('name','musiconhold','announce','context','timeout','ringinuse','setinterfacevar','setqueuevar','setqueueentryvar','monitor_format','membermacro','membergosub','queue_youarenext','queue_thereare','queue_callswaiting','queue_quantity1','queue_quantity2','queue_holdtime','queue_minutes','queue_minute','queue_seconds','queue_thankyou','queue_callerannounce','queue_reporthold','announce_frequency','announce_to_first_user','min_announce_frequency','announce_round_seconds','announce_holdtime','announce_position','announce_position_limit','periodic_announce','periodic_announce_frequency','relative_periodic_announce','random_periodic_announce','retry','wrapuptime','penaltymemberslimit','autofill','monitor_type','autopause','autopausedelay','autopausebusy','autopauseunavail','maxlen','servicelevel','strategy','joinempty','leavewhenempty','reportholdtime','memberdelay','weight','timeoutrestart','defaultrule','timeoutpriority');

    public function getVRules() {
        return array(
                'name' => array(
                        array( 'maxlength', 128 ),
                        array( 'notnull' ),
                ),

                'musiconhold' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'announce' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'context' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'timeout' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'ringinuse' => array(
                        array( 'optional' ),
                ),

                'setinterfacevar' => array(
                        array( 'optional' ),
                ),

                'setqueuevar' => array(
                        array( 'optional' ),
                ),

                'setqueueentryvar' => array(
                        array( 'optional' ),
                ),

                'monitor_format' => array(
                        array( 'maxlength', 8 ),
                        array( 'optional' ),
                ),

                'membermacro' => array(
                        array( 'maxlength', 512 ),
                        array( 'optional' ),
                ),

                'membergosub' => array(
                        array( 'maxlength', 512 ),
                        array( 'optional' ),
                ),

                'queue_youarenext' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'queue_thereare' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'queue_callswaiting' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'queue_quantity1' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'queue_quantity2' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'queue_holdtime' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'queue_minutes' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'queue_minute' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'queue_seconds' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'queue_thankyou' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'queue_callerannounce' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'queue_reporthold' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'announce_frequency' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'announce_to_first_user' => array(
                        array( 'optional' ),
                ),

                'min_announce_frequency' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'announce_round_seconds' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'announce_holdtime' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'announce_position' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'announce_position_limit' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'periodic_announce' => array(
                        array( 'maxlength', 50 ),
                        array( 'optional' ),
                ),

                'periodic_announce_frequency' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'relative_periodic_announce' => array(
                        array( 'optional' ),
                ),

                'random_periodic_announce' => array(
                        array( 'optional' ),
                ),

                'retry' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'wrapuptime' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'penaltymemberslimit' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'autofill' => array(
                        array( 'optional' ),
                ),

                'monitor_type' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'autopause' => array(
                        array( 'optional' ),
                ),

                'autopausedelay' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'autopausebusy' => array(
                        array( 'optional' ),
                ),

                'autopauseunavail' => array(
                        array( 'optional' ),
                ),

                'maxlen' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'servicelevel' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'strategy' => array(
                        array( 'optional' ),
                ),

                'joinempty' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'leavewhenempty' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'reportholdtime' => array(
                        array( 'optional' ),
                ),

                'memberdelay' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'weight' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'timeoutrestart' => array(
                        array( 'optional' ),
                ),

                'defaultrule' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                ),

                'timeoutpriority' => array(
                        array( 'maxlength', 128 ),
                        array( 'optional' ),
                )
            );
    }

}