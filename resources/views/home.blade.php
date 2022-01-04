@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item active">Commandes</li>
                <li class="list-group-item">A propos</li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-3 d-flex">
                    <div class="pt-2">{{ __('Commandes') }}</div>
                    <div class="btn btn-primary ml-auto">Nouvelle commande</div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>N° commande</th>
                            <th>Client</th>
                            <th>Site web</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($orders as $order)
                            <tr>
                                <td>1</td>
                                <td>{{ $order->no }}</td>
                                <td>{{ $order->customer_name }}</td>
                                <td>{{ $order->website }}</td>
                                <td>
                                    #
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
