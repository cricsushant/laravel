@extends('layouts.app')
@section('content')

<h1>Edit post</h1>
{!! Form::open(['action'=>['postsController@update',$post->id],'method'=>'POST']) !!}
    <div class="form-group">
        {{
            Form::label('title',"Title")
        }}
        {{
            Form::text('title',$post->body,['class'=>'form-control','placeholder'=>'Title'])
        }}
        </div>
    <div class="form-group">
                {{
                    Form::label('body',"Body")
                }}
                {{
                    Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body Text'])
                }}
               {{Form::hidden('_method','PUT')}}
                {{
                    Form::submit('submit',['class'=>'btn btn-primary'])
                }}
                </div>
{!! Form::close() !!}
@endsection