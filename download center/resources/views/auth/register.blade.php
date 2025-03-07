
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت‌نام</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 40px;
            direction: rtl;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            font-size: 1rem;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .invalid-feedback {
            font-size: 0.9rem;
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>فرم ثبت‌نام</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name" class="form-label">نام</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="form-label">ایمیل</label>
            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
            @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" class="form-label">رمز عبور</label>
            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
            @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation" class="form-label">تایید رمز عبور</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
        </div>

        <div>
            <button type="submit" class="btn-primary">ثبت‌نام</button>
        </div>
    </form>
</div>

</body>
</html>
