@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
<div class="col-lg-12">

</div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>
            Whooopss!! There is something Wrong <br>
    </strong>

    <ul>
        @foreach ($errors as $error)
        Whooopss!! There is something Wrong <br>
        <li>{{$error}}</li>
        Whooopss!! There is something Wrong <br>
        @endforeach
    </ul>
</div>
@endif


<div class ="row">
    <div class ="col-md-12">
        <div class="form-group">
            <strong>name</strong>
            {{$biodata->name}}
        </div>
    </div>

      <div class ="col-md-12">
        <div class="form-group">
            <strong>name</strong>
            {{$biodata->content}}
        </div>
    </div>


        <div class="col-md-12">

                <a class="btn btn-sm btn-success"  href="{{route('biodata.index')}}" placeholder="EnTer Details">
                    Back
                </a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
</div>


@endsection


