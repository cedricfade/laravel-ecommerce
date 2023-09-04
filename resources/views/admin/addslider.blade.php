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

            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ajouter Slider</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
    
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Slider description 1</label>
                                            <input type="text" class="form-control" placeholder="Entrez un text">
                                        </div>
                                 
                                    </div>

                                    
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Slider description 2</label>
                                            <input type="text" class="form-control" placeholder="Entrez un text">
                                        </div>
                                 
                                    </div>

                                    
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Image slider</label>
                                            <input type="file" class="form-control" placeholder="Catérogie">
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