<?php include "includes/header.html" ?>
<?php include "includes/breadcrumbs.html" ?>

<div class="main-section">
    <div class="middle-section">
        <div class="general-info">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget orci tincidunt, scelerisque leo a, finibus augue. Vestibulum placerat quis mi sed blandit. Maecenas est nibh, varius vitae tellus vitae, vehicula cursus orci. Sed tristique leo placerat, viverra est id, consectetur elit. Praesent non urna dapibus, faucibus risus eget, euismod libero. Sed ac scelerisque lectus. Vestibulum viverra placerat maximus.
            </p>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="nav nav-tabs flex-column nav-fill w-100">
                <li class="nav-item"><a class="nav-link to-personal">Personal<br>Information</a></li>
                <li class="nav-item"><a class="nav-link to-language">Language<br>Proficiency</a></li>
                <li class="nav-item"><a class="nav-link to-academic">Academic<br>Qualification</a></li>
                <li class="nav-item"><a class="nav-link to-experience">Professional<br>Experiences</a></li>
                <li class="nav-item"><a class="nav-link to-expertise">Areas of<br>Expertise</a></li>
                <li class="nav-item"><a class="nav-link to-publications active">Research & <br>Publicaiton</a></li>
                <li class="nav-item"><a class="nav-link">Preview &<br>Submit</a></li>
            </ul>
        </nav>
        <div class="form-container">
            <div class="form-headers text-center">
                <h2>Research and Publications</h2>
            </div>
            <form action="" class="">
                <div class="justify-content-center row">
                    <div class="mb-3 col-lg-8">
                        <label for="researchInterest">Research Interests</label>
                        <textarea name="researchInterest" class="form-control" id="" cols="30" rows="10"></textarea>
                        <small><em>(separate research interests with a comma if you have more than one)</em></small>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="mb-3 col-lg-8">
                        <label for="numberOfPublications">How many publications do you have in your field of expertise?</label>
                        <input type="number" class="form-control" name="numberOfPublications" min="0" step="1" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 form-btns">
                        <button type="button" class="btn btn-success btn-lg to-expertise"><i class="fas fa-arrow-left fa-xs"></i> Previous section</button>
                        <button type="type" class="btn btn-success btn-lg">Next section <i class="fas fa-arrow-right fa-xs"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "includes/footer.html" ?>