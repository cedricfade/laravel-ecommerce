@section('title')
    Nouveau produit 
@endsection

 @extends('admin_layouts.master')

 @section('content')
 <div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ajouter un produit</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>

                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Nom du produit</label>
                                        <input type="text" class="form-control" placeholder="Produit name">
                                    </div>
                             
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Prix du produit</label>
                                        <input type="text" class="form-control" placeholder="prix du produit">
                                    </div>
                             
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Catégorie du produit</label>
                                        <select class="default-select form-control wide mb-1 form-control-md">
                                            <option hidden>Choisir</option>
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
										</select>
                                    </div>
                             
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Image du produit</label>
                                        <input type="file" class="form-control" placeholder="Catérogie">
                                    </div>
                             
                                </div>
                        
                                <button type="submit" class="btn btn-primary">Sauvegarder</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

 </div>


 @endsection