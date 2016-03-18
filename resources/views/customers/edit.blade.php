@extends('layouts._master')

@section('page-header')
    Edit Customers
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="col-sm-7">
                        <?php $columnSizes = ['sm' => [4, 8]]; ?>
                        {!! BootForm::openHorizontal($columnSizes)->post()->action(route('customers.update')) !!}
                        {!! BootForm::bind($customer) !!}
                        @include('customers.partials._form')
                        {!! BootForm::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-scripts')

@append