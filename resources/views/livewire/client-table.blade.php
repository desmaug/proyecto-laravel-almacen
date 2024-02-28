<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <input type="text" class="form-control" wire:model.live='search' placeholder="Buscar">
            </div><!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-bordered table-sm" id="makeEditable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td name="buttons">
                                    <form action="" class="form-table" method="POST">
                                        <div class="float-end">
                                            <a href="" type="button" class="btn btn-sm btn-soft-success btn-circle me-2"><i class="dripicons-pencil"></i></a>
                                            <a href="" class="btn btn-sm btn-soft-purple me-2 btn-circle" ><i class="dripicons-search"></i></a>
                                            <button class="btn btn-sm btn-soft-danger btn-circle" onclick="rowElim(this);"><i class="dripicons-trash" aria-hidden="true"></i></button>

                                        </div>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$clients->links()}}
                </div>
                <span class="float-right">
                    <button id="but_add" class="btn btn-success btn-sm">Agregar Nuevo Registro</button>
                </span><!--end table-->     
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!-- end col -->
</div> <!-- end row -->