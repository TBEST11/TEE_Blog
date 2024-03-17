        @extends('layouts.app')

        @section('content')
        
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            @include('layouts.message')                    
                                    
             <form  method="POST" action="@if(Route::currentRouteName() != 'comment.edit') {{ route('comment.store') }} @else {{ route('comment.update', $comment->id) }} @endif">
            @csrf
            
            @if(Route::currentRouteName() == 'comment.edit')
                @method('put')
            @endif
            <fieldset>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <label for="">Fullname</label>
                        <input id="fullname" type="text" placeholder="Fullname" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="@if(Route::currentRouteName() != 'comment.edit') {{old('fullname')}} @else {{ $comment->fullname}} @endif" required autocomplete="fullname" autofocus/>
                        <label for="">Email</label>
                        <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="@if(Route::currentRouteName() != 'comment.edit') {{old('email')}} @else {{ $comment->email}} @endif" required autocomplete="email"  autofocus/>
                     </div>
                     <div class="col-md-6">
                        <label for="">Comment</label>
                        <textarea id="comment" rows="4" class="form-control @error('comment') is-invalid @enderror" name="comment" value="@if(Route::currentRouteName() != 'comment.edit') {{old('comment')}} @else {{ $comment->comment }} @endif" required autocomplete="comment" autofocus placeholder="Comment"></textarea>
                     </div>
                  </div>
                  @error('comment')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                  @enderror
                  <div class="row margin_top_30">
                     <div class="col-md-12">
                        <div class="center">
                            <button type="submit" class="btn btn-primary" >
                                @if(Route::currentRouteName() != 'comment.edit') 
                                {{ __('Save') }}
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
        