<?php

use Song as GlobalSong;

  class Song
  {
    public $songId;
    public $title;
  }

  $song = new Song();
  $manillaNSW = new Song();

  $song ->songId=1;
  $song ->title='Octopus Garden';



  $manillaNSW ->songId=2;
  $manillaNSW ->title='Manilla NSW';
  


//   print_r($song);

  class PlayList 
  {
    public $name;
    public $songs = [];

    public function addSong($song){
       
       $this ->songs[] = $song;



    }

  }

  $playlist = new PlayList();

  $playlist ->name='Rock';
  $playlist ->addSong($song);
  $playlist ->addSong($manillaNSW);

  print_r($playlist->songs);
