<?php
/*
 * This lab should have the following requirements:
 * POPO - Plain Old PHP Objects (Player Object).
 * File Agent - Utility Class for file operations.
 * Error Handling class - A custom error handline class.
 * HTML form to upload the CSV file. (via the page class)
 */

//Add the required files
require_once("inc/FileAgent.class.php");
require_once("inc/Player.class.php");
require_once("inc/Page.class.php");
require_once("inc/TeamParser.class.php");

//SEt the title
Page::setTitle("Lab04 Kseniia Skaletska");
//Display the Page header
Page::header();

//Check if there were any files ($_FILES_ uploaded, if there were parse them
if(isset($_FILES) && !empty($_FILES)){
//Instantiate a new Team
$team = new Team();
//Load the contents from the FileAgent static class, pass in the tmp_name
 $fileContent = FileAgent::readFile($_FILES['filename']['tmp_name']);
 //Use the TeamParser and parse the team based on the file contents from the file agent
 TeamParser::parseRoster($fileContent); 
 $teamparse = TeamParser::getParseTeam();
 //Sort the team based on last name
 $sortedTeam = $team->sortPlayers($teamparse);

if(!empty(TeamParser::getParseTeam())){
    // var_dump(TeamParser::getParseTeam());
}
    //Show pass the entire team to the page class for display
    
Page::showRoster($teamparse);}
//Show the upload form
Page::uploadForm();

//Display the page footer
Page::footer();
?>
