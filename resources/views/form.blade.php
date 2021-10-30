@extends('layout')

@section('afficher')


<div class="foro">
    <form action="{{Route('formm');}}" method="post">
        @csrf
    
        <input type="text" name="tache" placeholder=" NOm de la tache"> <br> <br> <br>
        <label for="text">Dscription <br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="description de la tache" id="text">    </textarea>
        
        </label>
        <br> <br>
        <button type="submit">envoyer</button>
        
    </form>
</div>
@endsection

<style>
    .foro{
        margin: 5%;
        justify-content: space-around
    }
</style>