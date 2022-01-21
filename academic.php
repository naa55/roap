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
                <li class="nav-item"><a class="nav-link to-academic active">Academic <br>Qualification</a></li>
                <li class="nav-item"><a class="nav-link to-experience">Professional<br>Experiences</a></li>
                <li class="nav-item"><a class="nav-link to-expertise">Areas of<br>Expertise</a></li>
                <li class="nav-item"><a class="nav-link to-publications">Research &<br>Publicaiton</a></li>
                <li class="nav-item"><a class="nav-link">Preview &<br>Submit</a></li>
            </ul>
        </nav>
        <div class="form-container">
            <div class="form-headers text-center">
                <h2>Academic Qualifications</h2>
                <!-- TODO make info icon span both lines of text -->
                <p><em><i class="fa fa-info-circle"></i>List all your higher education qualifications</em></p>
            </div>
            <form action="" class="">
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label>Degree Level</label>
                        <select name="degreeLevel" id="" class="form-select" aria-label="select degree level">
                            <option disabled selected>Select One</option>
                            <option value="bachelors">Bachelors</option>
                            <option value="masters">Masters</option>
                            <option value="Doctrate">Doctrate</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-8">
                        <label for="fieldOfStudy">Field of Study</label>
                        <input type="text" name="fieldOfStudy" class="form-control" id="">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="institutionName">Instituation Name</label>
                    <input type="text" name="institutionName" class="form-control" id="">
                </div>

                <div class="row">
                    <div class="mb-3 form-btns">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-plus fa-xs"></i> Add another qualificaiton</button>
                    </div>
                    <div class="mb-3 form-btns">
                        <button type="button" class="btn btn-success btn-lg to-language"><i class="fas fa-arrow-left fa-xs"></i> Previous section</button>
                        <button type="button" class="btn btn-success btn-lg to-experience">Next section<i class="fas fa-arrow-right fa-xs"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "includes/footer.html" ?>