<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>

<h1>Customer Management System</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('customers.create') }}">Add Customer</a>

<hr>

@forelse($customers as $customer)

    <h3>{{ $customer->name }}</h3>

    <p>Email: {{ $customer->email }}</p>

    <p>Phone: {{ $customer->phone }}</p>

    <a href="{{ route('customers.show', $customer) }}">
        View
    </a>

    |

    <a href="{{ route('customers.edit', $customer) }}">
        Edit
    </a>

    <form action="{{ route('customers.destroy', $customer) }}"
          method="POST"
          style="display:inline">

        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>

    <hr>

@empty

    <p>No customers found.</p>

@endforelse

</body>
</html>