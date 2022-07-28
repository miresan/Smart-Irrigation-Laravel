@extends('admin.layouts.master')


@section('content')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Setting</h2>
        </div>
        <div class="card-body">


            <form  action="{{ route('admin.store.global.setting') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="old_favicon" value="{{ $globalsetting->favicon }}">
                    <label for="exampleFormControlFile1">Favicon</label>
                    <input type="file" name="favicon" class="form-control-file" id="exampleFormControlFile1" accept= "image/*"  onchange ="showMyImage(this)">
                    @error('favicon')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                    @if($globalsetting->favicon == null)

                        <img id="thumbnil" style="width:20%; margin-top:10px;"  src="https://taxreform.dof.gov.ph/wp-content/uploads/2019/07/no-thumbnail-medium.png" alt="image"/>

                    @else
                        <img id="thumbnil" style="width:20%; margin-top:10px;"  src="{{ url('/'.$globalsetting->favicon) }}" alt="image"/>

                    @endif

                </div>

                <div class="form-group">
                    <input type="hidden" name="old_logo" value="{{ $globalsetting->logo }}">
                    <label for="exampleFormControlFile1">Favicon</label>
                    <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1" accept= "image/*"  onchange ="showMyImage2(this)">
                    @error('logo')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                    @if($globalsetting->logo == null)

                        <img id="thumbnil2" style="width:20%; margin-top:10px;"  src="{{ url('/no-thumbnail-medium.png') }}" alt="image"/>

                    @else
                        <img id="thumbnil2" style="width:20%; margin-top:10px;"  src="{{ url('/'.$globalsetting->logo) }}" alt="image"/>

                    @endif

                </div>





                <div class="form-group">
                    <label for="exampleFormControlInput1">Site Name</label>
                    <input type="text" name="site_name" class="form-control" value="{{ $globalsetting->site_name }}" id="exampleFormControlInput1" placeholder="Front-end Deweloper">
                    @error('site_name')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                    <span class="mt-2 d-block"></span>
                </div>

                
                <div class="form-group">
                    <label for="exampleFormControlInput1">Site description</label>
                    <textarea name="site_description" class="form-control"   >{{ $globalsetting->site_description }}</textarea>
                    @error('site_description')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                    <span class="mt-2 d-block"></span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Header Script</label>
                    <textarea name="head_script" class="form-control"  id="head_script"> {{ $globalsetting->head_script }} </textarea>
                    @error('head_script')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                    <span class="mt-2 d-block"></span>
                </div>


                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Save</button>
                </div>
            </form>

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
    function showMyImage2(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageType = /image.*/;
            if (!file.type.match(imageType)) {
                continue;
            }
            var img=document.getElementById("thumbnil2");
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
