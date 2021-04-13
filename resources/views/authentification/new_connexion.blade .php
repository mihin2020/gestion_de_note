<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/img.png">
        </div>
        <div class="login-content">
            <form action="/new_identify" method="post">
            {{@csrf_field()}}
                <img src="img/avatar.svg">
                <h5 class="title">Veuillez entrer vos nouveaux identifiants</h5>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                               @if($errors->has('email'))
                                    <p class="font-weight-bold text-info ">{{$errors->first('email') }}</p> 
                                @endif
                        <h5>Nouvel Email</h5>
                        <input type="text" name="email" value="" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                                @if($errors->has('password'))
                                    <p class="font-weight-bold text-info ">{{$errors->first('password') }}</p> 
                                @endif
                        <h5>Nouveau Mot de passe</h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                                @if($errors->has('password'))
                                    <p class="font-weight-bold text-info ">{{$errors->first('password') }}</p> 
                                @endif
                        <h5>Confirmer Mot de passe</h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>
                <input type="submit" class="btn" value="Se connecter">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>