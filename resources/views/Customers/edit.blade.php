<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

<h1>Edit Customer</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('customers.update', $customer) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Name</label>
    <input type="text"
           name="name"
           value="{{ old('name', $customer->name) }}">

    <br><br>

    <label>Email</label>
    <input type="email"
           name="email"
           value="{{ old('email', $customer->email) }}">

    <br><br>

    <label>Phone</label>
    <input type="tel"
           name="phone"
           value="{{ old('phone', $customer->phone) }}"
           inputmode="numeric"
           pattern="[0-9]*"
           maxlength="15">

    <br><br>

    <label>Address</label>
    <input type="text"
           name="address"
           value="{{ old('address', $customer->address ?? '') }}">

    <br><br>

    <button type="submit">Update Customer</button>

</form>

<br>

<a href="{{ route('customers.index') }}">
    Back
</a>

</body>
</html>