@extends('home')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>User Role Analytics
                    <div class="page-title-subheading">This is where you get to view user roles and summaries.
                    </div>
                </div>
            </div>
            <div class="page-title-actions">

                <div class="d-inline-block dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">

                        Refresh
                    </button>

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
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
                            @foreach($roles as $role)
                            <tr>
                                <td class="text-left text-muted">#345</td>
                                <td class="text-left">{{$role->name}}</td>
                                <td class="text-left">{{$role->guard_name}}</td>
                                <td class="text-left">
                                    @can('view role')
                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-success" onclick="location.href='/role/view/{{ $role->id }}';"><i class="pe-7s-look btn-icon-wrapper"> </i></button>
                                    @endcan
                                    @can('delete role')
                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-block text-center card-footer">
                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                    <button class="btn-wide btn btn-success" onclick="location.href='/role/create';">New Record</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection