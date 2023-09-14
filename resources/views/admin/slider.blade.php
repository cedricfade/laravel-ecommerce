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

    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
        <span><i class="fa-solid fa-xmark"></i></span>
        </button>
    </div>
    @endif

    @if (session('update_slider'))
    <div class="alert alert-success alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
        {{ session('update_slider') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
        <span><i class="fa-solid fa-xmark"></i></span>
        </button>
    </div>
    @endif
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
                        @php
                        $count =1;
                    @endphp

                        @foreach ($sliders as $slider)


                        <tr>

                            <td>
                                {{$count}}
                            </td>
                            <td style=""><img src="{{asset('storage/slider_images/'.$slider->image)}}" alt="" style="height: 40px; width: 50px; "></td>
                            <td>{{$slider->description_1}}</td>
                            <td>{{$slider->description_2}}</td>
                            <td>
                                <div class="d-flex">
                                 @if ($slider->status ==1)

                                 <form action="{{url('/admin/unactiveslider/'.$slider->id)}}" method="post">
                                  @csrf
                                  @method('PUT')
                                  <span class="btn btn-success shadow btn-xs">
                                    <i class="fa fa-toggle-on"></i> <input type="submit" style="background: transparent; border: none; color:#fff" value="Désactiver">
                                  </span>
                                  {{-- <a href="#" class=" sharp me-1"></a> --}}
                                 </form>


                                 @else
                                 <form action="{{url('/admin/activeslider/'.$slider->id)}}" method="post">
                                  @csrf
                                  @method('PUT')
                                  <span class="btn btn-warning shadow btn-xs">
                                    <i class="fa fa-toggle-off"></i> <input type="submit" style="background: transparent; border: none; color:#fff" value="Activer">
                                  </span>
                                  {{-- <a href="#" class=" sharp me-1"></a> --}}
                                 </form>
                                 @endif
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#a{{ $slider->id }} "class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>

                                    <form action="{{ route('sliderEdit',['id'=>$slider->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                        <div class="modal fade" id="a{{ $slider->id  }}">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Editer Slider</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="">Description Slider 1</label>
                                                        <input type="text" class="form-control" value="{{ $slider->description_1  }}" name="description_1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Description Slider 2</label>
                                                        <input type="text" class="form-control" value="{{ $slider->description_2  }}" name="description_2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Image Slider 1</label>
                                                        <input type="file" class="form-control" name="image">
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
                                    {{-- <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> --}}

                                    <form action="{{url('admin/deleteslider/'.$slider->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger shadow" onclick="return confirm('Voulez-vous supprimer le slider?')">
                                    </form>

                                </div>
                            </td>

                        </tr>

                        @php
                            $count++
                        @endphp
                        @endforeach
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
