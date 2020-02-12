<?php

class Team {
    //These are the attributes to store the teamName and the players
    public $_players = array();

    //Comparator function by Number
function sortFunction($x,$y){
     return $x->getlName()<=> $y->getlName();
    }
    //Function to call the comparator and Sort by Number
    function sortPlayers(& $players){
        usort($players, array($this,'sortFunction'));
       }  
       
   function setPlayers($players){
          $this->_players = $players;
      }
    //This function adds a player to the internal array
    function addPlayer(Player $newPlayer){
      $this->_players[] = $newPlayer;
    }
    function getPlayers():Array{
        return $this->_players;
    }

    //Returns the count of the players
    function getPlayersCount():int{
    return count($this->_players);
    }

}

?>
