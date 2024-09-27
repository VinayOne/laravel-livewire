<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                <p>Welcome! {{ Auth::user()->name }}</p>
                @if($check == true)
                <table class="table table-bordered">
                <tr>
                    <th>S No.</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th colspan="2">
                        ACTION
                    </th>
                </tr>
                @foreach ($userlist as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['email']}}</td>
                    <td>
                        <button class="btn btn-primary" wire:click="updateUser({{ $item['id'] }})">Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-danger" wire:click="deleteUser({{ $item['id'] }})">Delete</button>
                    </td>
                </tr>
                @endforeach
                </table>
                @else
                    <livewire:Userupdate : S_id="$s_id" :name="$name" :email="$email" />
                @endif
                
            </div>
        </div>
    </div>    
</div>