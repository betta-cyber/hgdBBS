

{!! Html::style('css/select2.css') !!}
{!! Html::script('js/jquery.js') !!}
{!! Html::script('js/select2.min.js') !!}
{!! Html::script('js/index.js') !!}

{!! Form::open(['url'=>'topic']) !!}
  <div class="form-group">
    {!! Form::label('title','title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('content','content:') !!}
    {!! Form::textarea('content',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
        {!! Form::label('tag_list','选择标签') !!}
        {!! Form::select('tag_list',$tags,null,['class'=>'form-control js-example-basic-multiple','multiple'=>'multiple']) !!}
  </div>
  <div class="form-group">
        {!! Form::label('node','添加节点') !!}
        {!! Form::select('node',$nodes,null,['class'=>'form-control js-example-basic-multiple2','multiple'=>'multiple']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('发表',['class'=>'btn btn-success form-control']) !!}
  </div>
{!! Form::close() !!}

@if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif