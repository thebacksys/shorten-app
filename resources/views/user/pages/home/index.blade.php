@extends('user.layouts.app')
@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Home</h1>
    </div>
    <div class="container">
        <form class="row g-3" action="{{ route('user.storeShortenLink') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="origin_link" name="origin_link"
                    placeholder="Enter the link here">
                <button class="btn btn-primary" type="submit">Shorten
                    URL</button>
            </div>
        </form>
        <br>
        <table id="Transction" class="table">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Short Link
                    </th>
                    <th>
                        Origin Link
                    </th>
                    <th>
                        Created At
                    </th>
                </tr>
            </thead>
        </table>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            initDatatable();
        });

        function initDatatable() {
            $('#Transction').DataTable({
                processing: true,
                serverSide: true,
                aaSorting: [],
                ajax: {
                    url: "{{ route('user.home') }}",
                    type: "GET",
                    data: {
                        _token: "{{ csrf_token() }}",
                    }
                },
                columns: [{
                        data: 'id',
                        orderable: true
                    },
                    {
                        data: 'short_link',
                        orderable: true
                    },
                    {
                        data: 'origin_link',
                        orderable: true
                    },
                    {
                        data: 'created_at',
                        orderable: true
                    },
                ],
                order: [
                    [3, 'desc']
                ],
                pageLength: 10,
            });
        }
    </script>
@endsection
