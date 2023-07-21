
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Date of Birth:</strong> {{ $user->dob }}</p>

    <h2>Interests:</h2>
    @if ($user->interests->count() > 0)
        <ul>
            @foreach ($user->interests as $interest)
                <li>{{ $interest->name }}</li>
            @endforeach
        </ul>
    @else
        <p>No interests found.</p>
    @endif
</body>
</html>