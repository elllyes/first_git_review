
@props(['name','label','value'])

<div class="row mb-3">
  <label for="{{$name}}" class="col-md-4 col-form-label text-md-end">{{$label}}</label>

  <div class="col-md-6">
<select class="form-select form-select-lg" aria-label="Default select example" name = "{{$name}}">


                    @foreach ($countries as $country)
                   
                    
                        @if ($countries->country == "{{$value}}")
                        
                            <option value = {{$countries->country}} selected> {{ucfirst($countries->country)}}</option>

                        @else

                            <option value = {{$countries->country}} > {{ucfirst($countries->country)}}</option>
                                    
                        @endif

                    @endforeach
                 
                   </select>