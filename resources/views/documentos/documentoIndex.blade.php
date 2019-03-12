@extends('layouts.app')

@section('content')
    <div class="row";>
        <div class="col-8 offset-2" ;>
            <h1>Documentos</h1>
            <table class="table">
                <thead>
                <tr>
                    <th> ID               </th>
                    <th> Dirigido a       </th>
                    <th> Fecha Recibido   </th>
                    <th> envia            </th>
                    <th> No. Oficio       </th>
                    <th> Fecha Oficio     </th>
                </tr>
                </thead>
                <tbody>
                @foreach($docs as $doc)
                    <tr>
                        <td>{{$doc->id}}</td>
                        <td>{{$doc->dirigido}}</td>
                        <td>{{$doc->envia}}</td>
                        <td>{{$doc->fecha_recibido}}</td>
                        <td>{{$doc->no_oficio}}</td>
                        <td>{{$doc->fecha_oficio}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @endsection