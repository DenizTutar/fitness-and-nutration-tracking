

<h1>Edit Customer</h1>

@csrf
<form method="POST" action="{{ route('customers.update', ['customer' => $customer->id]) }}">
    <input type="hidden" name="_method" value="PUT">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $customer->name }}" required>
    <br>
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname" value="{{ $customer->surname }}" required>
    <br>
    <label for="gender">gender:</label>
    <input type="text" id="gender" name="gender" value="{{ $customer->gender }}" required>
    <br>
    <label for="birthYear">birthYear:</label>
    <input type="text" id="birthYear" name="birthYear" value="{{ $customer->birthYear }}" required>
    <br>
    <input type="submit" name="submit" value="Update Customer">
</form>