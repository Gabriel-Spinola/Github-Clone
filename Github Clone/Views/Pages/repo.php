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


<table class="center">
    <?php foreach ($repoModel -> getRepos() as $key => $row):?>
        <?php if ($row['id'] == $_GET['id']): ?>
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
                <th>Privacy:</th> <td><?php echo $row['privacy'] == 1 ? 'public' : 'private' ?></td>
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

<button name="edit" onclick='changeLocation("addRepo", true)'>Edit</button>

<br>

<a id="get-back" href="<?php print INCLUDE_PATH ?>">Get back.</a>

<script src="<?php echo INCLUDE_PATH ?>Scripts/changeLocation.js"></script>
