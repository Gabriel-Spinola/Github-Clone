<?php 
    use Models\RepoModel;

    $data = null;
    $repoId = $_GET['id'] ?? -1;
    $repoModel = new RepoModel(new MySql);

    if ($repoId != -1) {
        foreach ($repoModel -> getRepos() as $key => $row) {
            if ($row['id'] == $repoId) {
                $data = $row;
            }
        }
    }

    $repoModel -> processForm($repoId);
?>

<style>
    .line {
        height: 1px;
        border-width: 0;
        color: gray;
        background-color: gray;
    }
</style>

<main class="center">
    <section class="title">
        <h2 class="title2">Create a new repository</h2>
        <p>A repository contains all project files, including the revision history. Already have a project repository elsewhere?</p>
        <a href="#">Import a repository.</a>
    </section>
    
    <hr class="line">

    <form method="post">
        <section class="repo-detail">
            <fieldset>
                <legend>Repository owner and name</legend>

                <div class="owner-box">
                    <label for="owner">Owner *</label>
                    <select name="owner" id="owner">
                        <option value="Gabriel-Spinola" selected><img src="#"> Gabriel-Spinola ></option>
                        <option value="Test2"><img src="#"> Test2 ></option>
                    </select>
                </div>

                <span>/</span>

                <div class="repo-name">
                    <label>Repository name *</label>
                    <input type="text" name="repo-name" id="repo-name-input" value="<?php print $data['name'] ?? '' ?>" required>
                </div>
            </fieldset>

            <p>Great repository names are short and memorable. Need inspiration? How about <a href="#">reimagined-telegram?</a></p>

            <input type="text" name="repo-description" id="repo-description-input" value="<?php print $data['description'] ?? '' ?>">
        </section>

        <hr class="line">

        <section class="privacy">
            <div class="privacy-box">
                <label for="public">Public</label>
                <input 
                    type="radio"
                    id="public"
                    name="privacy"
                    value="0"
                    <?php echo ($data['privacy'] ?? '0') == '0' ? 'checked' : '' ?>
                >

                <span>Anyone on the internet can see this repository. You choose who can commit.</span>
                <svg>P</svg>
            </div>

            <div class="privacy-box">
                <label for="private">Private</label>
                <input 
                    type="radio"
                    id="private"
                    name="privacy" 
                    value="1"
                    <?php echo ($data['privacy'] ?? '') == '1' ? 'checked' : '' ?>
                >

                <span>You choose who can see and commit to this repository.</span>
                <svg>P</svg>
            </div>
        </section>

        <hr class="line">

        <section class="repo-initialization">
            <label for="readme">Initialize this repository with:</label>
            <div class="readme-check-box">
                <label for="readme">Add a README file</label>
                <input type="checkbox" id="readme" name="readme" value="false">

                <span>This is where you can write a long description for your project. <a href="#">Learn more about READMEs.</a></span>
            </div>

            <div class="gitignore-box">
                <label for="gitignore">Add .gitignore</label>
                <select name="gitignore" id="gitignore">
                    <option value="0" <?php print ($data['gitignore'] ?? 'selected') == '0' ? 'selected' : ''  ?>>None</option>
                    <option value="1" <?php print ($data['gitignore'] ?? '') == '1' ? 'selected' : '' ?>>AL</option>
                    <option value="999" <?php print ($data['gitignore'] ?? '') == '999' ? 'selected' : '' ?>>...</option>
                </select>

                <span>Choose which files not to track from a list of templates. <a href="#">Learn more about ignoring files.</a></span>
            </div>

            <div class="license-box">
                <label for="license">Add License</label>
                <select name="license" id="license">
                    <option value="1" <?php echo ($data['license'] ?? 'selected') == '1' ? 'selected' : '' ?>>None</option>
                    <option value="2" <?php echo ($data['license'] ?? '') == '2' ? 'selected' : '' ?>>GNU</option>
                    <option value="3" <?php echo ($data['license'] ?? '') == '3' ? 'selected' : '' ?>>MIT</option>
                </select>

                <span>Choose which files not to track from a list of templates. <a href="#">Learn more about ignoring files.</a></span>
            </div>
        </section>

        <hr class="line">

        <section class="warning">
            <span><svg>I</svg>You are creating a private repository in your personal account.</span>
        </section>

        <hr class="line">

        <section class="submit-box">
            <input type="submit" name="submit" value="<?php print $repoId != -1 ? 'Update Repository' : 'Create Repository' ?>">
        </section>
    </form>
</main>

<hr class="line">

