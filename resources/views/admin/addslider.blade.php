@section('title')
    Ajouter slider
@endsection

 @extends('admin_layouts.master')

 @section('content')


		<!--**********************************
            Content body start
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="container">

            <div class="row mt-5">
                <div class="col-xl-6 col-lg-12 mx-auto mt-5">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Ajouter Slider</h4>
                        </div>
                         @if ($errors->any())
                             @foreach ($errors->all() as $error)
                             <div class="alert bg-danger text-white" style="color: #fff; font-size: 1.2em">
                                {{$error}}
                              </div>
                             @endforeach
                         @endif

                         @if (session('status'))
                         <div class="alert alert-success alert-dismissible fade show">
                           <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                          {{ session('status') }}
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                           <span><i class="fa-solid fa-xmark"></i></span>
                           </button>
                       </div>
                         @endif
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{url('/admin/saveslider')}}" method="post" enctype="multipart/form-data">
                                  @csrf
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Slider description 1</label>
                                            <input type="text" required class="form-control" placeholder="Entrez un text" name="description_1">
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Slider description 2</label>
                                            <input type="text" required class="form-control" placeholder="Entrez un text" name='description_2'>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Image slider</label>
                                            <input type="file" required class="form-control" placeholder="Catérogie" name="image">
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary">Sauvergarder</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




@endsection
