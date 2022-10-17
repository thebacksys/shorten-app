@extends('admin.layouts.app')
@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Home</h1>
    </div>
    <div class="container">
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
                    <th>
                        Created By
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
                    url: "{{ route('admin.report') }}",
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
                    {
                        data: 'created_by',
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
