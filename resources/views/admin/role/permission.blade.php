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
                <div>Role Permissions
                    <div class="page-title-subheading">Here you get to attach permisions to a user role.
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
            <form class="needs-validation" action="{{ route('create-permission', $role->id) }}" method="POST" novalidate>
                @csrf
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Name</label>
                        <input name="name" type="text" class="form-control" id="validationCustom01" placeholder="First name" value="{{ $role->name }}" required readonly>

                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Guard Name</label>
                        <input name="guard_name" type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="{{ $role->guard_name }}" required readonly>

                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom05">Please Select Permission</label>
                        <select name="permission" class="form-control">

                            @foreach($availablePermissions as $permission)
                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>
                        <!-- <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required> -->
                        <div class="invalid-feedback">
                            Please provide a valid permission.
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Submit form</button>
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
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header"> Associated Permissions
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                           
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-bordered  table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Name</th>
                                <th class="text-left">Guard</th>
                                <th class="text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permissions as $key => $permission)
                            <tr>
                                <td class="text-left text-muted">#{{ $key + 1 }}</td>
                                <td class="text-left">{{$permission->name}}</td>
                                <td class="text-left">{{$permission->guard_name}}</td>
                                <td class="text-left">
                                    @can('view permission')
                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-success" onclick="location.href='/role/view/{{ $permission->id }}';"><i class="pe-7s-look btn-icon-wrapper"> </i></button>
                                    @endcan
                                    @can('delete permission')
                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-block text-center card-footer">
                    <button class="btn-wide btn btn-danger" onclick="location.href='/user/create';">Revoke all permissions</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection