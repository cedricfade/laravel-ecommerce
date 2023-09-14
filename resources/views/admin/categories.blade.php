@section('title')
    Catégories
@endsection

 @extends('admin_layouts.master')

 @section('content')

 <div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <!-- Row -->
        <input type="hidden" {{ $increment=1 }}>
        <div class="row">

            <!-- Modal -->


            <div class="table-responsive">
                @if (session('delete'))
                <div class="alert alert-success alert-dismissible fade show">
                  <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                 {{ session('delete') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                  <span><i class="fa-solid fa-xmark"></i></span>
                  </button>
              </div>
                @endif

                @if (session('EditCategory'))
                <div class="alert alert-success alert-dismissible fade show">
                  <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                 {{ session('EditCategory') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                  <span><i class="fa-solid fa-xmark"></i></span>
                  </button>
              </div>
                @endif

                <table class="table table-responsive-md mt-5">


                    <thead>
                        <tr>

                            <th><strong>Num</strong></th>
                            <th><strong>Category Name</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody>

                  @foreach ($categories as $categorie)

                  <tr>
                    <td>{{ $increment }}</td>

                    <td>{{ $categorie->category_name }}</td>
                    {{-- <td><div class="d-flex align-items-center"><i class="fa fa-circle text-warning me-1"></i> Pending</div></td> --}}
                    <td>
                        <div class="d-flex">
                            <a href="#"data-bs-toggle="modal" data-bs-target="#a{{ $categorie->id }}" class="btn btn-primary shadow btn-sm sharp me-1"><i class="fa fa-pencil"></i></a>

                            {{-- <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> --}}

                          <form action="{{ url('deleteCategorie/'.$categorie->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" style="" value="Delete" class="btn btn-danger shadow btn-xs ">
                          </form>

                          <form action="{{ route('categoryEdit',['id'=>$categorie->id]) }}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="modal fade" id="a{{ $categorie->id  }}">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Editer catégorie</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Modifier catégorie</label>
                                            <input type="text" class="form-control" value="{{ $categorie->category_name  }}" name="category_name">
                                        </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>


                        </div>
                    </td>
                </tr>
                <input type="hidden" {{ $increment++ }}>

                  @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

 </div>

 <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
 <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

 <!-- code-highlight -->

 @endsection
