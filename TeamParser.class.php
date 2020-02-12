<?php
require_once("Team.class.php");
class TeamParser {

    //The team tha the Team parser will use
    public static $_team = array(); //was null

    //This function will parse our cars data to an array
 static function parseRoster( string $fileContents)   {
    
    //Instantiate a new team
    $team = new Team;
    //create an array out of each line of the file (split by newline character)
    $lines = explode("\n", $fileContents);
    //Iterating through each line of the file
    for($l=1; $l<sizeof($lines); $l++){
        
        //Split the columns up into an array
       $colscoma = explode(",", $lines[$l]);
                $nameexplode= explode(" ", $colscoma[1]);
                unset($colscoma[1]);
                $cols = array_merge($nameexplode,$colscoma);
       
        //Check we have the right amount of columns
            try{
                //cut full name into first and last names
                
                //  var_dump($cols);
                if(sizeof($cols) != 10 && $l!=14){
                    throw new Exception("Wrong amount of columns! You have ".sizeof($cols)." columns in ".$l." row");
                } 

                $t = new Player((int)$cols[2],$cols[0],$cols[1],$cols[3],$cols[4],$cols[5],(int)$cols[6],(int)$cols[7],(int)$cols[8],$cols[9]);
//NO.,NAME,POS,BAT,THW,AGE,HT,WT,BIRTH PLACE
                 $t->setfName($cols[0]);
                 $t->setlName($cols[1]);
                 $t->setNum($cols[2]);
                 $t->setPos($cols[3]);
                 $t->setBat($cols[4]);
                 $t->setThw($cols[5]);
                 $t->setAge($cols[6]);
                 $t->setHeigth($cols[7]);
                 $t->setWeight($cols[8]);
                 $t->setBirt($cols[9]);

            }
            catch(Exception $ex){
                echo $ex->getMessage();
            }
        //Trim out the white space
        for($c=0; $c<count($cols); $c++){
            $_team[$l][$c] = trim($cols[$c]);
        }
    
        //Instantiate a new Player
       
         self::$_team[] = $t;
    }  
 }
static function getParseTeam(){
    return self::$_team;  
}

}

?>