        
        
        <x-form.select name="title" label="Title" type="text" value="{{ old('title',$user->title) }}"/>
        <x-form.inputt2 name="name" label="Name" type="text" value="{{ old('name',$user->name) }}"/>
        <x-form.inputt2 name="last_name" label="Last name" type="text" value="{{ old('last_name',$user->last_name) }}"/>
        <x-form.inputt2 name="email" label="Email" type="email" value="{{ old('email',$user->email) }}"/>