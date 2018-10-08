<?php
Doo::loadCore('db/DooModel');

class PsEndpointsBase extends DooModel{

    /**
     * @var varchar Max length is 40.
     */
    public $id;

    /**
     * @var varchar Max length is 40.
     */
    public $transport;

    /**
     * @var varchar Max length is 200.
     */
    public $aors;

    /**
     * @var varchar Max length is 40.
     */
    public $auth;

    /**
     * @var varchar Max length is 40.
     */
    public $context;

    /**
     * @var varchar Max length is 200.
     */
    public $disallow;

    /**
     * @var varchar Max length is 200.
     */
    public $allow;

    /**
     * @var enum 'yes','no').
     */
    public $direct_media;

    /**
     * @var enum 'invite','reinvite','update').
     */
    public $connected_line_method;

    /**
     * @var enum 'invite','reinvite','update').
     */
    public $direct_media_method;

    /**
     * @var enum 'none','outgoing','incoming').
     */
    public $direct_media_glare_mitigation;

    /**
     * @var enum 'yes','no').
     */
    public $disable_direct_media_on_nat;

    /**
     * @var enum 'rfc4733','inband','info','auto','auto_info').
     */
    public $dtmf_mode;

    /**
     * @var varchar Max length is 40.
     */
    public $external_media_address;

    /**
     * @var enum 'yes','no').
     */
    public $force_rport;

    /**
     * @var enum 'yes','no').
     */
    public $ice_support;

    /**
     * @var enum 'username','auth_username').
     */
    public $identify_by;

    /**
     * @var varchar Max length is 40.
     */
    public $mailboxes;

    /**
     * @var varchar Max length is 40.
     */
    public $moh_suggest;

    /**
     * @var varchar Max length is 40.
     */
    public $outbound_auth;

    /**
     * @var varchar Max length is 40.
     */
    public $outbound_proxy;

    /**
     * @var enum 'yes','no').
     */
    public $rewrite_contact;

    /**
     * @var enum 'yes','no').
     */
    public $rtp_ipv6;

    /**
     * @var enum 'yes','no').
     */
    public $rtp_symmetric;

    /**
     * @var enum 'yes','no').
     */
    public $send_diversion;

    /**
     * @var enum 'yes','no').
     */
    public $send_pai;

    /**
     * @var enum 'yes','no').
     */
    public $send_rpid;

    /**
     * @var int Max length is 11.
     */
    public $timers_min_se;

    /**
     * @var enum 'forced','no','required','yes').
     */
    public $timers;

    /**
     * @var int Max length is 11.
     */
    public $timers_sess_expires;

    /**
     * @var varchar Max length is 40.
     */
    public $callerid;

    /**
     * @var enum 'allowed_not_screened','allowed_passed_screened','allowed_failed_screened','allowed','prohib_not_screened','prohib_passed_screened','prohib_failed_screened','prohib','unavailable').
     */
    public $callerid_privacy;

    /**
     * @var varchar Max length is 40.
     */
    public $callerid_tag;

    /**
     * @var enum 'no','required','yes').
     */
    public $100rel;

    /**
     * @var enum 'yes','no').
     */
    public $aggregate_mwi;

    /**
     * @var enum 'yes','no').
     */
    public $trust_id_inbound;

    /**
     * @var enum 'yes','no').
     */
    public $trust_id_outbound;

    /**
     * @var enum 'yes','no').
     */
    public $use_ptime;

    /**
     * @var enum 'yes','no').
     */
    public $use_avpf;

    /**
     * @var enum 'no','sdes','dtls').
     */
    public $media_encryption;

    /**
     * @var enum 'yes','no').
     */
    public $inband_progress;

    /**
     * @var varchar Max length is 40.
     */
    public $call_group;

    /**
     * @var varchar Max length is 40.
     */
    public $pickup_group;

    /**
     * @var varchar Max length is 40.
     */
    public $named_call_group;

    /**
     * @var varchar Max length is 40.
     */
    public $named_pickup_group;

    /**
     * @var int Max length is 11.
     */
    public $device_state_busy_at;

    /**
     * @var enum 'yes','no').
     */
    public $fax_detect;

    /**
     * @var enum 'yes','no').
     */
    public $t38_udptl;

    /**
     * @var enum 'none','fec','redundancy').
     */
    public $t38_udptl_ec;

