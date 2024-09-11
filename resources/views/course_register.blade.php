<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Language Course Registration</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Language Course Registration Form</h2>
        <form action="{{ url('/course/register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="language" class="form-label">Preferred Language</label>
                <select class="form-control @error('language') is-invalid @enderror" id="language" name="language">
                    <option value="">Select a language</option>
                    <option value="english" {{ old('language') == 'english' ? 'selected' : '' }}>English</option>
                    <option value="spanish" {{ old('language') == 'spanish' ? 'selected' : '' }}>Spanish</option>
                    <option value="french" {{ old('language') == 'french' ? 'selected' : '' }}>French</option>
                </select>
                @error('language')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>