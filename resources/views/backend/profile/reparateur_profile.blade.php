@php
    use App\MyHelpers;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    $data = DB::table('users')->where('id', Auth::id())->get()[0];
    $status = Auth::user()->status;
@endphp

@extends('backend.layouts.app')
@section('PageTitle', 'Profil')
@section('content')

    @if(!$status)
        <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
            <div class="d-flex align-items-center">
                <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-white">Votre compte n'est pas activé</h6>
                    <div class="text-white">Attendez que l'administrateur active votre compte</div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif

    <!--breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Utilisateur</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb -->

    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <form id="profile_image" method="POST" action="{{route('vendor-profile-image-update')
                                }}" enctype="multipart/form-data">
                                    @csrf
                                    <img id="show_image" src="{{!empty($data->photo) ?
                                          url('uploads/images/profile/' . $data->photo):
                                          url('uploads/images/user_default_image.png')}}"
                                         alt="Image de l'utilisateur"
                                         class="rounded-circle p-1 bg-primary" width="110">
                                    <div class="mt-3">
                                        <h4>{{$data->name}}</h4>
                                        <label for="file-upload" class="btn btn-outline-primary"
                                               style="border: 1px solid #ccc;display: inline-block;padding: 6px 12px;cursor: pointer;">
                                            <i class="bx bxs-cloud-upload"></i> télécharger une photo
                                        </label>
                                        <input name="image" id="file-upload" type="file" style="display: none"/>
                                        <input class="btn btn-primary" type="submit" value="Enregistrer"/>
                                        <div>
                                            <small style="color: #e20000" class="error" id="image-error"></small>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="d-flex align-items-center mb-3"></h4>
                            <br>
                            <form id="info_form" action="{{route('reparateur-profile-info-update')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nom complet</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input name="name" type="text" class="form-control" value="{{$data->name}}"
                                               required autofocus/>
                                        <small style="color: #e20000" class="error" id="name-error"></small>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input name="email" type="email" class="form-control" value="{{$data->email}}"
                                               required/>
                                        <small style="color: #e20000" class="error" id="email-error"></small>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nom d'utilisateur</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input name="username" type="text" class="form-control"
                                               value="{{$data->username}}" required/>
                                        <small style="color: #e20000" class="error" id="username-error"></small>
                                    </div>
                                </div>
                              
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date d'adhésion</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">

                                        <h6 class="mb-0">{{MyHelpers::getDiffOfDate($data->created_at)}}</h6>
                                        <br>
                                    </div>
                                </div>
                                <!-- Vos champs d'informations utilisateur -->
                                <div class="row mb-3">
                                  <div class="col-sm-3">
                                      <h6 class="mb-0">Type de service</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                      <select name="service_type" class="form-select">
                                          <option value="service1">Service 1</option>
                                          <option value="service2">Service 2</option>
                                          <option value="service3">Service 3</option>
                                          <!-- Ajoutez autant d'options que nécessaire -->
                                      </select>
                                  </div>
                              </div>
                              
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Téléphone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input name="phone_number" type="text" class="form-control"
                                               value="{{$data->phone_number}}" placeholder="Votre numéro de téléphone"/>
                                        <small style="color: #e20000" class="error" id="phone_number-error"></small>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Adresse</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input name="address" type="text"
                                               class="form-control"
                                               value="{{$data->address}}" placeholder="Votre adresse"/>
                                        <small style="color: #e20000" class="error" id="address-error"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Enregistrer les modifications"
                                        />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="d-flex align-items-center mb-3">Changer de mot de passe</h4>
                                    <br>
                                    <form id="password_form" action="{{route('vendor-profile-password-update')}}"
                                          method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Mot de passe actuel</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input name="password" type="password" class="form-control" required/>
                                                <small style="color: #e20000" class="error" id="password-error"></small>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nouveau mot de passe</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input name="new_password" type="password" class="form-control"
                                                       autofocus/>
                                                <small style="color: #e20000" class="error"
                                                       id="new_password-error"></small>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Confirmez le mot de passe</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input name="confirm_password" type="password" class="form-control"
                                                       autofocus/>
                                                <small style="color: #e20000" class="error"
                                                       id="confirm_password-error"></small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4" value="Enregistrer"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
