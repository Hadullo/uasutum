@extends("layouts.admin")

<!-- Main style sheet -->

@section('head')
<link href="{{ asset('assets/admin/css/editprofile.css') }}" rel="stylesheet">
@endsection

@section('head')
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('content')


<div class="editcontent">

<div class="col-md-12">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Edit Profile</h5>


  <div class="row">

      <div class="col-md-4">
        <div class="card card-user">
          <div class="card-body">
            @if($user->avatar)
            <a href=""><center><img class = "img-round-edit-profile cropped_picture" src="/assets/admin/images/avatars/{{$user->avatar}}"  alt="img"></center></a>

            @else
            <center><img src="{{ asset('assets/admin/images/profile/default.png') }}" class = "img-round-edit-profile "></center>
            @endif
            <p class="description text-center">
              {{ $user->name }}</p>

            <p class="profile-specialisation">
                {{ $user->specialization }}</p>

          </div>

             <div class = "center-ochi">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">

                    </div>
                    <div class="custom-file">
                      <input type="file" name = "avatar" class="custom-file-input" id="avatar" aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label" for="inputGroupFile01"><b>Upload Profile Photo</b></label>
                    </div>
                  </div>

            </div>
          </div>
    </div>


    <div class="col-md-8">


        <!-- Full Name Modal -->
<div class="modal fade" id="fullNameEditModal" tabindex="-1" role="dialog" aria-labelledby="fullNameEditModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="fullNameEditModal">Edit Full Name</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <form  method = "POST" action = "{{ route('updateName') }}"   enctype="multipart/form-data" >
            @method('put')
            @csrf

        <div class="modal-body">

            <div class="form-group">
                <label for="inputFullName">Full Name</label>
                <input type="text" class="form-control" name = "name"  value = "{{ Auth::user()->name }}">
            </div>

            @error('name')
            <div class = alert-danger>{{ $message }}</div>
            @enderror
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
</form>
      </div>
    </div>
  </div>
