@extends('doktormaster')
@section('content')
@php
    /** @var array $days */
    /** @var array $hours */
    /** @var \Illuminate\Support\Collection $appointments */
@endphp
@php
    /** @var array $days */
    /** @var array $hours */
    /** @var \Illuminate\Support\Collection $appointments */
@endphp

<div class="card">
    <div class="card-header"><b>Dr. trackrequler randevu saatleri</b></div>
    <table class="table table-sm table-bordered table-striped mb-0">
        <thead>
        <tr>
            <th></th>
            @foreach($days as $day)
                @php($day = date('d.m.Y', strtotime($day)))
                <th>
                    @if($loop->first)
                        Bugün ({{ $day }})
                    @elseif($loop->iteration == 2)
                        Yarın ({{ $day }})
                    @else
                        {{ $day }}
                    @endif
                </th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($hours as $hour)
            <tr>
                <td><b>{{ date('H:i',strtotime($hour)) }}</b></td>
                @foreach($days as $day)
                    {{-- Eğer o gün ve saat içerisinde randevu varsa --}}
                    @if($appointments->where('dayname',$day)->contains('hours',$hour))
                        <td style="background-color: #fffac1">Var</td>
                    @else
                        <td>-</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
