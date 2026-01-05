<a href= "{{ route('customers.create') }}" >Add New Customer</a>
</br></br>

 @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->surname }}</td>        
        </tr>
        <a href="{{ route('customers.show', ['customer' => $customer->id]) }}"> {{ $customer->name }} {{ $customer->surname }}</a>
        <br/>
        <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}">Edit</a>



        
<form method="POST" action="{{ route('customers.destroy', ['customer' => $customer->id])) }}">
    @csrf
    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" name="submit" value="Delete Customer">
</form>
<br/> 
@endforeach

