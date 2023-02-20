@foreach($employee as $employees)
    <tr>
        <td>{{ $employees->firstname }}</td>
        <td>{{ $employees->lastname }}</td>
        <td>
            <a href="" class='btn btn-success' data-id=''>Edit</a>
            <a href='' class='btn btn-danger' data-id=''>Delete</a>
        </td>
    </tr>
@endforeach