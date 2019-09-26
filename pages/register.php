<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </nav>

    <hr class="featurette-divider">

    <h4>Register</h4><br>
    <h3> </h3>
<!-- input  -->

    
    <form>
        <div class="form-group">
            <!-- <label for="InputEUsername">Username</label> -->
            <input type="username" class="form-control" id="InputUsername" placeholder="Username*">
        </div>
        <div class="form-group">
            <!-- <label for="InputPassword1">Password</label> -->
            <input type="password" class="form-control" id="InputPassword1" placeholder="Password*"
                aria-describedby="passwordHelpInline">
            <small id="passwordHelpInline" class="text-muted">
                Must be more then 8 characters long.
            </small>
        </div>
        <div class="form-group">
            <!-- <label for="InputPassword2">Repeat Password</label> -->
            <input type="password" class="form-control" id="InputPassword2" placeholder="Repeat Password*">
        </div>
        <div class="form-group">
            <input type="name" class="form-control" id="InputName" placeholder="Name*">
        </div>
        <div class="form-group">
            <input type="surname" class="form-control" id="InputSurName" placeholder="Surname">
        </div>
        <div>
            
            <select name="country" class="form-control" id="InputCountry" placeholder="Country*">
                

                <option class="nav-link disabled" value="" aria-disabled="true">Country*</option>
                <option value="">Latvija</option>
                <option value="">Lietuva</option>
                
                <option value="">Krievija</option>
                <option value="">Ungarija</option>
                <option value="">USA</option>
                <option value="">Cits variants</option>

            </select>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="Check1">
            </div>
            <div>  
            <label class="form-check-label" for="Check1">I accept T&C</label>
            
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <div>

    </div>
    <hr class="featurette-divider">

    <div class="form-group">
        
        <small id="infoHelpInline" class="text-muted">
            All fields with * must be filled in
        </small>

    </div>

