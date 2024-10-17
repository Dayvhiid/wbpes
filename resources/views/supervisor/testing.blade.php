<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Add Bootstrap CDN in your layout file (e.g., layouts/app.blade.php) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data" class="p-4 rounded shadow-lg bg-light">
        @csrf
        <div class="mb-3">
            <label for="file" class="form-label">Upload File</label>
            <input type="file" name="file" class="form-control" id="file">
        </div>
    
        <button type="submit" class="btn btn-primary w-100">Import Students</button>
    </form>
    
</body>
</html>