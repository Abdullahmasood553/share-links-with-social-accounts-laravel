
    @extends('layouts.master')
    @section('content')

    <div class="container">
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>

          <tbody>
            @foreach($users as $key)
              <tr>
                <td>{{ $key->id }}</td>
                <td>{{ $key->name }}</td>
                <td>{{ $key->email }}</td>
                <td><a href="{{ route('user_detail', $key->id) }}" class="user_detail"><i class="fas fa-user"></i></a></td>
              </tr>
            @endforeach
          </tbody>
        </thead>
      </table>
    </div>
@endsection