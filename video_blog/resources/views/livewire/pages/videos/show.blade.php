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
    <div id='test'>
        <video id="myvideo" class="video-js vjs-fluid w-full h-auto" controls preload="auto"
            poster="{{ asset($blog->poster) }}" data-setup='{}'>
            <source src="{{ asset($blog->video) }}" type="video/mp4">
        </video>
    </div>
</div>
@assets
    <link href="https://vjs.zencdn.net/8.9.0/video-js.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/video-js-skin.css') }}">
@endassets
