<?php

use App\Models\Album;
use App\Models\Singer;
use App\Models\Song;
use App\User;
use Illuminate\Database\Seeder;

class SongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Singer::truncate();
        Album::truncate();
        Song::truncate();
        User::truncate();

        $singer = new Singer;
        $singer->name = 'The Queens the Stone Age';
        $singer->description = 'Rock';
        $singer->save();

        $singer = new Singer;
        $singer->name = 'Prueba';
        $singer->description = 'Prueba';
        $singer->save();

        $album = new Album;
        $album->name = 'Era Vulgaris';
        $album->description = 'Rock';
        $album->singer_id = 1;
        $album->date = '2007';
        $album->save();

        $album = new Album;
        $album->name = 'Prueba';
        $album->description = 'Prueba';
        $album->singer_id = 2;
        $album->date = '0000';
        $album->save();

        $singerId = Singer::find(1);
        $albumId = Album::find(1);

        $song = new Song;
        $song->title = 'Turnin On The Screw';
        $song->time = '3:06';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'Sick, Sick, Sick';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'I am Designer';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'Into The Hollow';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'Misfit Love';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'Battery Acid';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'Make It Wit Chu';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = '3\'s & 7\'s';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'Suture Up Your Future';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'River In The Road';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'Run, Pig, Run';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'Running Joke';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'Era Vulgaris';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'The Fun Machine Took A Shit & Died';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;

        $song->save();
        $song = new Song;
        $song->title = 'Christian Brothers';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'Needles In The Camel\'s Eye';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'White Wedding';
        $song->time = '3:08';
        $song->album_id = 1;
        $song->singer_id = 1;
        $song->save();

        $song = new Song;
        $song->title = 'Prueba';
        $song->time = '00:00';
        $song->album_id = 2;
        $song->singer_id = 2;
        $song->save();

        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
