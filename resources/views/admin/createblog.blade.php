@extends('admin')



@section('content')
    <h1>Create a Blog Post</h1>
    <p>Blow you can create a blog post</p>
    <hr>
    {!!Form::open(array('class'=>'form-horizontal'))!!}
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-2">
                    {!! Form::label ('title' , 'Title') !!}
                </div>
                <div class="col-md-5">
                    {!! Form::text('title', null , ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-2">
                    {!! Form::label ('subTitle' , 'Subtitle') !!}
                </div>
                <div class="col-md-5">
                    {!! Form::text('subTitle', null , ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-2">
                    {!! Form::label ('content' , 'Content') !!}
                </div>
                <div class="col-md-5">
                    {!! Form::textarea('content', null , ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-2">
                    {!! Form::label ('mainimage' , 'Featured Image') !!}
                </div>
                <div class="col-md-5">
                    {!! Form::file('mainimage', null , ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-5">
                {!!Form::submit('Click Me!',null, ['class' => 'btn btn-primary'])!!}
            </div>
        </div>
    </div>
    {!!Form::close()!!}


@stop