<!-- End Name  modal -->




        <!-- Email Modal -->
        <div class="modal fade" id="emailEditModal" tabindex="-1" role="dialog" aria-labelledby="emailEditModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="emailEditModal">Edit Email</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <form  method = "POST" action = "{{ route('updateEmail') }}"   enctype="multipart/form-data" >
                    @method('put')
                    @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name = "email"  value = "{{ Auth::user()->email }}">
                    </div>

                    @error('email')
                    <div class = alert-danger>{{ $message }}</div>
                    @enderror
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
              </div>
            </div>
          </div>
        <!-- Button trigger modal -->



        <!-- Mobile Modal -->
        <div class="modal fade" id="mobileEditModal" tabindex="-1" role="dialog" aria-labelledby="mobileEditModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="mobileEditModal">Edit Email</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <form  method = "POST" action = "{{ route('updateMobile') }}"   enctype="multipart/form-data" >
                    @method('put')
                    @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" name = "mobile"  value = "{{ Auth::user()->mobile }}">
                    </div>

                    @error('mobile')
                    <div class = alert-danger>{{ $message }}</div>
                    @enderror
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
              </div>
            </div>
          </div>
        <!-- Button trigger modal -->



        <!-- Specialization  Modal -->
        <div class="modal fade" id="specializationEditModal" tabindex="-1" role="dialog" aria-labelledby="specializationEditModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="specializationEditModal">Edit Email</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <form  method = "POST" action = "{{ route('updateSpecialization') }}"   enctype="multipart/form-data" >
                    @method('put')
                    @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <label for="specialization">Mobile</label>
                        <input type="text" class="form-control" name = "specialization"  value = "{{ Auth::user()->specialization }}">
                    </div>

                    @error('specialization')
                    <div class = alert-danger>{{ $message }}</div>
                    @enderror
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
              </div>
            </div>
          </div>
        <!-- Button trigger modal -->




        <!-- Mobile Modal -->
        <div class="modal fade" id="mobileEditModal" tabindex="-1" role="dialog" aria-labelledby="mobileEditModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="mobileEditModal">Edit Email</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <form  method = "POST" action = "{{ route('updateMobile') }}"   enctype="multipart/form-data" >
                    @method('put')
                    @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" name = "mobile"  value = "{{ Auth::user()->mobile }}">
                    </div>

                    @error('mobile')
                    <div class = alert-danger>{{ $message }}</div>
                    @enderror
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
              </div>
            </div>
          </div>
        <!-- Button trigger modal -->



        <!-- School  Modal -->
        <div class="modal fade" id="schoolEditModal" tabindex="-1" role="dialog" aria-labelledby="schoolEditModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="schoolEditModal">Edit Email</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <form  method = "POST" action = "{{ route('updateSchool') }}"   enctype="multipart/form-data" >
                    @method('put')
                    @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <label for="specialization">Mobile</label>
                        <input type="text" class="form-control" name = "school"  value = "{{ Auth::user()->school }}">
                    </div>

                    @error('school')
                    <div class = alert-danger>{{ $message }}</div>
                    @enderror
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
              </div>
            </div>
          </div>
        <!-- Button trigger modal -->




            <!-- About Modal -->
            <div class="modal fade" id="aboutEditModal" tabindex="-1" role="dialog" aria-labelledby="aboutEditModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="aboutEditModal">About</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>


                <form  method = "POST" action = "{{ route('updateAbout') }}"   enctype="multipart/form-data" >
                    @method('put')
                    @csrf

                    <div class="modal-body">

                        <div class="form-group">
                            <label for="about">You can write about your years of experience, industry, or skills. People also talk about their achievements or previous job experiences.</label>
                            <textarea class="form-control" id="about" name = "about">{{ $user->about }}</textarea>

                        </div>

                        @if($errors->first('about'))
                        <div class = alert-danger>{{ $errors->first('about') }}</div>
                        @endif

                    </div>


                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
                  </div>
                </div>
              </div>

            <!-- Button trigger modal -->


                        <!-- Publications  Modal -->
                        <div class="modal fade" id="publicationsEditModal" tabindex="-1" role="dialog" aria-labelledby="publicationsEditModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="publicationsEditModal">Publications</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>


                            <form  method = "POST" action = "{{ route('updatePublications') }}"   enctype="multipart/form-data" >
                                @method('put')
                                @csrf

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="publications">You can write about your Publications here.</label>
                                        <textarea class="form-control" id="publications" name = "publications">{{ $user->publications }}</textarea>

                                    </div>

                                    @if($errors->first('publications'))
                                    <div class = alert-danger>{{ $errors->first('publications') }}</div>
                                    @endif

                                </div>


                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </form>
                              </div>
                            </div>
                          </div>

                        <!-- Button trigger modal -->


                              <!-- Work Experience  Modal -->
                              <div class="modal fade" id="experienceEditModal" tabindex="-1" role="dialog" aria-labelledby="experienceEditModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="experienceEditModal">Experience</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>


                                <form  method = "POST" action = "{{ route('updateExperience') }}"   enctype="multipart/form-data" >
                                    @method('put')
                                    @csrf

                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="experience">You can write about your Experience here.</label>
                                            <textarea class="form-control" id="experience" name = "experience">{{ $user->experience }}</textarea>

                                        </div>

                                        @if($errors->first('experience'))
                                        <div class = alert-danger>{{ $errors->first('experience') }}</div>
                                        @endif

                                    </div>


                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                                  </div>
                                </div>
                              </div>

                            <!-- Button trigger modal -->

                             <!-- Consultancy  Modal -->
                             <div class="modal fade" id="consultancyEditModal" tabindex="-1" role="dialog" aria-labelledby="consultancyEditModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="consultancyEditModal">Consultancy</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>


                                <form  method = "POST" action = "{{ route('updateConsultancy') }}"   enctype="multipart/form-data" >
                                    @method('put')
                                    @csrf

                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="consultancy">You can write about your Consultancy Experience here.</label>
                                            <textarea class="form-control" id="consultancy" name = "consultancy">{{ $user->consultancy }}</textarea>

                                        </div>

                                        @if($errors->first('consultancy'))
                                        <div class = alert-danger>{{ $errors->first('consultancy') }}</div>
                                        @endif

                                    </div>


                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                                  </div>
                                </div>
                              </div>

                            <!-- Button trigger modal -->






                              <!-- Education  Modal -->
                              <div class="modal fade" id="educationEditModal" tabindex="-1" role="dialog" aria-labelledby="educationEditModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="educationEditModal">Education</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>


                                <form  method = "POST" action = "{{ route('updateEducation') }}"   enctype="multipart/form-data" >
                                    @method('put')
                                    @csrf

                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="education">You can write about your Education here.</label>
                                            <textarea class="form-control" id="education" name = "education">{{ $user->education }}</textarea>

                                        </div>

                                        @if($errors->first('education'))
                                        <div class = alert-danger>{{ $errors->first('education') }}</div>
                                        @endif

                                    </div>


                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                                  </div>
                                </div>
                              </div>

                            <!-- Button trigger modal -->


        @include('includes.flash-message')<br>


        <b>Edit Personal Details</b>

        <div class="card card-user">
          <div class="card-body">

            <table style="width:100%">

                <tr>
                  <td><b>Full name:</b>&nbsp;&nbsp;{{ $user->name }}</td>
                  <td><a href="#link"><i class="fa fa-edit fa-2x" data-toggle="modal" data-target="#fullNameEditModal"></a></td>
                </tr>


                <tr>
                    <td><b>Email:</b>&nbsp;&nbsp;{{ $user->email }}</td>
                    <td><a href="#link"><i class="fa fa-edit fa-2x" data-toggle="modal" data-target="#emailEditModal"></a></td>
                </tr>


                <tr>
                    <td><b>Mobile:</b>&nbsp;&nbsp;{{ $user->mobile }}</td>
                    <td><a href="#link"><i class="fa fa-edit fa-2x" data-toggle="modal" data-target="#mobileEditModal"></a></td>
                </tr>


                <tr>
                    <td><b>Specialization:</b>&nbsp;&nbsp;{{ $user->specialization }}</td>
                    <td><a href="#link"><i class="fa fa-edit fa-2x" data-toggle="modal" data-target="#specializationEditModal"></a></td>
                </tr>


                <tr>
                    <td><b>School:</b>&nbsp;&nbsp;{{ $user->school }}</td>
                    <td><a href="#link"><i class="fa fa-edit fa-2x" data-toggle="modal" data-target="#schoolEditModal"></a></td>
                </tr>



              </table>

          </div>
    </div>






