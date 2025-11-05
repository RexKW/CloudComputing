<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Cloud Computing 2025</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 420px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            width: 50px;
            height: 50px;
            margin: 0 auto 20px;
        }

        .header h2 {
            color: #ffffff;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .header h3 {
            color: #94a3b8;
            font-size: 14px;
            font-weight: 400;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-success {
            background: #d1fae5;
            border: 1px solid #6ee7b7;
            color: #065f46;
        }

        .alert-error {
            background: #fee2e2;
            border: 1px solid #fca5a5;
            color: #991b1b;
        }

        .form-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #e2e8f0;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: #ffffff;
            font-size: 14px;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-group input::placeholder {
            color: #64748b;
        }

        .form-group input:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .form-group input:hover {
            border-color: rgba(255, 255, 255, 0.2);
        }

        /* Date input specific styling */
        .form-group input[type="date"] {
            color-scheme: dark;
        }

        .form-group input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
            cursor: pointer;
        }

        .submit-btn {
            width: 100%;
            padding: 12px 16px;
            background: #6366f1;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 8px;
        }

        .submit-btn:hover {
            background: #818cf8;
            transform: translateY(-1px);
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .footer-text {
            text-align: center;
            margin-top: 24px;
            color: #94a3b8;
            font-size: 14px;
        }

        .footer-text a {
            color: #a5b4fc;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .footer-text a:hover {
            color: #c7d2fe;
        }

        /* Responsive design */
        @media (max-width: 480px) {
            .form-card {
                padding: 24px;
            }

            .header h2 {
                font-size: 20px;
            }
        }

        /* Password strength indicator (optional enhancement) */
        .password-hint {
            font-size: 12px;
            color: #94a3b8;
            margin-top: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error" role="alert">
                {{ session('error') }}
            </div>
        @endif

        @if(session('failUser'))
            <div class="alert alert-error" role="alert">
                {{ session('failUser') }}
            </div>
        @endif

        @if(session('failInvalidCapitalPass'))
            <div class="alert alert-error" role="alert">
                {{ session('failInvalidCapitalPass') }}
            </div>
        @endif

        @if(session('failInvalidConfirmPass'))
            <div class="alert alert-error" role="alert">
                {{ session('failInvalidConfirmPass') }}
            </div>
        @endif

        <div class="header">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" 
                 alt="Logo" class="logo" />
            <h2>Cloud Computing 2025</h2>
            <h3>Create your account</h3>
        </div>

        <div class="form-card">
            <form action="{{ route('register') }}" method="POST" autocomplete="off">
                @csrf
                @method('post')
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" 
                           type="email" 
                           name="email" 
                           placeholder="you@example.com"
                           required 
                           autocomplete="email" />
                </div>

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" 
                           type="text" 
                           name="name" 
                           placeholder="John Doe"
                           required 
                           autocomplete="name" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" 
                           type="password" 
                           name="password" 
                           placeholder="••••••••"
                           required 
                           autocomplete="new-password" />
                    <div class="password-hint">Must contain at least one capital letter</div>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input id="confirmPassword" 
                           type="password" 
                           name="confirmPassword" 
                           placeholder="••••••••"
                           required 
                           autocomplete="new-password" />
                </div>

                <div class="form-group">
                    <label for="birthdate">Birthdate</label>
                    <input id="birthdate" 
                           type="date" 
                           name="birthdate" 
                           required />
                </div>

                <button type="submit" class="submit-btn">Create Account</button>
            </form>

            <p class="footer-text">
                Already a member?
                <a href="/">Sign In</a>
            </p>
        </div>
    </div>
</body>

</html>