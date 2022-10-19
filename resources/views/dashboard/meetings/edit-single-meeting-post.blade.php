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

                        <td><h1>Edit a Chapter Meeting</h1></td>


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
                                    <div class= "my-heading">Edit the Meeting Form Contents</div>
                                    <div class="meeting-form">




                                        <form  method = "POST" action = "{{ route('meeting.update', $meeting) }}"   enctype="multipart/form-data" >
                                            @method('put')
                                            @csrf

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Title of Meeting</label>
                                                <input type="text" class="form-control" id="title" name = "title" value = "{{ $meeting->title }}">
                                            </div>

                                            @error('title')
                                            <div class = alert-danger>{{ $message }}</div>
                                            @enderror

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Date of Meeting<span class = "form1">(Use the format:Year-Month-Day eg 2022-03-25)</span></label>
                                                <input type="text" class="form-control" id="datepick-1" name = "meeting_date"  value = "{{ $meeting->meeting_date }}">
                                            </div>
                                            @error('meeting_date')
                                            <div class = alert-danger>{{ $message }}</div>
                                            @enderror

                                            <div class="form-group">
                                                <label for="attimage">Upload  Meeting Attendance<span class = "form1">(Must be an Image)</span></label>
                                                <input type="file" name = "attimage" class="form-control-file" id="attimage">
                                            </div>
                                            @if($errors->first('attimage'))
                                            <div class = alert-danger>{{ $errors->first('attimage') }}</div>
                                             @endif

                                            <div class="form-group">
                                                <label for="meimage">Upload Meeting Photo<span class = "form1">(Image must be 750px by 400px)</span></label>
                                                <input type="file" name = "meimage" class="form-control-file" id="meimage">
                                            </div>
                                            @if($errors->first('meimage'))
                                            <div class = alert-danger>{{ $errors->first('meimage') }}</div>
                                             @endif

                                            <div class="form-group">
                                                <label for="meetingPhotoCaption">Meeting Photo Caption</label>
                                                <input type="text" class="form-control" id="meetingPhotoCaption" name = "meetingPhotoCaption" value = "{{ $meeting->meetingPhotoCaption }}">
                                            </div>
                                            @error('meetingPhotoCaption')
                                            <div class = alert-danger>{{ $message }}</div>
                                            @enderror

                                            <div class="form-group">
                                                <label for="mnfile">Upload Minutes File<span class = "form1">(File must be Word of PDF Format)</span></label>
                                                <input type="file" name = "mnfile" class="form-control-file" id="mnfile">
                                            </div>
                                            @if($errors->first('mnfile'))
                                              <div class = alert-danger>{{ $errors->first('mnfile') }}</div>
                                              @endif

                                            <div class="form-group">
                                                <label for="body">Meeting Agenda</label>

                                                <textarea class="form-control" id="body" name = "body">{{ $meeting->body }}</textarea>
                                            </div>
                                            @if($errors->first('body'))
                                            <div class = alert-danger>{{ $errors->first('body') }}</div>
                                            @endif
                                            <button type="submit" class="btn btn-primary">Update Post</button>
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
