<?php

//This Class is to construct our html page.

class Page  {

  public static $_title = "Please set the title";

  //Constructor - Set the title when it is passed in __construct($newTitle)  {
  function __construct(string $title){
   $this->_title = $title;
  }
  static function setTitle($title){
    self::$_title = $title;
  }

  //This function displays the html header
  static function header() {?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo self::$_title?></title>
    </head>
    <body>
    <h1><?php echo self::$_title?></h1>
        
    <?php
  }

  //This function displays the html footer
  static function footer() {?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>

    <?php
  }

  //This function displays the upload form for the CSV file
  static function uploadForm() { ?>
<p>Please upload a file</p>
<form method='post' action ="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
<input type="file" name="filename">
<input type="submit" value="upload">
</form>
  <?php
    }
    static function showRoster($team)  {
      $headers = ["Number","First Name","Last Name","Position","BAT","THW","Age","Height","Weight(lb)","Birthplace"];
      // <!-- Setup the table roster -->
      $numofPlayers = 0;
      echo "<table border=1>";
      foreach($headers as $col){
      echo "<th>".$col."</th>";
      }
      //Iterate through the roster and print it out
      foreach ($team as $player) {
        echo "<tr>";
       foreach($player as $data){
        echo "<td>".$data."</td>";
       }

       echo "</tr>";
       $numofPlayers++;
      }
echo "</table>";
    echo"<p>The number of players: ".$numofPlayers."</p>";
    }
}

?>
