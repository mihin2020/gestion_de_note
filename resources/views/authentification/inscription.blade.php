<!DOCTYPE html>
<html>

<head>
    <title>Incription</title>
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
            <form action="/inscription" method="post">
            {{@csrf_field()}}
                <img src="img/avatar.svg">
                <h2 class="title">Bienvenue</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            @if($errors->has('nom'))
                            <p class="font-weight-bold text-info">{{$errors->first('nom') }}</p> 
                            @endif
                        <h5>Nom</h5>
                        <input type="text" name="nom" value="{{old('nom')}}" class="input">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                           @if($errors->has('prenom'))
                            <p class="font-weight-bold text-info">{{$errors->first('prenom') }}</p> 
                            @endif
                        <h5>Prénom</h5>
                        <input type="text" name="prenom" value="{{old('prenom')}}" class="input">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                           @if($errors->has('email'))
                            <p class="font-weight-bold text-info">{{$errors->first('email') }}</p> 
                            @endif
                        <h5>Email</h5>
                        <input type="text" name="email" value="{{old('email')}}" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        @if($errors->has('password'))
                         <p class="font-weight-bold text-info">{{$errors->first('password') }}</p> 
                        @endif
                        <h5>Mot de passe</h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5> Confirmer de mot de passe</h5>
                        <input type="password" name="password_confirm" class="input">
                    </div>
                </div>
                <input type="submit" class="btn" value="S'inscrire">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>