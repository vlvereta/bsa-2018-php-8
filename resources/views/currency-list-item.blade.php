<tr>
    <td>
        <img src="{{ $currency['logo_url'] }}">
    </td>
    <td>
        <h4><a href="{{ route('currency', ['id' => $currency['id']]) }}">{{ $currency['title'] }}</a></h4>
    </td>
    <td>
        <h4>{{ $currency['short_name'] }}</h4>
    </td>
    <td>
        <h4>{{ $currency['price'] }}</h4>
    </td>
    <td>
        <a class="btn btn-warning" href="{{ route('edit-currency', ['id' => $currency['id']]) }}" role="button">Edit</a>
    </td>
    <td>
        <form action="{{ route('delete-currency', ['id' => $currency['id']]) }}" method="POST">
            {{ method_field('delete') }}
            {{ csrf_field() }}
            <button class="btn btn-danger delete-button" type="submit">Delete</button>
        </form>
    </td>
</tr>
