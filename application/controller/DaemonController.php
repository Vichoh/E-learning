<?php

class DaemonController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $AllMatch = MatchModel::getAllRunMatch();

        echo 'Lista de partidas<br>';
        echo print_r($AllMatch);
        echo '<br>';

        foreach($AllMatch as $key => $value) {

            MatchModel::timeRoundControl($value->id_match);
        }
    }
}