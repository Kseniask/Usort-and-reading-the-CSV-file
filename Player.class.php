<?php

class Player {
//NO.,NAME,POS,BAT,THW,AGE,HT,WT,BIRTH PLACE
//Player attributes

public  $_number;
public  $_fname;
public  $_lname;
public  $_position;
public  $_bat;
public  $_thw;
public  $_age;
public  $_height;
public  $_weight;
public  $_birthplace;

    //Constructor
function __construct(int $number, string $fname, string $lname, string $position,
                    string $bat,string $thw, int $age, int $height,
                    int $weight, string $birthplace){
$this->_number = $number;
$this->_fname = $fname;
$this->_lname = $lname;
$this->_position = $position;
$this->_bat = $bat;
$this->_thw = $thw;
$this->_age = $age;
$this->_height = $height;
$this->_weight = $weight;
$this->_birthplace = $birthplace;
                    }

function setfName(string $fname){
    $this->_fname = $fname;
}
function getfName() :string{
    return $this->_fname;
}
function setlName(string $lname){
    $this->_lname = $lname;
}
function getlName() :string{
    return $this->_lname;
}
function setNum(string $number){
    $this->_number = $number;
}
function getNum():int{
    return $this->_number;
}
function setPos(string $position){
    $this->_position = $position;
}
function getPos():string{
    return $this->_position;
}
function setBat(string $bat){
    $this->_bat = $bat;
}
function getBat():string{
    return $this->_bat;
}
function setThw(string $thw){
    $this->_thw = $thw;
}
function getThw():string{
    return $this->_thw;
}
function setAge(string $age){
    $this->_age = $age;
}
function getAge():int{
    return $this->_age;
}
function setHeigth(string $height){
    $this->_height = $height;
}
function getHeight():int{
    return $this->_height;
}
function setWeight(string $weight){
    $this->_weight = $weight;
}
function getWeight():int{
    return $this->_weight;
}
function setBirt(string $birthplace){
    $this->_birthplace = $birthplace;
}
function getBirt():string{
    return $this->_birthplace;

}
    // toString will print of the player is echoed or printed.
function toStringPlayer(){
    echo "<td>" + getNum()."</td><td>".getfName()."</td><td>".getlName()."</td><td>".getPos()."</td><td>".getBat()."</td><td>".getThw()."</td><td>".getAge()."</td><td>".getHeight()."</td><td>".getWeight()."</td><td>".getBirt()."</td>";
}

}
?>