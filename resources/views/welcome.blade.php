@extends('layout')

@section('afficher')
<div class="row">
    <h1>
        affichage des taches 
    </h1>

    <table class="table">
      <tr>
          <td>
              TACHES
          </td>
          <td>
              DESCRIPTION
          </td>
      </tr>
                @foreach ($donnees as $data)
                <tr>
                        
                            <td>{{$data->tache}}</td> 
                            <td>
                                {{$data->description}}     
                            </td> 
                            <td>
                                <a href="{{Route('delete');}}?id={{$data->id}}"> 
                                    DELETE </a> 
                            </td>
                                   <td>
                                    <a href="{{Route('formupdate');}}?id={{$data->id}}">
                                        UPDATE
                                    </a>
                                   </td>
                     
                    </tr>
                     @endforeach
         
    </table>
</div>
<style>
    body{
        margin: 3%;
    }
    .table{
        border: 3px solid khaki;
    }
    td{
        border: 3px solid khaki;
    }
    tr{
        border: 3px solid khaki;
    }
</style>
@endsection