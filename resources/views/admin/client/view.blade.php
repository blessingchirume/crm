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
                <div>Company users
                    <div class="page-title-subheading">Here you get to attach permisions to a user client.
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
            <form class="needs-validation" action="{{ route('create-users', $client->id) }}" method="POST" novalidate>
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Postition</label>
                        <input name="postion" type="text" class="form-control" id="validationCustom02" placeholder="Postion" value="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom05">Please Select Permission</label>
                        <select name="user_id" class="form-control">
                            @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid user.
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
                                <th class="text-left">Surname</th>
                                <th class="text-left">Email</th>
                                <th class="text-left">Role</th>
                                <th class="text-left">Status</th>
                                <th class="text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($companyUsers as $key => $user)
                            <tr>
                                <td class="text-left text-muted">#{{ $key + 1 }}</td>
                                <td class="text-left">{{ $user->name }}</td>
                                <td class="text-left">{{ $user->surname }}</td>
                                <td class="text-left">{{ $user->email }}</td>
                                <td class="text-left">{{ $user->roles->pluck('name')->first() }}</td>
                                <td class="text-left">
                                    <div class="badge badge-success">Active</div>
                                </td>
                                <td class="text-left">
                                    @can('view user')
                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-success" onclick="location.href='/user/view/{{ $user->id }}';"><i class="pe-7s-look btn-icon-wrapper"> </i></button>
                                    @endcan
                                    @can('delete user')
                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger" onclick="location.href='';"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-block text-center card-footer">
                    <button class="btn-wide btn btn-danger" onclick="location.href='/user/create';">Revoke all users</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection