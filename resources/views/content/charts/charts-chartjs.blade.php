@extends('layouts/layoutMaster')

@section('title', 'Chart.js - Charts')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/chartjs/chartjs.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/charts-chartjs.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Charts /</span> Chart.js
</h4>

<div class="row">
  <!-- Bar Charts -->
  <div class="col-xl-12 col-12 mb-4">
    <div class="card">
      <div class="card-header header-elements">
        <h5 class="card-title mb-0">Latest Statistics</h5>
        <div class="card-action-element ms-auto py-0">
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-calendar"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="barChart" class="chartjs" data-height="400"></canvas>
      </div>
    </div>
  </div>
  <!-- /Bar Charts -->

  <!-- /Horizontal Bar Charts -->

  <!-- Line Charts -->
  <div class="col-12 mb-4">
    <div class="card">
      <div class="card-header header-elements">
        <div>
          <h5 class="card-title mb-0">Statistics</h5>
          <small class="text-muted">Commercial networks and enterprises</small>
        </div>
        <div class="card-header-elements ms-auto py-0">
          <h5 class="fw-bold mb-0 me-3">$ 78,000</h5>
          <span class="badge bg-label-secondary">
            <i class='ti ti-arrow-up ti-xs text-success'></i>
            <span class="align-middle">37%</span>
          </span>
        </div>
      </div>
      <div class="card-body pt-2">
        <canvas id="lineChart" class="chartjs" data-height="500"></canvas>
      </div>
    </div>
  </div>
  <!-- /Line Charts -->
</div>
@endsection
