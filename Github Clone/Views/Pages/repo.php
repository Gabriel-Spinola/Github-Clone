<?php 
    use Models\RepoModel;

    $repoModel = new RepoModel(new MySql);
?>

<style>
    table, th, td {
        margin-top: 2% !important; 
        border: 1px solid white;
        padding: 5px;
    }

    button, #get-back {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: auto;
        width: 20%;
    }
</style>

<?php $pageId = $_GET['id'] ?>

<table class="center">
    <?php foreach ($repoModel -> getRepos() as $key => $row):?>
        <?php if ($row['id'] == $pageId): ?>
            <tr>
                <th>Name:</th><td><?php echo $row['name'] ?></td>
            </tr>   

                <th>Description:</th> <td><?php echo $row['description'] ?></td>
            <tr>
                <th>Date:</th> <td><?php echo $row['date'] ?></td>
            </tr>

            <tr>
                <th>Owner:</th> <td><?php echo $row['owner'] ?></td>
            </tr>
            
            <tr>
                <th>Privacy:</th> <td><?php echo $row['privacy'] == 0 ? 'public' : 'private' ?></td>
            </tr>

            <tr>
                <th>.gitignore:</th> <td><?php echo $row['gitignore'] ?></td>
            </tr>

            <tr>
                <th>License:</th> <td><?php echo $row['license'] ?></td>
            </tr>
        <?php endif ?>
    <?php endforeach ?>
</table>

<br>

<button name="edit" onclick='changeLocation("addRepo?id=<?php echo $pageId ?>", true)'>Edit</button>
<br>

<form method='POST'>
    <button type='submit' name="delete">delete</button>
</form>

<?php
    if (isset($_POST['delete'])) {
        if ($repoModel -> deleteRepo($pageId)) {
            header('Location: ' . INCLUDE_PATH);
            die;
        }
        else {
            echo "<h1>Failed</h1>";
        }
    }
?>

<br>

<a id="get-back" href="<?php print INCLUDE_PATH ?>">Get back.</a>

<script src="<?php echo INCLUDE_PATH ?>Scripts/changeLocation.js"></script>
