<?php 

namespace Virak;
class InsertData{
    private $name;
    private $email;
    private $gender;
    private $province;

    public function __construct($name, $email,$gender, $province) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
        $this->province = $province;
    }

    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getGender() {
        return $this->gender;
    }
    public function getProvince() {
        return $this->province;
    }
}