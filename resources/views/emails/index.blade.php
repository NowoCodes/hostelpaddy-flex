@extends('emails.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Email Collection</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('emails.create') }}">Add Email</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($emails as $mail)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $mail->email }}</td>
            <td>
                <form action="{{ route('emails.destroy',$mail->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('emails.show',$mail->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('emails.edit',$mail->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $emails->links() !!}

@endsection