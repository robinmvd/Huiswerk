<?php
//Multi dimensional array with the music collection data
$musicAlbums =
    [
        [
            'artist' => 'Anderson Paak',
            'album' => 'Ventura',
            'genre' => 'hip-hop',
            'year' => '2019',
            'tracks' => '8'
        ],
        [
            'artist' => 'Jamiroquai',
            'album' => 'Dynamite',
            'genre' => 'funk',
            'year' => '2005',
            'tracks' => '12'
        ],
        [
            'artist' => 'Childish Gambino',
            'album' => 'Because The Internet',
            'genre' => 'hip-hop',
            'year' => '2013',
            'tracks' => '19'
        ],
        [
            'artist' => 'Earth, Wind & Fire',
            'album' => 'Powerlight',
            'genre' => 'disco',
            'year' => '1982',
            'tracks' => '9'
        ],
        [
            'artist' => 'J.Cole',
            'album' => 'Forest Hill Drive',
            'genre' => 'hip-hop',
            'year' => '2014',
            'tracks' => '13'
        ],
        [
            'artist' => 'Anderson Paak',
            'album' => 'Bubblin',
            'genre' => 'hip-hop',
            'year' => '2018',
            'tracks' => '1'
        ],
        [
            'artist' => 'Drake',
            'album' => 'Scorpion',
            'genre' => 'hip-hop',
            'year' => '2018',
            'tracks' => '25'
        ],
        [
            'artist' => 'David Bowie',
            'album' => 'Heathen',
            'genre' => 'rock',
            'year' => '2002',
            'tracks' => '12'
        ],
        [
            'artist' => 'Thundercat',
            'album' => 'Drunk',
            'genre' => 'hip-hop',
            'year' => '2017',
            'tracks' => '23'
        ],
        [
            'artist' => 'Prince',
            'album' => '1999',
            'genre' => 'pop',
            'year' => '1982',
            'tracks' => '11'
        ],


    ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<h1>Music Collection</h1>
<hr/>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Tracks</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="6">&copy; My Music Collection / Robin</td>
    </tr>
    </tfoot>
    <tbody>
    <!--        Loop through all albums in the collection-->

    <?php

    foreach ($musicAlbums as $index => $album) { ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $album['artist']?></td>
            <td><?= $album['album']?></td>
            <td><?= $album['genre']?></td>
            <td><?= $album['year']?></td>
            <td><?= $album['tracks']?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>