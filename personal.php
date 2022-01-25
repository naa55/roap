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
            <li class="nav-item"><a class="nav-link active to-personal">Personal<br> Information</a></li>
                    <li class="nav-item"><a class="nav-link to-language">Language<br> Proficiency</a></li>
                    <li class="nav-item"><a class="nav-link to-academic">Academic<br> Qualification</a></li>
                    <li class="nav-item"><a class="nav-link to-experience">Professional<br> Experiences</a></li>
                    <li class="nav-item"><a class="nav-link to-expertise">Areas of<br> Expertise</a></li>
                    <li class="nav-item"><a class="nav-link to-publications">Research &<br> Publicaiton</a></li>
                    <li class="nav-item"><a class="nav-link">Preview &<br>Submit</a></li>
            </ul>
        </nav>
        <!-- horizontal navigation -->
     

        <div class="form-container" id='conts'>
            <div class="form-headers text-center">
                <h2>Personal Information</h2>
            </div>
            <form action="language.php" method="post" class="needs-validation">
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Title</label>
                        <select class="form-select" aria-label="select title">
                            <option disabled selected>Select One</option>
                            <option value="Ms">Ms</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Mr">Mr</option>
                            <option value="Dr">Dr</option>
                            <option value="Prof">Prof</option>
                            <option value="Rev">Rev</option>
                            <option value="Bishop">Bishop</option>
                            <option value="ING">ING</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-8">
                        <label for="validationCustom01" class="form-label">Surname</label>
                        <input type="text" name="surname" class="form-control" placeholder="Surname" id="validationCustom01">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="otherName" class="form-label">Other Names</label>
                    <input type="text" name="otherName" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" class="form-check-input" id="Female">
                            <label for="Female" class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" class="form-check-input">
                            <label for="Male" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" class="form-check-input">
                            <label for="Other" class="form-check-label">Other</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" class="form-check-input">
                            <label for="preferNotToSay" class="form-check-label">Prefer not to say</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="countryOfOrigin" class="form-label">Country of Origin</label>
                        <select name="countryOfOrigin" class="form-select" id="country-of-origin"></select>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="countryOfResidence" class="form-label">Country of Residence</label>
                        <select name="" class="form-select" id="country-of-residence"></select>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <!-- pre filled with email from sign up -->
                        <label for="email" class="form-label">Email</label>
                        <input type="email" readonly name="email" class="form-control" id="" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">This is the same email you signed up with</small>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" name="phoneNumber" class="form-control" id="phone">
                    </div>
                </div>
                <div class="mb-3 form-btns">
                    <button type="submit" class="btn btn-success btn-lg">Next section <i class="fas fa-arrow-right fa-xs"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "includes/footer.html" ?>