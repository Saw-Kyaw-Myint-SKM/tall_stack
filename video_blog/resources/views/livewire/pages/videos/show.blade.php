<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Blog;

new #[Layout('layouts.app')] class extends Component 
{
    public $blog;
    public function mount($id)
    {
        $this->blog = Blog::findOrFail($id);
    }
};
?>

<div class="max-w-4xl mx-auto">
    <video id="my-video" class="video-js  w-full h-auto" controls preload="auto" poster="{{ asset($blog->poster) }}" data-setup="{}"
        controls>
        <source src="{{ asset($blog->video) }}" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video>
</div>
