@extends('layouts.app')

@section('content')
    <h1>{{$advertisements->titulo}}</h1>
    <form action="{{ route('advertisements.update', [$advertisements]) }}" method="post">
        @method('put')
        @csrf


        <div class="form-group row">
            <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-4">
                <input type="text" name="titulo" id="titulo" value="{{$advertisements->titulo}}"
                       class="form-control @error('titulo') is-invalid @enderror">

            </div>
        </div>


        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Valor</label>
            <div class="col-sm-4">
                <input type="text" oninput="mascara(this)" name="preco" value="{{$advertisements->preco}}" id="price"
                       class="form-control @error('preco') is-invalid @enderror">

            </div>
        </div>


        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-4">
                <select name="categoria" id="" class="form-control  @error('categories') is-invalid @enderror">
                    @foreach($categories as $category)

                        <option value="{{ $category->id }}"
                                @if($category->id === $advertisements->category->id) selected @endif>{{ $category->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="form-group row">
            <label for="deion" class="col-sm-2 col-form-label">Descrição do serviço</label>
            <div class="col-sm-6">
                <textarea name="descricao" id="deion" cols="30" rows="10"
                          class="form-control  @error('descricao') is-invalid @enderror">{{$advertisements->descricao}}</textarea>
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-2 offset-2">
                <button type="submit" class="btn btn-primary btn-block">Editar</button>
            </div>
        </div>


    </form>
    <script>
        function mascara(i) {

            var v = i.value;

            if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
                i.value = v.substring(0, v.length - 1);
                return;
            }

        }
    </script>
@endsection
