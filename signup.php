<?php include "includes/header.html" ?>

<div class="main-section">
    <div class="middle-section form-container">
        <div class="form-headers text-center">
            <h2>Sign Up</h2>

            <p><em><i class="fa fa-info-circle"></i>Already created an account, <a class="to-log-in" rel="next">Sign in!</a></em></p>
        </div>
        <form action="">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="vpassword" class="form-label">Verify Password</label>
                <input type="password" name="vPassword" class="form-control">
            </div>
            <div class="mb-3 form-btns">
                <button type="submit" class="btn btn-success btn-lg">Sign up</button>
            </div>
        </form>
    </div>
</div>
<?php include "includes/footer.html" ?>