<?php
// Include data (all albums)
include_once 'includes/music-data.php';


// IF index is not present in url or value is empty
if(!isset($_GET['index']) || $_GET['index'] == '' )
{
        // redirect to index.php
        header('Location: index.php');
}
else
{
    // Get index of album from url (GET)
    $index = $_GET['index'];

    // get album from albums collection
    $album = $musicAlbums[$index];


}

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Music Collection - Edit [ALBUM]</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body >
        <section>
            <h1>Edit album - <?= $album['album']?> by <?= $album['artist']?></h1>

            <form action="" method="post">
                <div class="data-field">
                    <label for="artist">Artist</label>
                    <input id="artist" type="text" name="artist" value="<?= $album['artist']?>"/>
                </div>
                <div class="data-field">
                    <label for="album">Album</label>
                    <input id="album" type="text" name="album" value="<?= $album['album']?>"/>
                </div>
                <div class="data-field">
                    <label for="genre">Genre</label>
                    <input id="genre" type="text" name="genre" value="<?= $album['genre']?>"/>
                </div>
                <div class="data-field">
                    <label for="year">Year</label>
                    <input id="year" type="text" name="year" value="<?= $album['year']?>"/>
                </div>
                <div class="data-field">
                    <label for="tracks">Tracks</label>
                    <input id="tracks" type="number" name="tracks" value="<?= $album['tracks']?>"/>
                </div>
                <div class="data-submit">
                    <input type="hidden" name="album-number" value="<?= $index; ?>"/>
                    <input type="submit" name="submit" value="Save"/>
                </div>
            </form>
        </section>
        <div>
            <a href="index.php">Go back to the list</a>
        </div>
	</body>
</html>