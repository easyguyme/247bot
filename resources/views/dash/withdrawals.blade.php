@extends('layouts.main')
@section('title', 'Withdrawals')
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
                            <h5>Withdrawals</h5>
                            <span>View Withdrawals list</span>
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
                                <a href="#">Withdrawals</a>
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
                        <h3>{{ __('Withdrawals')}}</h3>
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
                            <table id="withdrawals" class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>{{ __('Telegram Username')}}</th>
                                    <th>{{ __('Telegram ID')}}</th>
                                    <th>{{ __('247 Username')}}</th>
                                    <th>{{ __('Amount')}}</th>
                                    <th>{{ __('Account Number')}}</th>
                                    <th>{{ __('Account Name')}}</th>
                                    <th>{{ __('Status')}}</th>
                                    <th>{{ __('Handled by')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(count($withdrawals)>0)
                                    @foreach($withdrawals as $withdrawal)
                                        <tr class="align-center" >
                                            <td class="align-center">{!! $withdrawal->telegram_username !!} </td>
                                            <td>{{$withdrawal->telegram_id}}</td>
                                            <td>{{ $withdrawal->username}}</td>
                                            <td>{{$withdrawal->amount}}</td>
                                            <td>{{$withdrawal->account_no}}</td>
                                            <td>{{$withdrawal->account_name}}</td>
                                            <td class="text-center">
                                                @if($withdrawal->status ==0)
                                                    <div class="p-status bg-red align-middle"></div>
                                                @else
                                                    <div class="p-status bg-green "></div>
                                                @endif
                                            </td>
                                            <td>{{$withdrawal->handled_by}}</td>
                                            <td>
                                                @if($withdrawal->status ==0)
                                                    <a href="{{url('approve/withdraw',$withdrawal->id)}}" title="approve"><i class="ik ik-check-circle f-16 mr-15 text-green"></i></a>
                                                @endif
                                                <a href="{{url('reject/withdraw',$withdrawal->id)}}" title="reject"><i class="ik ik-alert-circle f-16 text-red"></i></a>
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
            new DataTable('#withdrawals');

        </script>
    @endpush
@endsection
