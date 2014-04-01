{{ Form::model('tasks', array('action' => 'TasksController@store')) }}
 
      {{ Form::label('title', 'Title') }}
      {{ Form::text('title', null) }}
    
    
    {{ Form::submit('OK') }}
  
{{ Form::close() }}