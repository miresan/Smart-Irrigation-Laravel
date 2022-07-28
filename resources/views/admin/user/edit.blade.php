@extends('admin.layouts.master')


@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Admin Profile</h2>
            </div>
    
            <div class="card-body">
                <form action="{{ route('admin.update.user') }}" method="POST" enctype="multipart/form-data">
    
                    @csrf
    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="{{ $user->name }}" value="{{ $user->name }}">
                        @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="{{ $user->email }}" value="{{ $user->email }}">
                        @error('email')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
    
    
    
                    <div class="form-group">
                        <input type="hidden" name="old_profile_image" value="{{ $user->profile_image }}">
                        <label for="profile_image">Profile Image</label>
                        <input type="file" name="profile_image" class="form-control-file" id="profile_image" accept= "image/*"  onchange ="showMyImage(this)">
                        @error('profile_image')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                        @if($user->profile_image == null)
    
                            <img id="thumbnil" style="width:20%; margin-top:10px;"  src="https://taxreform.dof.gov.ph/wp-content/uploads/2019/07/no-thumbnail-medium.png" alt="image"/>
    
                        @else
                            <img id="thumbnil" style="width:20%; margin-top:10px;"  src="{{ url($user->profile_image) }}" alt="image"/>
    
                        @endif
    
                    </div>
    
    
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    
    </div>
    
    
    <div class="col-lg-6">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Change Password</h2>
            </div>
    
            <div class="card-body">
                <form action="{{ route('admin.update.user.password') }}" method="POST" enctype="multipart/form-data">
    
                    @csrf
    
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
    
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    
    </div>
</div>


@endsection



@section('script')
 <script>
     function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageType = /image.*/;
            if (!file.type.match(imageType)) {
                continue;
            }
            var img=document.getElementById("thumbnil");
            img.file = file;
            var reader = new FileReader();
            reader.onload = (function(aImg) {
                return function(e) {
                    aImg.src = e.target.result;
                };
            })(img);
            reader.readAsDataURL(file);
        }
    }

</script>
@endsection
