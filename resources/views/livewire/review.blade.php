<div>
    {{-- Be like water. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <form class="form-contact comment_form" wire:submit.prevent="store">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea
                        class="form-control w-100" wire:model="review" cols="30" rows="9" placeholder="Your Review">
                    </textarea>
                    @error('review') <span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" wire:model="subject" type="text" placeholder="Subject">
                    @error('subject') <span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="col-12">
                @error('rate') <span class="text-danger">{{$message}}</span>@enderror
                <label class="col-2">Rate</label>
                <div class="col-10">
                    <input class="form-control" min="0" max="5" wire:model="rate"  type="range">
                </div>
            </div>
        </div>
        <div class="form-group">
            @auth()
            <button type="submit" class="button button-contactForm btn_1 boxed-btn" value="Save">Send Message</button>
            @else
                <a href="/login" class="button">For Submit Review Please Login</a>
            @endauth
        </div>
    </form>
</div>
