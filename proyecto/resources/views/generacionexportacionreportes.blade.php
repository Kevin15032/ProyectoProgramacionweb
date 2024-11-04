@extends('layouts.navadministracion')
@section('contenido')
<div class="container mt-5">
    <h2 class="text-center mb-4">Generación y Exportación de Reportes</h2>
    <form class="space-y-6">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fecha-inicio" class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" id="fecha-inicio" name="fechaInicio">
            </div>
            <div class="col-md-6 mb-3">
                <label for="fecha-fin" class="form-label">Fecha de Fin</label>
                <input type="date" class="form-control" id="fecha-fin" name="fechaFin">
            </div>
        </div>

        <div class="mb-3">
            <label for="tipo-reporte" class="form-label">Tipo de Reporte</label>
            <select class="form-select" id="tipo-reporte" name="tipoReporte">
                <option value="financiero">Financiero (Ingresos por reservas)</option>
                <option value="operativo">Operativo (Vuelos más reservados, destinos populares)</option>
            </select>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="destino" class="form-label">Destino</label>
                <select class="form-select" id="destino" name="destino">
                    <option value="todos">Todos los destinos</option>
                    <option value="madrid">Madrid</option>
                    <option value="barcelona">Barcelona</option>
                    <option value="paris">París</option>
                    <option value="londres">Londres</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="aerolinea" class="form-label">Aerolínea</label>
                <select class="form-select" id="aerolinea" name="aerolinea">
                    <option value="todas">Todas las aerolíneas</option>
                    <option value="iberia">Iberia</option>
                    <option value="aireuropa">Air Europa</option>
                    <option value="vueling">Vueling</option>
                    <option value="ryanair">Ryanair</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <select class="form-select" id="cliente" name="cliente">
                    <option value="todos">Todos los clientes</option>
                    <option value="particulares">Particulares</option>
                    <option value="empresas">Empresas</option>
                    <option value="agencias">Agencias de viajes</option>
                </select>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-4">
            <button type="button" class="btn btn-primary w-100 w-sm-auto">Generar Reporte</button>
            <div class="d-flex gap-3">
                <button type="button" class="btn btn-outline-primary w-100 w-sm-auto">
                    <i class="bi bi-file-earmark-pdf me-2"></i> Exportar como PDF
                </button>
                <button type="button" class="btn btn-outline-primary w-100 w-sm-auto">
                    <i class="bi bi-file-earmark-excel me-2"></i> Exportar como Excel
                </button>
            </div>
        </div>
    </form>
</div>

@endsection