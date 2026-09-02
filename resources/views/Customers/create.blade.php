<form action="{{ route('customers.store') }}" method="POST">
    @csrf

    <label>Name</label>
    <input type="text" name="name" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Phone</label>
    <input type="tel" name="phone" inputmode="numeric" pattern="[0-9]*" maxlength="15">

    <label>Address</label>
    <input type="text" name="address">

    <button type="submit">Create Customer</button>
</form>