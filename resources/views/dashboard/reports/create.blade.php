@extends("layouts.frontend")
@section('content')

@section('head')
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
   @endsection
<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class = "heading-edited">“I would rather have strong enemies than a world of passive individualists.</div>

            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

     <!-- Start Shop Page  -->
     <div class="shop-box-inner">
        <div class="container">
            <div class="title-all text-center">

            <table class="table table-borderless">
                <thead>

                    <tr>

                        <td><h1>Create a Chapter Report</h1></td>


                    </tr>
                </thead>
              </table>
            </div>
             <hr>


            <div class="row">



                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">

                        @include('partials.admin.adminnavbar')

                    </div>
                </div>


                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">



                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    @include('includes.flash-message')
                                    <div class= "my-heading">Fill the Form to Create a Report</div>
                                    <div class="meeting-form">



                                        <form  method = "POST" action = "{{ route('report.store') }}"   enctype="multipart/form-data" >
                                            @csrf

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Report Title</label>
                                                <input type="text" class="form-control" id="title" name = "title" placeholder="Title" value = "{{ old('title') }}">
                                            </div>

                                            @error('title')
                                            <div class = alert-danger>{{ $message }}</div>
                                            @enderror


                                            <div class="form-group">
                                                <label for="rpfile">Upload Report File <span class = "form1">(File must be Word or PDF Format)</span></label>
                                                <input type="file" name = "rpfile" class="form-control-file" id="rpfile">
                                            </div>
                                            @if($errors->first('file'))
                                              <div class = alert-danger>{{ $errors->first('file') }}</div>
                                              @endif

                                            <div class="form-group">
                                                <label for="body">Report Highlights</label>
                                                <textarea class="form-control" id="body" name = "body" rows="3"   placeholder="Body Text" value = "{{ old('body') }}"></textarea>
                                            </div>
                                            @if($errors->first('body'))
                                            <div class = alert-danger>{{ $errors->first('body') }}</div>
                                            @endif
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" value="reset" class="btn btn-primary">Reset</button>
                                          </form>




                                    </div>
                                </div>



                            </div>
                        </div>



                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- End Shop Page -->

@endsection

@section('scripts')
<script>CKEDITOR.replace( 'body' );</script>
@endsection

@section('scripts2')
<script>
    $( function() {
      $( "#datepicker" ).datepicker();
      dateFormat:"dd-mm-yy";
    } );
    </script>
@endsection