    /**
     * @var int Max length is 11.
     */
    public $t38_udptl_maxdatagram;

    /**
     * @var enum 'yes','no').
     */
    public $t38_udptl_nat;

    /**
     * @var enum 'yes','no').
     */
    public $t38_udptl_ipv6;

    /**
     * @var varchar Max length is 40.
     */
    public $tone_zone;

    /**
     * @var varchar Max length is 40.
     */
    public $language;

    /**
     * @var enum 'yes','no').
     */
    public $one_touch_recording;

    /**
     * @var varchar Max length is 40.
     */
    public $record_on_feature;

    /**
     * @var varchar Max length is 40.
     */
    public $record_off_feature;

    /**
     * @var varchar Max length is 40.
     */
    public $rtp_engine;

    /**
     * @var enum 'yes','no').
     */
    public $allow_transfer;

    /**
     * @var enum 'yes','no').
     */
    public $allow_subscribe;

    /**
     * @var varchar Max length is 40.
     */
    public $sdp_owner;

    /**
     * @var varchar Max length is 40.
     */
    public $sdp_session;

    /**
     * @var varchar Max length is 10.
     */
    public $tos_audio;

    /**
     * @var varchar Max length is 10.
     */
    public $tos_video;

    /**
     * @var int Max length is 11.
     */
    public $sub_min_expiry;

    /**
     * @var varchar Max length is 40.
     */
    public $from_domain;

    /**
     * @var varchar Max length is 40.
     */
    public $from_user;

    /**
     * @var varchar Max length is 40.
     */
    public $mwi_from_user;

    /**
     * @var varchar Max length is 40.
     */
    public $dtls_verify;

    /**
     * @var varchar Max length is 40.
     */
    public $dtls_rekey;

    /**
     * @var varchar Max length is 200.
     */
    public $dtls_cert_file;

    /**
     * @var varchar Max length is 200.
     */
    public $dtls_private_key;

    /**
     * @var varchar Max length is 200.
     */
    public $dtls_cipher;

    /**
     * @var varchar Max length is 200.
     */
    public $dtls_ca_file;

    /**
     * @var varchar Max length is 200.
     */
    public $dtls_ca_path;

    /**
     * @var enum 'active','passive','actpass').
     */
    public $dtls_setup;

    /**
     * @var enum 'yes','no').
     */
    public $srtp_tag_32;

    /**
     * @var varchar Max length is 40.
     */
    public $media_address;

    /**
     * @var enum 'user','uri_core','uri_pjsip').
     */
    public $redirect_method;

    /**
     * @var text
     */
    public $set_var;

    /**
     * @var int Max length is 11.
     */
    public $cos_audio;

    /**
     * @var int Max length is 11.
     */
    public $cos_video;

    /**
     * @var varchar Max length is 40.
     */
    public $message_context;

    /**
     * @var enum 'yes','no').
     */
    public $force_avp;

    /**
     * @var enum 'yes','no').
     */
    public $media_use_received_transport;

    /**
     * @var varchar Max length is 20.
     */
    public $accountcode;

    /**
     * @var enum 'yes','no').
     */
    public $media_encryption_optimistic;

    /**
     * @var enum 'yes','no').
     */
    public $user_eq_phone;

    /**
     * @var enum 'yes','no').
     */
    public $rpid_immediate;

    /**
     * @var enum 'yes','no').
     */
    public $g726_non_standard;

    /**
     * @var int Max length is 11.
     */
    public $rtp_keepalive;

    /**
     * @var int Max length is 11.
     */
    public $rtp_timeout;

    /**
     * @var int Max length is 11.
     */
    public $rtp_timeout_hold;

    /**
     * @var enum 'yes','no').
     */
    public $bind_rtp_to_media_address;

    /**
     * @var varchar Max length is 40.
     */
    public $voicemail_extension;

    /**
     * @var int Max length is 11.
     */
    public $mwi_subscribe_replaces_unsolicited;

    /**
     * @var varchar Max length is 95.
     */
    public $deny;

    /**
     * @var varchar Max length is 95.
     */
    public $permit;

    /**
     * @var varchar Max length is 40.
     */
    public $acl;

    /**
     * @var varchar Max length is 95.
     */
    public $contact_deny;

    /**
     * @var varchar Max length is 95.
     */
    public $contact_permit;

