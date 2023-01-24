<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
<div class="container">
    <div class="row">
        <div class="form">
            <h1 class="mt-2 mb-2">Edit Post</h1>
            <form action="" method="POST">
            @csrf
            @method('PUT')
            <input type="text" id="title" name="title" class="form-control mt-3 mb-3" placeholder="Enter the title" value="{{$post->title}}" required>
            <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="body" name="body" style="height: 100px">{{$post->body}}</textarea>
  <label for="floatingTextarea2"></label>
</div>
            <button type="submit" class="mt-2 btn bg-black text-white"> Update Post</button>
            </form>
            @if(session()->has('status'))
           <div class="mt-5 shadow bg-purple-500 text-white font-bold py-2 px-4 rounded"> {{session('status')}}</div>
            @endif
        </div>
    </div>
</div>

</x-app-layout>