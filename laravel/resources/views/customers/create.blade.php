

<h1>Add New Customer</h1>


<form method="POST" action="{{ route('customers.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname" required>
    <br>
    <label for="gender">gender:</label>
    <input type="text" id="gender" name="gender" required>
    <br>
    <label for="birthYear">birthYear:</label>
    <input type="text" id="birthYear" name="birthYear" required>
    <br>
    <input type="submit" name="submit" value="Add Customer">
</form>