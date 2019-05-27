<div class="col-md-8">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Realizar Marcaje</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row d-flex flex-column-reverse">
            <div class="col-md-7">

            <form method="POST" action="{{ ($url > 0) ? route('registros.edit', ['register' => $url ]) : route('registros.add')}}">
                @csrf
                @if ($url > 0)
                    @method('PUT')
                @endif
                <!-- Date -->
                <div class="form-group">
                    <label>Fecha:</label>

                    <div class="input-group date">
                        <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </div>
                    <input readonly type="text" class="form-control pull-right" value="{{ now()->format('d-m-y') }}">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                    <label>Estado de Incidencia</label>
                    <select name="incidence" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        @foreach ($incidents as $incidence)
                            <option value="{{ $incidence->id }}">{{ $incidence->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Notas</label>
                    <textarea name="note" class="form-control" rows="3" placeholder="Escribe aquí ..."></textarea>
                </div>


                @if($url > 0)
                    <button type="submit" class="btn btn-danger btn-lg">Finalizar Hora</button>
                @else
                    <button type="submit" class="btn btn-success btn-lg">Registrar Hora</button>
                @endif

            </form>
            </div>
            <div class="col-md-5 text-center" id="image" style="padding-top:50px;">
                    <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user2-160x160.jpg" alt="User profile picture">
                    <h3 class="profile-username ">Soporte Creamerito <br><small class="label label-warning" style="font-size:12px">Programador</small></h3>
            </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</div> 