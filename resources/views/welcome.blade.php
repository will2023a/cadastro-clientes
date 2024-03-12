@extends('layouts.app')


<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Bem Vindo</h5>
            <p class="card-text">Fiz este projeto para concorrer a vaga de desenvolvedor full.
            Estarei a disposição para esclarecer qualquer duvida.
            </p>
            <a href="{{ route('clientes.index') }}" class="btn btn-primary">Clientes</a>
        </div>
    </div>
</div>

