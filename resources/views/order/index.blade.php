<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Scout Full Text Search Tutorial - Shouts.dev</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Laravel 9 Scout Full Text Search Tutorial - Shouts.dev</h1>

    <form method="GET">
        <div class="input-group mb-3">
            <input
                type="text"
                name="search"
                value="{{ request()->get('search') }}"
                class="form-control"
                placeholder="Search..."
                aria-label="Search"
                aria-describedby="button-addon2">
            <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
        </div>
    </form>

    <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->details }}</td>
                <td>{{ $order->client }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$orders->links()}}
</div>

</body>

</html>