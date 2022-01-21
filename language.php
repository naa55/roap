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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="nav nav-tabs nav-fill w-100">
                    <li class="nav-item"><a class="nav-link active to-language">Language<br> Proficiency</a></li>
                    <li class="nav-item"><a class="nav-link to-language-alt">Language<br> Proficiency alt</a></li>
                    <li class="nav-item"><a class="nav-link to-personal">Personal<br> Information</a></li>
                    <li class="nav-item"><a class="nav-link to-academic">Academic<br> Qualification</a></li>
                    <li class="nav-item"><a class="nav-link to-experience">Professional<br> Experiences</a></li>
                    <li class="nav-item"><a class="nav-link to-expertise">Areas of<br> Expertise</a></li>
                    <li class="nav-item"><a class="nav-link to-publications">Research &<br> Publicaiton</a></li>
                    <li class="nav-item"><a class="nav-link">Preview &<br>Submit</a></li>
                </ul>
            </div>
        </nav>
        <div class="form-container">
        <div class="form-headers text-center">
            <h2>Language Proficiency</h2>
            <!-- TODO make info icon span both lines of text -->
            <p><em><i class="fa fa-info-circle"></i>List as many languages that you can speak <br> Rate your proficiency of the languages from well to fair</em></p>
        </div>

        <!-- added languages -->
        <div class=" d-none added-lang">
            <table class="table table-hover align-middle table-sm">
                <thead>
                    <tr>
                        <th>Language</th>
                        <th>Read</th>
                        <th>Write</th>
                        <th>Speak</th>
                        <th>Knowledge Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>English</td>
                        <td>Very Well</td>
                        <td>Well</td>
                        <td>Fair</td>
                        <td>N/A</td>
                        <td>
                            <button class="btn btn-sm btn-outline-dark edit-lang"><i class="fas fa-pen"></i></button>
                            <button class="btn btn-outline-danger btn-sm del-lang"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <hr>
            <br>

        </div>

        <form action="" class="">
            <div class="mb-3 row justify-content-center">
                <label for="language" class="col-sm-2">Language</label>
                <div class="col-sm-4">
                    <input type="text" name="language" class="form-control" id="">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="readProficiency" class="col-sm-2">Read</label>
                <div class="form-check col-sm-2">
                    <input type="radio" name="readProficiency" id="" class="form-check-input"><label for="veryWell" class="form-check-label"> Very Well</label>
                </div>
                <div class="form-check col-sm-2">
                    <input type="radio" name="readProficiency" id="" class="form-check-input"><label for="well" class="form-check-label"> Well</label>
                </div>
                <div class="form-check col-sm-2">
                    <input type="radio" name="readProficiency" id="" class="form-check-input"><label for="fair" class="form-check-label"> Fair</label>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="writeProficiency" class="col-sm-2">Write</label>
                <div class="form-check col-sm-2">
                    <input type="radio" name="writeProficiency" id="" class="form-check-input"><label for="veryWell" class="form-check-label" class="form-check-label">Very Well</label>
                </div>
                <div class="form-check col-sm-2">
                    <input type="radio" name="writeProficiency" id="" class="form-check-input"><label for="well" class="form-check-label" class="form-check-label">Well</label>
                </div>
                <div class="form-check col-sm-2">
                    <input type="radio" name="writeProficiency" id="" class="form-check-input"><label for="fair" class="form-check-label" class="form-check-label">Fair</label>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="speakProficiency" class="col-sm-2">Speak</label>
                <div class="form-check col-sm-2">
                    <input type="radio" name="speakProficiency" id="" class="form-check-input"><label for="veryWell" class="form-check-label">Very Well</label>
                </div>
                <div class="form-check col-sm-2">
                    <input type="radio" name="speakProficiency" id="" class="form-check-input"><label for="well" class="form-check-label">Well</label>
                </div>
                <div class="form-check col-sm-2">
                    <input type="radio" name="speakProficiency" id="" class="form-check-input"><label for="fair" class="form-check-label">Fair</label>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="knowledgeType" class="col-sm-3">Knowledge Type</label>
                <div class="form-check col-sm-3">
                    <input type="checkbox" name="workingKnowledge" id="" class="form-check-input"><label for="workingKnowledge" class="form-check-label">Working Knowledge</label>
                </div>
                <div class="form-check col-sm-3">
                    <input type="checkbox" name="motherTounge" id="" class="form-check-input"><label for="motherTounge" class="form-check-label">Mother tongue</label>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 form-btns">
                    <button type="button" class="btn btn-primary btn-lg" id="show-added-langs"><i class="fas fa-plus fa-xs"></i> Add another language</button>
                </div>
                <div class="mb-3 form-btns">
                    <button type="button" class="btn btn-success btn-lg to-personal"><i class="fas fa-arrow-left fa-xs"></i> Previous section</button>
                    <button type="button" class="btn btn-success btn-lg to-academic">Next section <i class="fas fa-arrow-right fa-xs"></i></button>
                </div>
            </div>
        </form>
    </div>

    </div>


    
   
</div>
<?php include "includes/footer.html" ?>