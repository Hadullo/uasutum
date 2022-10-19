@extends("layouts.frontend")
@section('content')

@section('head')
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
   @endsection

 <!-- Page breadcrumb -->


 <section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="wrapper">

            <div class="mu-page-breadcrumb-area">
            <h6>Success comes from curiosity,  perseverance and self criticism:
                Albert Einstein</h6>
            <ol class="breadcrumb">


           </ol>
          </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End breadcrumb -->


 <!-- Start contact  -->
 <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
           <!-- start title -->
           <div class="mu-title">
             <h1>Get in Touch with the Chapter Secretary</h1>
             <p>Submit the Form below to Send an Enquiry</p>
           </div>
           <!-- end title -->
           <!-- start contact content -->
           <div class="mu-contact-content">
             <div class="row">
               <div class="col-md-6">
                 <div class="mu-contact-left">


                    @if(Session::has ('success'))
                    <b><div class = "alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div></b>
                    @endif

                    @if(Session::has ('fail'))
                    <b><div class = "alert alert-danger" role="alert">
                        {{ Session::get('fail') }}
                    </div></b>
                    @endif

                    <form  method = "POST" action = "{{ route('contact.send') }}"   enctype="multipart/form-data" >
                        @csrf


                     <p class="comment-form-author">
                       <label for="author">Name <span class="required">*</span></label>
                       <input type="text" class="form-control" id="name" name = "name" placeholder="Name" value = "{{ old('name') }}">
                     </p>
                     @error('name')
                     <div class = alert-danger>{{ $message }}</div>
                     @enderror



                     <p class="comment-form-email">
                       <label for="email">Email <span class="required">*</span></label>
                       <input type="text" class="form-control" id="email" name = "email" placeholder="Email" value = "{{ old('email') }}">
                     </p>
                     @error('email')
                    <div class = alert-danger>{{ $message }}</div>
                     @enderror

                        <p class="comment-form-mobile">
                        <label for="email">Mobile <span class="required">*</span></label>
                        <input type="text" class="form-control" id="mobile" name = "mobile" placeholder="Mobile" value = "{{ old('mobile') }}">
                      </p>
                      @error('mobile')
                      <div class = alert-danger>{{ $message }}</div>
                      @enderror

                     <p class="comment-form-url">
                       <label for="subject">Subject</label>
                       <input type="text" class="form-control" id="subject" name = "subject" placeholder="Subject" value = "{{ old('subject') }}">
                     </p>
                     @error('subject')
                     <div class = alert-danger>{{ $message }}</div>
                     @enderror

                     <div class="form-group">
                        <label for="exampleFormControlFile1">Attachement</label>
                        <input type="file" name = "attachement" class="form-control-file" id="attachement">
                      </div>

                        @error('attachement')
                        <div class = alert-danger>{{ $message }}</div>
                        @enderror



                     <p class="comment-form-comment">
                       <label for="comment">Message</label>
                       <textarea class="form-control" id="comment" name = "comment" rows="3"   placeholder="Comment Text" value = "{{ old('comment') }}"></textarea>
                     </p>

                     @if($errors->first('body'))
                    <div class = alert-danger>{{ $errors->first('comment') }}</div>
                    @endif


                    <div class="form-group">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                    </div>

                    @if ($errors->has('g-recaptcha-response'))
                    <span class="captcha">
                     <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                    @endif

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" value="reset" class="btn btn-primary">Reset</button>




                   </form>
                 </div>
               </div>
               <div class="col-md-6">


                 <div class="mu-contact-right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.8870127888163!2d39.6660178142917!3d-4.043471745986794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184013cba2ae3f81%3A0x2b4403a8307dba91!2sTechnical%3B%20University%20Mombasa!5e0!3m2!1sen!2ske!4v1640167803951!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                 </div>
               </div>
             </div>
           </div>
           <!-- end contact content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact  -->


  @endsection

  @section('scripts')
<script>CKEDITOR.replace( 'comment' );</script>
@endsection

