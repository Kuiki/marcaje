<div class="modal fade" id="alldocuments" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">
                    Lista de documentos
            </h4>
        </div>
        <div class="modal-body">
            <table class="table no-margin">
                    <thead>
                    <tr>
                    <th>Fecha</th>
                    <th>Archivo</th>
                    <th>Estado</th>
                    </tr>
                    </thead>
                    <thead>
                @foreach ($docs->sortByDesc('created_at') as $docs2)
                    <tr>
                    <th>{{ date("d / m / Y", strtotime($docs2->created_at)) }}</th>
                    <td><a href="{{ Storage::url($docs2->path) }}" target="_blank">{{$docs2->name}}</a></td>
                    <td>
                        @if ($docs2->verified == 0)
                        <span class="label label-danger">Sin verificar</span>
                        @else
                        <span class="label label-success">Verificado</span>    
                        @endif
                    </td>              
                    </tr>
                @endforeach
                    </thead>
                </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>