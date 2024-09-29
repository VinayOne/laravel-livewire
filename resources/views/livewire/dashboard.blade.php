<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                <p>Welcome! <strong>{{ Auth::user()->name }}</strong></p>
                @if($check == true)
                <table class="table table-bordered">
                <tr>
                    <th>S No.</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>GENDER</th>
                    <th>RESIDENT</th>
                    <th>COUNTRY</th>
                    <th>STATE</th>
                    <th>DESCRIPTION</th>
                    <th colspan="2">
                        ACTION
                    </th>
                </tr>
                @foreach ($userlist as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['email']}}</td>
                    <td>{{$item['gender']}}</td>
                    <td>{{$item['resident']}}</td>
                    <td>{{$item['country']}}</td>
                    <td>{{$item['state']}}</td>
                    <td>{{$item['description']}}</td>
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
                    <livewire:Userupdate :s_id="$s_id" :name="$name" :email="$email" :gender="$gender" :resident="$resident" :country="$country" :state="$state" :description="$description" />
                @endif
                
            </div>
        </div>
    </div>    
</div>