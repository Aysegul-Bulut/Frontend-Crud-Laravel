<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Hoşgeldiniz</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="form-wrap">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            
            <form action="{{ route('login.form') }}" method="POST" id="userForm" class="needs-validation">
            @csrf
            <div class="heading">
              <h2>Hoşgeldiniz</h2>
            </div>
        
            <div class="input-wrap">
                <input
                    type="email"
                    class="input-field"
                    name="email" 
                    placeholder="E-mail"
        
                >
            </div>

            <div class="input-wrap">
                <input
                    type="password"
                    class="input-field"
                    name="password" 
                    placeholder="Şifre"

                >
            </div>
            <input type="submit" value="Giriş yap" class="sign-btn" />
            <p>Hesabınız yok mu?</p> 
            <a href="{{ route('register.post') }}" class="btn btn-link">Kayıt olun</a>
          </form>
        </div>
      </div>
    </div>
  </main>

  <script src="app.js"></script>
</body>
</html>

