@extends('emails.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Email Collection</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-sm btn-success" href="{{ route('emails.create') }}">Add Email</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{ $message }}</p>
        </div>
    @endif
    <?php $i = ''; ?>
    <table class="table table-borderless table-sm">
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
                    <form action="{{ route('emails.destroy', $mail->id) }}" method="POST">
                        <a class="btn btn-primary btn-sm" href="{{ route('emails.edit', $mail->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{-- {!! $emails->links() !!} --}}

@endsection
