
@props(['name','label', 'value'])
<div class="row mb-3">
        <label for="{{ $name }}" class="col-md-4 col-form-label text-md-end">{{$label}}</label>
            <div class="col-md-6">
        
                <select class="form-select form-select-lg @error('{{$name}}') is-invalid @enderror"  name="{{$name}}" id="{{$name}}" required>
                
                        @php 
                        $titles = array('Select title','Ms','Mr','Mrs');
                        $user_title = "$value";
                        @endphp
                        @foreach ($titles as $title)
                    
                        
                            @if ($title == $user_title)
                            
                                <option value = {{$title}} selected> {{$title}}</option>
                            
                            @else 
                                
                                <option value = {{$title}}> {{$title}}</option>
                               
                            @endif
                        @endforeach

        
                </select>
            </div>
    </div>
    