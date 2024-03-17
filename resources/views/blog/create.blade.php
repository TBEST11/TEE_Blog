

@extends('layouts.app')

@section('content')
</div>
@if($errors->any())
<div class="">
    <ul>
        @foreach ($error->all() as $error)
        <li class="w-4/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
            {{$error}}
        </li>
        @endforeach
    </ul>

</div>
@endif

<hr>

@if (session('status'))
     <div class="alert alert-success" role="alert">
         {{ session('status') }}
     </div>
 @endif

  @include('layouts.message')                    
                            
<form method="POST" action="@if(Route::currentRouteName() != 'blog.edit') {{ route('blog.store') }} @else {{ route('blog.update', $blog->id) }} @endif" enctype="multipart/form-data">
     @csrf
                        
     @if(Route::currentRouteName() == 'blog.edit')
         @method('put')
     @endif
    <fieldset>
       <div class="col-md-12">
          <div class="row">
             <div class="col-md-6">
                <label for="">Title</label>
                <input  id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="@if(Route::currentRouteName() != 'blog.edit') {{old('title')}} @else {{ $blog->title}} @endif" required autocomplete="title" autofocus>
                @error('title')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
                <label for="">Attach File</label>
                <input id="image" type="file"  class="form-control @error('image') is-invalid @enderror" name="image" value="@if(Route::currentRouteName() != 'blog.edit') {{ old('image') }} @else {{ $blog->content }} @endif"  autocomplete="image"/>
             </div>
             @error('image')
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                </span>
             @enderror
             <div class="col-md-6">
                <label for="">Content</label>
                <textarea id="content" type="text" rows="5" class="form-control @error('content') is-invalid @enderror" name="content" autocomplete="content">{{ Route::currentRouteName() != 'blog.edit' ? old('content') : $blog->content }}</textarea>
             </div>
          </div>
          @error('content')
                <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                </span>
          @enderror
          <div class="row margin_top_30">
             <div class="col-md-12">
                <div class="center">
                    <button type="submit" class="btn btn-primary" >
                        @if(Route::currentRouteName() != 'comment.edit') 
                        {{ __('Post') }}
                        @else 
                        {{ __('Update') }}
                        @endif
                        </button>
                </div>
             </div>
          </div>
       </div>
    </fieldset>
 </form>
@endsection


