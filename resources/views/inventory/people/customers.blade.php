@extends('layouts.main')
@section('title', 'Customers')
@section('content')
    @push('head')
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
        {{--        <link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">--}}
    @endpush
	<div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5>Registrations</h5>
                            <span>View Registrations list</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Registrations</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start message area-->
            <div class="col-md-12">
        </div>            <!-- end message area-->
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>{{ __('Customers')}}</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table id="customers" class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>{{ __('Telegram Username')}}</th>
                                    <th>{{ __('Telegram ID')}}</th>
                                    <th>{{ __('247 Username')}}</th>
                                    <th>{{ __('247 ID')}}</th>
                                    <th>{{ __('Status')}}</th>
                                    <th>{{ __('Handled by')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($customers)>0)
                                    @foreach($customers as $customer)
                                        <tr class="align-center" >
                                            <td class="align-center">{!! $customer->telegram_username !!} </td>
                                            <td>{{$customer->telegram_id}}</td>
                                            <td>{{ $customer->username}}</td>
                                            <td>{{$customer->user_id}}</td>
                                            <td class="text-center">
                                                @if($customer->status ==0)
                                                    <div class="p-status bg-red"></div>
                                                @else
                                                    <div class="p-status bg-green "></div>
                                                @endif
                                            </td>
                                            <td>{{$customer->handled_by}}</td>
                                            <td>
                                                @if($customer->status ==0)
                                                    <a href="{{url('approve/client',$customer->id)}}" title="approve"><i class="ik ik-check-circle f-16 mr-15 text-green"></i></a>
                                                @endif
                                                <a href="{{url('reject/client',$customer->id)}}" title="reject"><i class="ik ik-alert-circle f-16 text-red"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                @else

                                    <td>No clients found</td>

                                @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')

        <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
        <script>
            new DataTable('#customers');

        </script>
    @endpush
@endsection