</div>


        </div>


        <table style="width:100%">


            <tr><td><b>About</b></td> <td><a href="#link"><i class="fa fa-edit fa-2x" data-toggle="modal" data-target="#aboutEditModal"></a></td></tr>
            <tr><td class = "about-data">{!!$user->about !!}</td></tr>



            <tr><td><b>Publications</b></td> <td><a href="#link"><i class="fa fa-edit fa-2x" data-toggle="modal" data-target="#publicationsEditModal"></a></td></tr>
            <tr><td class = "about-data">{!!$user->publications !!}</td></tr>


            <tr><td><b>Work Experience</b></td> <td><a href="#link"><i class="fa fa-edit fa-2x" data-toggle="modal" data-target="#experienceEditModal"></a></td></tr>
            <tr><td class = "about-data">{!!$user->experience !!}</td></tr>

            <tr><td><b>Consultancy</b></td> <td><a href="#link"><i class="fa fa-edit fa-2x" data-toggle="modal" data-target="#consultancyEditModal"></a></td></tr>
                <tr><td class = "about-data">{!!$user->consultancy !!}</td></tr>

            <tr><td><b>Education</b></td> <td><a href="#link"><i class="fa fa-edit fa-2x" data-toggle="modal" data-target="#educationEditModal"></a></td></tr>
            <tr><td class = "about-data">{!!$user->education!!}</td></tr>







        </table>

      </div>

</div>


  </div>




</div>
<!-- main content area end -->

@endsection

@section('scripts')
<script>CKEDITOR.replace( 'about' );</script>
<script>CKEDITOR.replace( 'publications' );</script>
<script>CKEDITOR.replace( 'experience' );</script>
<script>CKEDITOR.replace( 'consultancy' );</script>
<script>CKEDITOR.replace( 'education' );</script>
@endsection



