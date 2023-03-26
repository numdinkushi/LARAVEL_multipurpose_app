<x-admin-layout>
{{-- {{dd($users)}} --}}
    {{-- @foreach($users as $row)
        <tr>
           <td>{{$row->name}}</td>
           <td>{{$row->email}}</td>
           <td>{{$row->tarih}}</td>
           <td>{{$row->message}}</td>
         </tr>
    @endforeach --}}
    {{-- @livewire('admin.users.list-users', ['users' => $users]) --}}
    <livewire:admin.users.list-users  />
</x-admin-layout>