    /**
     * @var varchar Max length is 40.
     */
    public $contact_acl;

    /**
     * @var varchar Max length is 40.
     */
    public $subscribe_context;

    /**
     * @var int Max length is 11.
     */
    public $fax_detect_timeout;

    /**
     * @var varchar Max length is 80.
     */
    public $contact_user;

    /**
     * @var enum 'yes','no').
     */
    public $asymmetric_rtp_codec;

    /**
     * @var enum 'yes','no').
     */
    public $rtcp_mux;

    /**
     * @var enum 'yes','no').
     */
    public $allow_overlap;

    /**
     * @var enum 'yes','no').
     */
    public $refer_blind_progress;

    /**
     * @var enum 'yes','no').
     */
    public $notify_early_inuse_ringing;

    public $_table = 'ps_endpoints';
    public $_primarykey = 'id';
    public $_fields = array('id','transport','aors','auth','context','disallow','allow','direct_media','connected_line_method','direct_media_method','direct_media_glare_mitigation','disable_direct_media_on_nat','dtmf_mode','external_media_address','force_rport','ice_support','identify_by','mailboxes','moh_suggest','outbound_auth','outbound_proxy','rewrite_contact','rtp_ipv6','rtp_symmetric','send_diversion','send_pai','send_rpid','timers_min_se','timers','timers_sess_expires','callerid','callerid_privacy','callerid_tag','100rel','aggregate_mwi','trust_id_inbound','trust_id_outbound','use_ptime','use_avpf','media_encryption','inband_progress','call_group','pickup_group','named_call_group','named_pickup_group','device_state_busy_at','fax_detect','t38_udptl','t38_udptl_ec','t38_udptl_maxdatagram','t38_udptl_nat','t38_udptl_ipv6','tone_zone','language','one_touch_recording','record_on_feature','record_off_feature','rtp_engine','allow_transfer','allow_subscribe','sdp_owner','sdp_session','tos_audio','tos_video','sub_min_expiry','from_domain','from_user','mwi_from_user','dtls_verify','dtls_rekey','dtls_cert_file','dtls_private_key','dtls_cipher','dtls_ca_file','dtls_ca_path','dtls_setup','srtp_tag_32','media_address','redirect_method','set_var','cos_audio','cos_video','message_context','force_avp','media_use_received_transport','accountcode','media_encryption_optimistic','user_eq_phone','rpid_immediate','g726_non_standard','rtp_keepalive','rtp_timeout','rtp_timeout_hold','bind_rtp_to_media_address','voicemail_extension','mwi_subscribe_replaces_unsolicited','deny','permit','acl','contact_deny','contact_permit','contact_acl','subscribe_context','fax_detect_timeout','contact_user','asymmetric_rtp_codec','rtcp_mux','allow_overlap','refer_blind_progress','notify_early_inuse_ringing');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                ),

                'transport' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'aors' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'auth' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'context' => array(
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

                'direct_media' => array(
                        array( 'optional' ),
                ),

                'connected_line_method' => array(
                        array( 'optional' ),
                ),

                'direct_media_method' => array(
                        array( 'optional' ),
                ),

                'direct_media_glare_mitigation' => array(
                        array( 'optional' ),
                ),

                'disable_direct_media_on_nat' => array(
                        array( 'optional' ),
                ),

                'dtmf_mode' => array(
                        array( 'optional' ),
                ),

                'external_media_address' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'force_rport' => array(
                        array( 'optional' ),
                ),

                'ice_support' => array(
                        array( 'optional' ),
                ),

                'identify_by' => array(
                        array( 'optional' ),
                ),

                'mailboxes' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'moh_suggest' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'outbound_auth' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'outbound_proxy' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'rewrite_contact' => array(
                        array( 'optional' ),
                ),

                'rtp_ipv6' => array(
                        array( 'optional' ),
                ),

                'rtp_symmetric' => array(
                        array( 'optional' ),
                ),

                'send_diversion' => array(
                        array( 'optional' ),
                ),

                'send_pai' => array(
                        array( 'optional' ),
                ),

                'send_rpid' => array(
                        array( 'optional' ),
                ),

                'timers_min_se' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'timers' => array(
                        array( 'optional' ),
                ),

                'timers_sess_expires' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'callerid' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'callerid_privacy' => array(
                        array( 'optional' ),
                ),

                'callerid_tag' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                '100rel' => array(
                        array( 'optional' ),
                ),

                'aggregate_mwi' => array(
                        array( 'optional' ),
                ),

                'trust_id_inbound' => array(
                        array( 'optional' ),
                ),

                'trust_id_outbound' => array(
                        array( 'optional' ),
                ),

                'use_ptime' => array(
                        array( 'optional' ),
                ),

                'use_avpf' => array(
                        array( 'optional' ),
                ),

                'media_encryption' => array(
                        array( 'optional' ),
                ),

                'inband_progress' => array(
                        array( 'optional' ),
                ),

                'call_group' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'pickup_group' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'named_call_group' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'named_pickup_group' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'device_state_busy_at' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'fax_detect' => array(
                        array( 'optional' ),
                ),

                't38_udptl' => array(
                        array( 'optional' ),
                ),

                't38_udptl_ec' => array(
                        array( 'optional' ),
                ),

                't38_udptl_maxdatagram' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                't38_udptl_nat' => array(
                        array( 'optional' ),
                ),

                't38_udptl_ipv6' => array(
                        array( 'optional' ),
                ),

                'tone_zone' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'language' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'one_touch_recording' => array(
                        array( 'optional' ),
                ),

                'record_on_feature' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'record_off_feature' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'rtp_engine' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'allow_transfer' => array(
                        array( 'optional' ),
                ),

                'allow_subscribe' => array(
                        array( 'optional' ),
                ),

                'sdp_owner' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'sdp_session' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'tos_audio' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                ),

                'tos_video' => array(
                        array( 'maxlength', 10 ),
                        array( 'optional' ),
                ),

                'sub_min_expiry' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'from_domain' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'from_user' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'mwi_from_user' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'dtls_verify' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'dtls_rekey' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'dtls_cert_file' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'dtls_private_key' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'dtls_cipher' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'dtls_ca_file' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'dtls_ca_path' => array(
                        array( 'maxlength', 200 ),
                        array( 'optional' ),
                ),

                'dtls_setup' => array(
                        array( 'optional' ),
                ),

                'srtp_tag_32' => array(
                        array( 'optional' ),
                ),

                'media_address' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'redirect_method' => array(
                        array( 'optional' ),
                ),

                'set_var' => array(
                        array( 'optional' ),
                ),

                'cos_audio' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'cos_video' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'message_context' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'force_avp' => array(
                        array( 'optional' ),
                ),

                'media_use_received_transport' => array(
                        array( 'optional' ),
                ),

                'accountcode' => array(
                        array( 'maxlength', 20 ),
                        array( 'optional' ),
                ),

                'media_encryption_optimistic' => array(
                        array( 'optional' ),
                ),

                'user_eq_phone' => array(
                        array( 'optional' ),
                ),

                'rpid_immediate' => array(
                        array( 'optional' ),
                ),

                'g726_non_standard' => array(
                        array( 'optional' ),
                ),

                'rtp_keepalive' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'rtp_timeout' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'rtp_timeout_hold' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'bind_rtp_to_media_address' => array(
                        array( 'optional' ),
                ),

                'voicemail_extension' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'mwi_subscribe_replaces_unsolicited' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'deny' => array(
                        array( 'maxlength', 95 ),
                        array( 'optional' ),
                ),

                'permit' => array(
                        array( 'maxlength', 95 ),
                        array( 'optional' ),
                ),

                'acl' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'contact_deny' => array(
                        array( 'maxlength', 95 ),
                        array( 'optional' ),
                ),

                'contact_permit' => array(
                        array( 'maxlength', 95 ),
                        array( 'optional' ),
                ),

                'contact_acl' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'subscribe_context' => array(
                        array( 'maxlength', 40 ),
                        array( 'optional' ),
                ),

                'fax_detect_timeout' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'contact_user' => array(
                        array( 'maxlength', 80 ),
                        array( 'optional' ),
                ),

                'asymmetric_rtp_codec' => array(
                        array( 'optional' ),
                ),

                'rtcp_mux' => array(
                        array( 'optional' ),
                ),

                'allow_overlap' => array(
                        array( 'optional' ),
                ),

                'refer_blind_progress' => array(
                        array( 'optional' ),
                ),

                'notify_early_inuse_ringing' => array(
                        array( 'optional' ),
                )
            );
    }

}