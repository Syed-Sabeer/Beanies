<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Country</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #121212, #3B3B58);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .modal {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .modal-content {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(25px);
            padding: 40px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
            width: 420px;
            animation: slideUp 0.4s ease-in-out;
        }
        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
            max-width: 120px;
        }
        h3 {
            margin-bottom: 20px;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        button {
            background: linear-gradient(135deg, #FFB703, #FD8204);
            border: none;
            padding: 14px;
            border-radius: 12px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
            color: white;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0px 5px 12px rgba(0, 0, 0, 0.3);
            text-transform: uppercase;
        }
        button:hover {
            background: #E67E22;
            transform: scale(1.08);
            box-shadow: 0px 5px 20px rgba(255, 183, 7, 0.7);
        }
        .error-message {
            margin-top: 18px;
            color: #FF4747;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="modal-content">
            <img src="{{ asset('assetsMain/images/logo-light.png') }}" alt="Logo" class="logo">
            <h3>Select Your Country</h3>
            <form action="{{ route('set.country') }}" method="POST">
                @csrf
                <div class="button-container">
                    <button type="submit" name="country" value="USA">🇺🇸 USA</button>
                    <button type="submit" name="country" value="CANADA">🇨🇦 Canada</button>
                </div>
            </form>
            @if(session('error'))
                <p class="error-message">{{ session('error') }}</p>
            @endif
        </div>
    </div>
</body>
</html>