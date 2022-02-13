@extends('home')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-picture text-danger">
                    </i>
                </div>
                <div>User Registration
                    <div class="page-title-subheading">Here you get to create a new user record within the system.
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                    <i class="fa fa-star"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-business-time fa-w-20"></i>
                        </span>
                        Users
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-inbox"></i>
                                    <span>
                                        Inbox
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-book"></i>
                                    <span>
                                        Book
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-picture"></i>
                                    <span>
                                        Picture
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a disabled href="javascript:void(0);" class="nav-link disabled">
                                    <i class="nav-link-icon lnr-file-empty"></i>
                                    <span>
                                        File Disabled
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form class="needs-validation" action="{{ route('update-user', $user->id) }}" method="POST" novalidate>
                @csrf
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">First name</label>
                        <input name="name" type="text" class="form-control" id="validationCustom01" placeholder="First name" value="{{ $user->name }}" required>

                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Last name</label>
                        <input name="surname" type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="{{ $user->surname }}" required>

                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                            </div>
                            <input name="email" type="email" class="form-control" id="validationCustomUsername" placeholder="Username" value="{{ $user->email }}" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a email.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom05">Role</label>
                        <select name="role" class="form-control">
                            <option value="{{ $user->roles->pluck('name')->first() }}">Current -- {{ $user->roles->pluck('name')->first() }}</option>
                            @foreach($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <!-- <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required> -->
                        <div class="invalid-feedback">
                            Please provide a valid role.
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Submit form</button>
                @can('delete user')
                <button class="btn-wide btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-user-form').submit();">Delete Record</button>
                @endcan

            </form>

            <form id="delete-user-form" action="{{ route('delete-user', $user->id) }}" method="POST" style="display: none;">
                @csrf
            </form>

            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>
        </div>
    </div>
</div>
@endsection