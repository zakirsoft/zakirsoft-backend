<form wire:submit.prevent="contact_submit">
    @if (session()->has('success')) <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}</div>@endif
    @if ($errors->any()) <div class="alert alert-danger" role="alert"> Please provide required field conditions!</div> @endif

    <div class="form-row">
        <div class="col">
            <input wire:model="name" type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="Enter Your name">
            @error('name')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col">
            <input wire:model="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Please enter a valid email">
            @error('email')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <input wire:model="subject" class="subject form-control @error('subject') is-invalid @enderror" type="text" name="Subjects" placeholder="Subjects">
        @error('subject')<span class="text-danger">{{ $message }}</span> @enderror
    <textarea wire:model="message" id="" cols="30" rows="10" placeholder="Your message" class="@error('message') is-invalid @enderror"></textarea> <br>
        @error('message')<span class="text-danger">{{ $message }}</span> @enderror <br>

    @if ($errors->any())
        <button disabled class="button text-danger" type="submit">SEND MESSAGE <i class="fas fa-ban"></i></button>
    @else
        <button class="submit" type="submit">SEND MESSAGE <i class="fab fa-telegram-plane"></i></button>
    @endif

</form>
