<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Sign Up</div>
            <div class="card-body">
                <form wire:submit="register">
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model="name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="password_confirmation" wire:model="password_confirmation">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-md-4 col-form-label text-md-end text-start">Gender</label>
                        <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Male" wire:model="gender">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="Female" wire:model="gender">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-md-4 col-form-label text-md-end text-start">Resident</label>
                        <div class="col-md-6">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Indian" wire:model="resident">
                        <label class="form-check-label" for="flexCheckDefault">
                            Indian
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Non-Indian" wire:model="resident">
                        <label class="form-check-label" for="flexCheckChecked">
                            Non-Indian
                        </label>
                        </div>
                    </div>
                    <div class="mt-3"></div>
                    <div class="mb-3 row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Country & State</label>
                        <div class="col-md-3">
                        <select class="form-select" wire:model="selectedCountry" wire:change="updateStates">
                        <option selected>Select Country</option>
                        @foreach ($countrylist as $country)
                            <option value="{{$country}}">{{$country}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="col-md-3">
                        <select class="form-select" wire:model="selectedState">
                        <option selected>Select State</option>
                        @if (!is_null($states))
                        @foreach ($states as $state)
                            <option value="{{$state}}">{{$state}}</option>
                        @endforeach
                        @endif
                        </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="floatingTextarea" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                        <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" wire:model="description" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Description</label>
                        </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <button type="submit" class="col-md-3 offset-md-5 btn btn-primary">
                            Sign Up
                       </button>
                    </div>
                </form>
                <div class="mb-3 row"> 
                    <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
                </div>
            </div>
        </div>
    </div>    
</div>