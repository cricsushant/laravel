@extends('layouts.app')
@section('content')

<h1>create post</h1>
{!! Form::open(['action'=>'postsController@store','method'=>'POST']) !!}
    <div class="form-group">
        {{
            Form::label('title',"Title")
        }}
        {{
            Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])
        }}
        </div>
    <div class="form-group">
                {{
                    Form::label('body',"Body")
                }}
                {{
                    Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body Text'])
                }}
                {{
                    Form::submit('submit',['class'=>'btn btn-primary'])
                }}
                </div>
{!! Form::close() !!}
@endsection