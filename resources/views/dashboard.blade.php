<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table class="table table-dark" style="padding: 14px; ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Author</th>
      <th>Title</th>
      <th>Posts</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($posts as $post)
    <tr>
   <td>{{$post->id}}</td>
   <td>{{$post->user->name}}</td>
   <td>{{$post->title}}</td>
   <td>{{$post->body}}</td>
   <td><a href="/editpost/{{$post->id}}" class="btn btn-primary">Edit</a></td>
   <td><a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach 
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- @foreach ($posts as $post)
                    

                    @endforeach -->