<h3 class="page-title text-center">Search for user by ID</h3>

@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
<h3 class="page-title text-center">User found: {{ $user->name }}</h3>
<b>Email</b>: {{ $user->email }}
<br>
<b>Registered on</b>: {{ $user->created_at }}