@php use Illuminate\Support\Facades\Auth; @endphp
@php
$role = Auth::user()->role;
@endphp
@extends('backend.layouts.app')
@section('PageTitle', 'ajouter marque')
@section('content')

    <!--breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Marques</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route($role . '-profile')}}"><i class="bx
                    bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">ajouter votre marque</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb -->
    <div class="card">
        <div class="card-body">
            <h4 class="d-flex align-items-center mb-3">ajouter marque</h4>
            <br>
            <form id="brand_form" action="{{route('marque.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Nom de la marque</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input name="name" type="text" class="form-control" required autofocus/>
                    <small style="color: #e20000" class="error">{{ $errors->first('name') }}</small>                    
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email de Réclamations</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input name="gmail" type="text" class="form-control"
                               required autofocus/>
                        <small style="color: #e20000" class="error" id="brand_name-error"></small>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <input type="submit" class="btn btn-primary px-4" value="Save Changes"
                        />
                    </div>
                </div>
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </div>
    </div>
    </div>
@endsection


@section('AjaxScript')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript">
       $(document).ready(function(){
  $('#brand_form').on('submit', function(event){
    event.preventDefault(); // Prevent default form submission

    var formData = new FormData(this); // Create FormData object

    $.ajax({
      url: "{{route('marque.create')}}", // Replace with your actual route
      method: 'POST',
      data: formData,
      dataType: 'JSON',
      contentType: false,
      cache: false,
      processData: false,
      success : function(response) {
        // Handle success response (e.g., show success message, redirect)
        Swal.fire({
          icon: 'success',
          title: response.msg, // Assuming response has a "msg" property
          showDenyButton: false,
          showCancelButton: false,
          confirmButtonText: 'OK'
        }).then((result) => {
          if (result.isConfirmed) {
            // Optional: Redirect or reload page on success
            window.location.reload(); 
          }
        });
      },
      error: function(response) {
        // Handle error response (e.g., display error messages)
        var res = $.parseJSON(response.responseText);
        $.each(res.errors, function (key, err){
          $('#' + key + '-error').text(err[0]);
          $('#' + key ).addClass('is-invalid');
        });
      }
    });
  });
});
    </script>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#brand_image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#show_image').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
