<?php include "includes/header.html" ?>
<?php include "includes/breadcrumbs.html" ?>

<div class="main-section">
    <div class="middle-section">
    <div class="general-info">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget orci tincidunt, scelerisque leo a, finibus augue. Vestibulum placerat quis mi sed blandit. Maecenas est nibh, varius vitae tellus vitae, vehicula cursus orci. Sed tristique leo placerat, viverra est id, consectetur elit. Praesent non urna dapibus, faucibus risus eget, euismod libero. Sed ac scelerisque lectus. Vestibulum viverra placerat maximus.
        </p>
        <!-- vertical navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="nav nav-tabs nav-fill w-100">
                        <li class="nav-item"><a class="nav-link to-personal">Personal<br>  Information</a></li>
                        <li class="nav-item"><a class="nav-link to-language">Language<br>  Proficiency</a></li>
                        <li class="nav-item"><a class="nav-link to-academic">Academic<br>  Qualification</a></li>
                        <li class="nav-item"><a class="nav-link to-experience">Professional<br>  Experiences</a></li>
                        <li class="nav-item"><a class="nav-link to-expertise">Areas of<br>  Expertise</a></li>
                        <li class="nav-item"><a class="nav-link to-publications">Research &<br>  Publicaiton</a></li>
                        <li class="nav-item"><a class="nav-link">Preview &<br>  Submit</a></li>
                </ul>
            </div>
        </nav>

    </div>
    <div class="form-container" id="cont">
        <div class="form-headers text-center">
            <h2>Language Proficiency</h2>
            <!-- TODO make info icon span both lines of text -->
            <p><em><i class="fa fa-info-circle"></i>List as many languages that you can speak <br> Rate your proficiency of the languages from well to fair</em></p>
        </div>
        <div class="alt-language">
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
                    <tr id="lang-row-1">
                        <td>
                            <input type="text" name="" id="" class="form-control">
                        </td>
                        <td>
                            <select name="" id="" class="form-select language-proficiency-list">
                                <option selected disabled>Select One</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="" class="form-select language-proficiency-list">
                                <option selected disabled>Select One</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="" class="form-select language-proficiency-list">
                                <option selected disabled>Select One</option>
                            </select>
                        </td>
                        <td>
                            <div class="form-check">
                                <label for="" class="form-check-label">
                                    <input name="motherTounge" type="checkbox" class="form-check-input">Working Knowledge</label>
                            </div>
                            <div class="form-check">
                                <label for="" class="form-check-label"><input type="checkbox" class="form-check-input">Mother tongue</label>
                            </div>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-outline-danger btn-sm row-remove"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="row">
            <div class="mb-3 form-btns">
                <button type="button" class="btn btn-primary btn-lg" id="alt-add-lang"><i class="fas fa-plus fa-xs"></i> Add another language</button>
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