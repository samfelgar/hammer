@extends('layouts.app')
@section('content')
    <h1 style="">Serviço de Pintura</h1>
        <div class="row">
            <div class="col-sm-4">
            <p class="h4">Autor: Paulo Nogueira</p>
            </div>
            <div class="col-sm-4">
            <p class="h4">Tipo do Serviço: PINTURA</p>
            </div>
        </div>
        <div class="" style="margin-top: 30px;">
            <form action="">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="photo">De 1 a 5, qual a avaliação deste serviço?</label>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Deixe um comentario sobre sua experiência na nossa plataforma</label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Elogio ao Prestador de Serviço</label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2 offset-2">
                        <button type="submit" class="btn btn-primary btn-block">Publicar</button>
                    </div>
                </div>
            </form>
        </div>
@endsection