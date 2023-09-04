@section('title')
   Order
@endsection

 @extends('admin_layouts.master')

 @section('content')
 <div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="tab-content  p-3" id="myTabContent" style="background-color: #fff">
                    <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                     <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="example" class="display table" style="min-width: 845px">
                                <thead>
                                    <tr>

                                        <th>Date</th>
                                        <th>Client Names</th>
                                        <th>Orders</th>
                                        <th>Action</th>
                
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    <tr>

                                        <td>2020</td>
                                        <td>cedric fade</td>
                                        <td>4</td>
                                        <td>
                                   
                                                <a href="#" class="btn btn-info shadow btn-xs sharp"><i class="fa fa-eye"></i></a>
                                 
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

 </div>


 @endsection