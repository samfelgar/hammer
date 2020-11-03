@extends('layouts.app')
@section('content')
    <div class="container col-12">
        <form action="{{ route('clients.payments.store', [$client]) }}" method="post">
            @csrf
            <div class='form-row container'>
                <div class='col-xs-12 form-group required'>
                    <label class='control-label' for="holder">Nome no Cartão</label>
                    <input class='form-control  @error('holder') is-invalid @enderror' id="holder" name="holder"
                           size="38" type='text' required value="{{ old('holder') }}">
                </div>
                @error('holder')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class='form-row container'>
                <div class='col-xs-12 form-group required'>
                    <label class='control-label' for="cc_card">Cartão</label>
                    <input name="number" required value="{{ old('number') }}" id="cc_card" autocomplete='off'
                           class='form-control card-number @error('number') is-invalid @enderror' size='38'
                           type='text'>
                    @error('number')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class='form-row container'>
                <div class='col-xs-4 form-group cvc required'>
                    <label class='control-label'>CVC</label>
                    <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='14' type='text'>
                </div>
                <div class='col-xs-8 form-group expiration required'>
                    <label class='control-label'>Data de Validade</label>
                    <input class='form-control card-expiry-year col-12 @error('valid_until') is-invalid @enderror'
                           name="valid_until" type='date'>
                    @error('valid_until')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class='form-row container'>
                <div class='col-md-6 form-group ml-1 mt-2'>
                    <button class='form-control btn btn-primary submit-button col-10' type='submit'>Adicionar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
