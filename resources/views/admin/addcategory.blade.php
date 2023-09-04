@section('title')
    Nouvelle Catégorie 
@endsection

 @extends('admin_layouts.master')

 @section('content')
 <div class="content-body">
    <!-- row -->
    <div class="container-fluid">
      @if (session('status'))
      <div class="alert alert-success alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
       {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
        <span><i class="fa-solid fa-xmark"></i></span>
        </button>
    </div>
      @endif

        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ url('admin/savecategory') }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Catégorie</label>
                                        <input type="text" name="category_name" class="form-control" placeholder="Catérogie" required>
                                    </div>
                             
                                </div>
                        
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

 </div>


 @endsection