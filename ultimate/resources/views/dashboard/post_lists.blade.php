@extends('dashboard.layouts.master')

@section("contents")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post Lists</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Post Owner</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Control</th>
                    <th>Created_at</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if ($posts)
                    @foreach($posts as $post)

                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{App\Models\User::find($post->postowner)->name}}</td>
                        <td>{{$post->headline}}</td>
                        <td>{{Str::words(strip_tags(html_entity_decode($post->description)),10)}}</td>
                        <td>
                            <div class="d-flex">
                                
                                <a href="{{route("postedit",$post->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{route("postdelete")}}" method="POST">
                                    @csrf
                                    <input type="text" hidden name="id" value="{{$post->id}}">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                                
                            </div>
                        </td>
                        <th>{{$post->created_at}}</th>
                      </tr>

                    @endforeach

                    @else
                    <tr>

                    </tr>
                    @endif
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    


@endsection

@push("js")

<script src={{asset("adminassets/plugins/datatables/jquery.dataTables.min.js")}}></script>
<script src={{asset("adminassets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}></script>
<script src={{asset("adminassets/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}></script>
<script src={{asset("adminassets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}></script>
<script src={{asset("adminassets/plugins/datatables-buttons/js/dataTables.buttons.min.js")}}></script>
<script src={{asset("adminassets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}></script>
<script src={{asset("adminassets/plugins/jszip/jszip.min.js")}}></script>
<script src={{asset("adminassets/plugins/pdfmake/pdfmake.min.js")}}></script>
<script src={{asset("adminassets/plugins/pdfmake/vfs_fonts.js")}}></script>
<script src={{asset("adminassets/plugins/datatables-buttons/js/buttons.html5.min.js")}}></script>
<script src={{asset("adminassets/plugins/datatables-buttons/js/buttons.print.min.js")}}></script>
<script src={{asset("adminassets/plugins/datatables-buttons/js/buttons.colVis.min.js")}}></script>



<script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endpush


