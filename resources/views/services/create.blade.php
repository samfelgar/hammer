@extends('layouts.app')
@section('sidebar')
@endsection
@section('content')
    <h3>Contratação</h3>
    <form action="{{ route('advertisements.services.store', [$advertisement]) }}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-sm-3">
                <label for="data">Data inicial de execução</label>
                <input type="text" name="data" id="data" class="form-control date @error('data') is-invalid @enderror">
                @error('data')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm form-group">
                <label for="detalhes">Informe abaixo detalhes sobre a execução do serviço</label>
                <textarea name="detalhes" id="detalhes" cols="30" rows="10" class="form-control"
                          placeholder="Informe detalhes como preferências de acabamento, horários e outros"
                ></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-5">
                <p>Selecione a forma de pagamento:</p>
                <ul class="list-group">
                    @foreach($client->paymentMethods as $paymentMethod)
                        <li class="list-group-item">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="payment"
                                       id="{{ 'payment-' . $paymentMethod->id }}" value="{{ $paymentMethod->id }}"
                                       @if(old('payment') == $paymentMethod->id) checked @endif
                                >
                                <label for="{{ 'payment-' . $paymentMethod->id }}">
                                    {{ $paymentMethod->number }} - {{ $paymentMethod->holder }}
                                </label>
                            </div>
                        </li>
                    @endforeach
                </ul>
                @error('payment')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-sm-6">
                <p>Selecione o endereço para realização do serviço:</p>
                <ul class="list-group">
                    @foreach($client->addresses as $address)
                        <li class="list-group-item">
                            <div class="form-check">
                                <input type="radio" name="address" class="form-check-input" value="{{ $address->id }}"
                                       id="{{ 'address-' . $address->id }}"
                                       @if(old('address') == $address->id) checked @endif
                                >
                                <label for="{{ 'address-' . $address->id }}">
                                    {{ $address->logradouro }}, {{ $address->numero }} - {{ $address->cidade }}
                                </label>
                            </div>
                        </li>
                    @endforeach
                </ul>
                @error('address')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-2">
                <button type="submit" class="btn btn-primary">Continuar</button>
            </div>
        </div>
    </form>
@endsection
