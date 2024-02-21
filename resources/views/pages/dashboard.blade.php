@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
    <!-- push external head elements to head -->
    @push('head')

        <link rel="stylesheet" href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/chartist/dist/chartist.min.css') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
{{--        <link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">--}}
    @endpush

    <div class="container-fluid">
    	<div class="row">
            <!-- start message area-->
            @include('include.message')
            <!-- end message area-->
            <div class="col-xl-3 col-md-6">
                <div class="card card-red text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">{{ $customers->count()}}</h4>
                                <p class="mb-0">{{ __('Total Clients')}}</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="fas fa-users f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart1" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">{{ $deposits->count()}}</h4>
                                <p class="mb-0">{{ __('Deposits')}}</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-arrow-down f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart2" class="chart-line chart-shadow" ></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-green text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">{{ $withdrawals->count()}}</h4>
                                <p class="mb-0">{{ __('Withdrawals')}}</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-arrow-up-circle f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart3" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-yellow text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">{{ $recoveries->count()}}</h4>
                                <p class="mb-0">{{ __('Recoveries')}}</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik f-30">৳</i>
                            </div>
                        </div>
                        <div id="Widget-line-chart4" class="chart-line chart-shadow" ></div>
                    </div>
                </div>
            </div>
            <!-- page statustic chart end -->


            <!-- product and new customar start -->
            <div class="col-xl-6 col-md-6">
                <div class="card new-cust-card">
                    <div class="card-header">
                        <h3>{{ __('New Registration')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        @if(count($latest_customers)>0)
                        @foreach($latest_customers as $customer)
                            @if($customer->status==0)
                        <div class="align-middle mb-25">

                            <div class="d-inline-block">
                                <a href="#!"><h6>TG: {!! $customer->telegram_username !!}</h6></a>
                                <p class="text-muted mb-0">247: {{$customer->username}}</p>
                                <span class="status deactive text-mute"><i class="far fa-clock mr-10"></i>{{ $customer->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                                @else
                                <h6>No pending registrations</h6>
                            @endif
                        @endforeach

                            @else
                                <tr>
                                    <td>No clients found</td>
                                </tr>
                            @endif

                    </div>
                </div>
            </div>



    	</div>
    </div>
	<!-- push external js -->
    @push('script')
        <script src="{{ asset('plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('plugins/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
        <!-- <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script> -->
        <script src="{{ asset('plugins/flot-charts/curvedLines.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>

        <script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/themes/light.js') }}"></script>


        <script src="{{ asset('js/widget-statistic.js') }}"></script>
        <script src="{{ asset('js/widget-data.js') }}"></script>
        <script src="{{ asset('js/dashboard-charts.js') }}"></script>

        <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
        <script>
            new DataTable('#customers');
            new DataTable('#deposits');
            new DataTable('#withdrawals');
        </script>
    @endpush
@endsection
