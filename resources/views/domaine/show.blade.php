@extends('admin.dashboard')
@section('title')
créer grille|ajouter chapitre
@endsection
@section('content')
<div class="center">
    <table class="table table-sm">
        <tbody>
            @foreach($domaines as $i)
            <tr>
                <td colspan="2" class="table-active">{{$i->titre}}</td>
                <td><a href="/reference/add/{{$i->id}}" ><img src="https://img.icons8.com/flat-round/24/000000/right--v1.png" /></a></td><!--Go to add domaine-->
                <td><a href="/domaine/edit/{{$i->id}}"><img src="https://img.icons8.com/android/24/000000/edit.png" /></a></td><!--Update chapitre-->
                <td><a href="" data-chapitre_id="{{$i->id}}"  data-bs-toggle="modal" data-bs-target="#deleteModal"><img src="https://img.icons8.com/plasticine/24/000000/filled-trash.png" /></a></td><!--Delete chapitre-->
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-3">    <a href="/domaine/add/{{$chapitre->id}}" class="btn btn-light"> Retour</a></div>

    </div>
</div>
@endsection