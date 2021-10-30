@extends('layout')

@section('afficher')
<div class="foro">
    <form action="{{Route('formofupdate');}}" method="post">
        @csrf
        <input type="text" name="newtache"> <br> <br>
        <textarea name="newdescription" id="" cols="30" rows="10"></textarea> <BR>
            <br>    <input type="number" value="{{$_GET['id']}}" name="id" hidden>
    <br> <br>
        <button type="submit">send</button>
    </form>
</div>
@endsection

<style>
    .foro{
        margin: 5%;
        justify-content: space-around
    }
</style>