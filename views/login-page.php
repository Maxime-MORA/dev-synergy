<div class="container d-flex justify-content-center" style="margin-top:50px;">
    <h3>Connexion</h3>
</div>


<div class="container" style="padding-bottom:25vh;padding-top:75px;">
    <div class="d-flex justify-content-center">
        <form style="width:75%;" action="verification-administrateur" method="post">
            <div class="input-group mb-4">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" name="email" class="form-control input_user" value="" placeholder="Votre adresse e-mail">
            </div>
            <div class="input-group mb-4">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" name="password" class="form-control input_pass" value="" placeholder="Votre mot de passe">
            </div>
            <div class="d-flex justify-content-center mt-4 login_container">
                <button type="submit" class="btn btn-primary mb-2">Connexion</button>
            </div>
        </form>
    </div>
    <div class="mt-5">
        <div class="d-flex justify-content-center links">
            <a href="password-lost">Vous avez oublié votre mot de passe ?</a>
        </div>
    </div>
</div>