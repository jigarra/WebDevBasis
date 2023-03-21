<!-- form start -->
<div class="container-fluid bg-light">
    <form name="form1" action="./connection/insertdata.php" method="post" class="row g-3 col-6 mx-auto mt-5"
        enctype="multipart/form-data">
        <h3 class="mx-auto">Information Form</h3>
        <div class="row g-3">
            <div class="col">
                <input type="text" class="form-control" name="fname" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="lname" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" name="address2" class="form-control" id="inputAddress2"
                placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Country</label>
            <select id="inputState" name="country" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" name="state" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">City</label>
            <select id="inputState" name="city" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="input-group">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
            <input type="file" class="form-control" name="choosefile" id="inputGroupFile02">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" name="zipcode" class="form-control" id="inputZip" maxlength="6" minlength="6"><br>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" name="save" value="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="./js/main.js"></script>
<!-- form end -->