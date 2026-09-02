<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
</head>
<body>

<h1>Customer Details</h1>

<p><strong>Name:</strong> {{ $customer->name }}</p>
<p><strong>Email:</strong> {{ $customer->email }}</p>
<p><strong>Phone:</strong> {{ $customer->phone ?? 'N/A' }}</p>
<p><strong>Address:</strong> {{ $customer->address ?? 'N/A' }}</p>

<hr>

<a href="{{ route('customers.edit', $customer) }}">Edit</a>
|
<a href="{{ route('customers.index') }}">Back to Customers</a>

</body>
</html>