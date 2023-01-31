<a href="{{ route($crud . '.show', $row) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Show"><i class="fe fe-eye"></i></a>
<a href="{{ route($crud . '.edit', $row) }}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit"><i class="fe fe-edit"></i></a>
<form action="{{ route($crud . '.destroy', $row) }}" method="POST" id="deleteForm" style="display: inline-block;">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="button" class="btn btn-sm btn-danger" onclick="sweetAlertCall()" data-toggle="tooltip" title="Delete" style="color:white;"><i class="fe fe-trash-2"></i></button>
</form>
@section('more-script')
    <script>
        function sweetAlertCall(){
            var promise = swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your data has been deleted!", {
                            icon: "success",
                        });
                        $('#deleteForm').submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
        }
    </script>
@endsection
