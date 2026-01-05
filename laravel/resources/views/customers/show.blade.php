Customer <br/>
Name: {{ $customer->name }} <br/>
Surname: {{ $customer->surname }} <br/>
Gender: {{ $customer->gender }} <br/>
Birth Year: {{ $customer->birthYear }} <br/>    

<a href="{{ route('customers.index') }}">Back to Customers List</a>