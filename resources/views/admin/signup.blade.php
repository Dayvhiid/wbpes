<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Sign Up/Sign In</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action=" {{route('register.data')}}" method="POST">
                @csrf
                @method('POST')
                <h1>Create Account</h1>
                {{-- <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div> --}}
                {{-- <span>or use your email for registeration</span> --}}
                <input type="text" placeholder="Name" name="name">
                <input type="password" placeholder="password" name="password">
                <input type="password" placeholder="Confirm" name="confirm_password">
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="{{ route('register.check')}}" method="POST">
                @csrf
                @method('POST')
                <h1>Sign In</h1>
                {{-- <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div> --}}
                {{-- <span>or use your email password</span> --}}
                <input type="text" placeholder="Enter your name" name="name">
                <input type="password" placeholder="Enter your Password" name="password">
                <a href="#">Forget Your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your  details</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Admin</h1>
                    <p>Sign in to your  account</p>
                    {{-- <button class="hidden" id="register">Sign Up</button> --}}
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
    </script>
</body>

</html>