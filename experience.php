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
            <ul class="nav nav-tabs nav-fill w-100">
                <li class="nav-item"><a class="nav-link to-personal">Personal<br>Information</a></li>
                <li class="nav-item"><a class="nav-link to-language">Language<br>Proficiency</a></li>
                <li class="nav-item"><a class="nav-link to-academic">Academic<br>Qualification</a></li>
                <li class="nav-item"><a class="nav-link to-experience active">Professional <br>Experiences</a></li>
                <li class="nav-item"><a class="nav-link to-expertise">Areas of<br>Expertise</a></li>
                <li class="nav-item"><a class="nav-link to-publications">Research &<br>Publicaiton</a></li>
                <li class="nav-item"><a class="nav-link">Preview &<br>Submit</a></li>
            </ul>
        </nav>
        <div class="form-container">
            <div class="form-headers text-center">
                <h2>Professional Experience</h2>
                <!-- TODO make info icon span both lines of text -->
                <p><em><i class="fa fa-info-circle"></i>List all your relevant professional experiences beginning with the most recent</em></p>
            </div>
            <form action="" class="">
                <div class="row">
                    <div class="mb-3 col-xl-6">
                        <label for="occupation">Occupation</label>
                        <input type="text" name="occupation" class="form-control" id="">
                    </div>
                    <div class="mb-3 col-xl-6">
                <label for="organisationName">Organisation Name</label>
                <input type="text" name="organisationName" class="form-control" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 form-btns">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-plus fa-xs"></i> Add another experience</button>
                    </div>
                    <div class="mb-3 form-btns">
                        <button type="button" class="btn btn-success btn-lg to-academic"><i class="fas fa-arrow-left fa-xs"></i> Previous section</button>
                        <button type="button" class="btn btn-success btn-lg to-expertise">Next section <i class="fas fa-arrow-right fa-xs"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "includes/footer.html" ?>