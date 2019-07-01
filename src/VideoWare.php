<?php

namespace Bernas\VideoWare;

class VideoWare
{
    protected $userId = "";
    protected $username = "";
    protected $confcode = "";
    protected $conftype = "";
    protected $usertype = "";


    function userId($id){
        $this->userId = $id;
        return $this;
    }
    
    function username($username){
        $this->username = $username;
        return $this;
    }
    function confcode($username){
        $this->confcode = $username;
        return $this;
    }
    function conftype($conftype){
        $this->conftype = $conftype;
        return $this;
    }
    function usertype($usertype){
        $this->usertype = $usertype;
        return $this;
    }

    function generateUrl(){
        $host = config("videoware.host");
        return $host .'?userid=' . $this->userId .'&username='. $this->username . '&confcode=' . $this->confcode . '&conftype=2&usertype='. $this->usertype;
    }
}