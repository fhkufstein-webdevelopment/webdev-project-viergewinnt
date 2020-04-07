<?php

class ScoreboardModel
{


    public static function getScoreBoard()
    {
        $db = new Database();

        $sql = "SELECT user.name, game.Anzahl_Zuege FROM game join user on game.User_ID = user.id order by game.Anzahl_Zuege desc";
        $result = $db->query($sql);

        if ($db->numRows($result) > 0) {
            $scoreArray = array();
            while ($row = $db->fetchObject($result)) {
                $scoreArray[] = $row;
            }
            return $scoreArray;
        }
        return null;
    }

    public static function saveScore($userid, $anz_zuege, $gewonnen)
    {
        //TODO

        $db = new Database();

        $userid = $db->escapeString($userid);
        $anz_zuege = $db->escapeString($anz_zuege);
        $gewonnen =  $db->escapeString($gewonnen);


        $sql = "INSERT INTO game(User_ID,Anzahl_Zuege,Gewonnen) VALUES('" . $userid . "','" .$anz_zuege. "','" . $gewonnen ."')";
        $db->query($sql);
    }
}