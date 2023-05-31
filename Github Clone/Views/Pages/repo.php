<?php 
    use Models\RepoModel;

    $repoModel = new RepoModel(new MySql);

?>

<?php foreach ($repoModel -> getRepos() as $key => $row):?>
    <?php if ($row['id'] == $_GET['id']): ?>
        <ul>
            <li><b>Name:</b> <?php echo $row['name'] ?></li>
            <li><b>Description:</b> <?php echo $row['description'] ?></li>
            <li><b>Date:</b> <?php echo $row['date'] ?></li>
            <li><b>Owner:</b> <?php echo $row['owner'] ?></li>
            <li><b>Privacy:</b> <?php echo $row['privacy'] == 1 ? 'public' : 'private' ?></li>
            <li><b>.gitignore:</b> <?php echo $row['gitignore'] ?></li>
            <li><b>License:</b> <?php echo $row['license'] ?></li>
        </ul>
    <?php endif ?>
<?php endforeach ?>

<br>

<button name="edit">Edit</button>

<br>

<a href="<?php print INCLUDE_PATH ?>">Get back.</a>
