@extends('layout')
@section('container')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @if(Session::has('userData'))
                    <?php $i=1; ?>
                    @foreach(Session::get('userData') as $key => $val)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$val['data']['name']}}</td>
                        <td>{{$val['data']['email']}}</td>
                        <td>{{$val['data']['password']}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection