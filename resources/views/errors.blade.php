@if(count($errors) > 0)

    <div class="alert alert-danger">
        
        <strong>Что-то не так!!</strong>
        
        
        <ul>
            
            @foreach($errors->all() as $errors_val)
            
            <li>{{$errors_val}}</li>
            
            @endforeach
            
        </ul>
        
    </div>

@endif
