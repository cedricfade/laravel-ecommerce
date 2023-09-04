@section('title')
    Slider 
@endsection

 @extends('admin_layouts.master')

 @section('content')
     

		<!--**********************************
            Content body start
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- Row -->
				<div class="row">
                    <div class="tab-content  p-3" id="myTabContent" style="background-color: #fff">
                        <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                         <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="example" class="display table" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image slider</th>
                                            <th>Description 1</th>
                                            <th>Description 2</th>
                                            <th>Action</th>
                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        <tr>
                                            <td>1</td>
                                            <td><img src="" alt=""></td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection