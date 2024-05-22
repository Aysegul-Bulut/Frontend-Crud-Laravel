<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>KayıtOl</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    @if($errors->any())
                        <div class="col-12">
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                            @endforeach
                        </div>
                    @endif    

                    <div class="container mt-5">
                        @if(session()->has('error'))
                            <div class="alert alert-danger">{{session('error')}}</div>
                        @endif

                        @if(session()->has('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif  
                    </div>  
                </div>
                <form action="{{ route('register.post') }}" method="POST" class="ms-auto me-auto mt-5" style="width: 500px">
                    @csrf
                    <div class="heading">
                        <h2>KAYIT OL</h2>
                    </div>

                    <div class="actual-form">
                        <div class="input-wrap">
                            <input
                            type="text"
                            class="input-field"
                            placeholder="İsim"
                            id="isim"
                            name="name"
                            />
                        </div>

                        <div class="input-wrap">
                            <input
                            type="text"
                            class="input-field"
                            placeholder="Soyisim"
                            id="soyisim"
                            name="surname"
                            />
                        </div>

                        <div class="input-wrap">
                            <input
                            type="email"
                            class="input-field"
                            placeholder="E-mail"
                            id="email"
                            name="email"
                            />
                        </div>

                        <div class="input-wrap">
                            <input
                            type="password"
                            class="input-field"
                            placeholder="Şifre"
                            id="password"
                            name="password"
                            />
                        </div>

                        <div class="input-wrap">
                            <input
                            type="password"
                            minlength="4"
                            class="input-field"
                            placeholder="Şifre Tekrarı"
                            id="password_confirmation"
                            name="password_confirmation"
                            />
                        </div>
                        <input type="submit" value="Kayıt Ol" class="sign-btn">
                        <p class="mb-0">Hesabınız var mı? <a href="{{ route('login') }}" class="btn btn-link">Giriş yapın</a></p>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Javascript file -->
    <script src="app.js"></script>
</body>
</html>
