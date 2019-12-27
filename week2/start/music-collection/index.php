<?php
 include_once 'includes/music-data.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Music Collection - Week 2</title>
</head>
<body>
<h1>Music Collection</h1>
<a href="create.php">Create new album</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Artist</th>
                <th>Album</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Tracks</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($musicAlbums as $index => $album) { ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?=$album['artist'] ?></td>
                <td><?=$album['album'] ?></td>
                <td><?=$album['genre'] ?></td>
                <td><?=$album['year'] ?></td>
                <td><?=$album['tracks'] ?></td>
                <td><a href="details.php?index=<?= $index ?>">Details</a></td>
                <td><a href="edit.php?index=<?= $index ?>">Edit</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>












