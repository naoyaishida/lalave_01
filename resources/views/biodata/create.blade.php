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

<form action ="{{route('biodata.store')}}" method="post">
@csrf
<div class ="row">
<div class ="col-md-12">
    <strong>
        Name
    </strong>

    <input type="text" name="name" class="form-control" placeholder="Enter Name">
</div>
<div class="col-md-12">
            <strong>
                Content
            </strong>

            <textarea type="textarea" name="content" class="form-control" placeholder="EnTer Name">
            </textarea>
        </div>

        <div class="col-md-12">

                <a class="btn btn-sm btn-success"  href="{{route('biodata.index')}}" placeholder="EnTer Details">
                    Back
                </a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
</div>
</form>
</div>
@endsection


