<div>
<h1>Hello, {{ $data['name'] }}</h1>
    <p>Age: {{ $data['age'] }}</p>
    <h2>Skills:</h2>
    <ul>
        @foreach($data['skills'] as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
</div>
