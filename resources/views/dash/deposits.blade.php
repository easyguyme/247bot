@extends('layouts.main')
@section('title', 'Deposits')
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
                        <i class="ik ik-dollar-sign bg-blue"></i>
                        <div class="d-inline">
                            <h5>Deposits</h5>
                            <span>View Deposits list</span>
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
                                <a href="#">Deposits</a>
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
                        <h3>{{ __('Deposits')}}</h3>
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
                            <table id="deposits" class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>{{ __('Telegram Username')}}</th>
                                    <th>{{ __('Telegram ID')}}</th>
                                    <th>{{ __('247 Username')}}</th>
                                    <th>{{ __('Currency')}}</th>
                                    <th>{{ __('Deposit Slip')}}</th>
                                    <th>{{ __('Status')}}</th>
                                    <th>{{ __('Handled by')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($deposits)>0)
                                    @foreach($deposits as $customer)
                                        <tr class="align-center" >
                                            <td class="align-center">{!! $customer->telegram_username !!} </td>
                                            <td>{{$customer->telegram_id}}</td>
                                            <td>{{ $customer->username}}</td>
                                            <td>{{$customer->currency}}</td>
                                            <td class="text-center"><a class="align-middle" target="_blank" href="{{$customer->slip_image}}"><i class="ik ik-eye  text-success"></i></a></td>
                                            <td class="text-center">
                                                @if($customer->status ==0)
                                                    <div class="p-status bg-red align-middle"></div>
                                                @else
                                                    <div class="p-status bg-green "></div>
                                                @endif
                                            </td>
                                            <td>{{$customer->handled_by}}</td>
                                            <td>
                                                @if($customer->status ==0)
                                                    <a href="{{url('approve/deposit',$customer->id)}}" title="approve"><i class="ik ik-check-circle f-16 mr-15 text-green"></i></a>
                                                @endif
                                                <a href="{{url('reject/deposit',$customer->id)}}" title="reject"><i class="ik ik-alert-circle f-16 text-red"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                @else

                                    <td>No data found</td>

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
            new DataTable('#deposits');

        </script>
    @endpush
@endsection
