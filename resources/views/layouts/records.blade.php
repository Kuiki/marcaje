<div class="col-md-12">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Historial de Marcajes</h3>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Fecha Entrada</th>
                        <th>Hora</th>
                        <th>Nota de Entrada</th>
                        <th>Incidencia Entrada</th>
                        <th>Fecha Salida</th>
                        <th>Hora</th>
                        <th>Nota de Salida</th>
                        <th>Incidencia Salida</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $register)
                        <tr>
                            <td><b>{{ date("d / m / Y", strtotime($register->entryDate)) }}</b></td>
                            <td>{{ date("H : i : s", strtotime($register->entryDate)) }}</td>
                            <td>{{ $register->entryNote }} </td>
                            <td>{{ $register->incidence_entry->name }}</td>
                            @if(isset($register->departureDate))
                            <td><b>{{ date("d / m / Y", strtotime($register->departureDate)) }}</b></td>
                            <td>{{ date("H : i : s", strtotime($register->departureDate)) }}</td>
                            <td>{{ $register->departureNote }}</td>
                            <td>{{ $register->incidence_departure->name }}</td>
                            @else
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</div>