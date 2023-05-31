<?php 

    use Models\HomeModel;

    $homeModel = new HomeModel(new MySql);

?>
<?php 
   // include "./Components/header.php" 
    ?>
<aside id="repo" class="repositories">
    <div class="sidebox">
        <div class="top-repositories">
            <h3>Top Repositories</h3>

            <button name="submit" id="new-repo" onclick='changeLocation("addRepo")'>
                <strong><i class="fa fa-github"></i> New</strong>
            </button>

            <?php //Custom\Route() ?>

            <input class="search-bar border-default" type="text" placeholder="Find a repository..."></input>

            <ul class="repositories-list">
                <?php foreach ($homeModel -> getRepos() as $key => $row): ?>
                    <li>
                        <a href="<?php print INCLUDE_PATH ?>repo?id=<?php print $row['id'] ?>">
                            <img src="<?php print INCLUDE_PATH ?>Assets/profilepic.jpg"> 
                            <?php print $row['owner'] . '/' . $row['name'] ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
            <a id="show-more" href="#">Show more</a>
        </div>

        <div class="recent-activity ">
            <h3>Recent activity</h3>
            <div class="rc-border border-default">
                <p>When you take actions across Github, we'll provide links to that activity here.</p>
            </div>
        </div>
    
    </div>
</aside>

<main>
    <section class="campus border-default">
        <h3>Join GitHub Global Campus!</h3>
        <article>
            Prepare for a career in tech by joining GitHub Global Campus. Global Campus will help you get the practical
            industry knowledge you need by giving you access to industry tools, events, learning
            resources and a growing student community.
        </article>
        <img src="<?php INCLUDE_PATH ?>Assets/gc_banner_dark.png" id="campus-img">
        <button type="button">Join Global Campus</button>
    </section>

    <section class="feed border-default">
        <h3>Welcome to the new feed</h3>
        <article>
            We’re updating the cards and ranking all the time, so check back regularly. At first, you might need to follow some people or star some repositories to get started 🌱.
        </article>
        <a href="#">Send Feedback</a>
    </section> 
</main>

<aside class="latest-changes">
    <h3>Latest changes</h3>

    <ul class="lc-list">
        <li>
            <p>3 hours ago</p>
            <a href="#">SSH Certificate requirement update</a>
        </li>

        <li>
            <p>5 hours ago</p>
            <a href="#">Fixed bug that allowed removed users to retain access to the organization</a>
        </li>

        <li>
            <p>Yesterday</p>
            <a href="#">Introducing the GitHub Markdown Helpers Public Beta</a>
        </li>

        <li>
            <p>Yesterday</p>
            <a href="#">Create and manage Runner Groups in the Team plan</a>
        </li>
    </ul>

    <a id="view-changelog" href="#">view changelog →</a>
</aside><!--.latest-changes-->

<script>
    function changeLocation(newLocation) {
        location.href = `${ window.location.href }${newLocation}`; 
    }
</script>