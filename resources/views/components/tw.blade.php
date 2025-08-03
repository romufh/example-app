@props([
    'tweet',
])

<div class="card card-border shadow-none max-w-6xl mx-auto">
  <div class="text-left mt-4 ">
      <a class=" btn btn-text">
            <div>
                {{ $tweet->user->name }}
            </div>
            <div class="avatar ">
                <div class="w-10 h-10 rounded-full">
                    <img src="/storage/{{ $tweet->user->avatar }}" alt="avatar" />
                </div>
            </div>
        </a>
  </div>
    <div class="card-body py-4 px-7">
        <p class="whitespace-pre-wrap">{{ $tweet->content }}</p>

    </div>
   <div class="card-actions p-4 pt-0 flex justify-between items-center">
    
        @if (request()->routeIs('home'))
            <a
                href="{{ route('tweet', $tweet->baseTweet->id) }}" 
                class="btn btn-text btn-square"
            >
                <span class="icon-[tabler--message]"></span>
            </a>
        @else
            <button
                onclick="document.querySelector(`input[name='parent_tweet_id']`).value = {{ $tweet->id }}; document.querySelector(`label[id='content-label']`).innerHTML = `اكتب رد على: {{ mb_strimwidth($tweet->content, 0, 30, '...') }}`"
                class="btn btn-text btn-square"
            >
                <span class="icon-[tabler--message]"></span>
            </button>
        @endif
  
    </div>
</div>
@if (request()->routeIs('tweet'))
    <div class="ms-6 ps-2 space-y-2 border-s-2">
        @foreach ($tweet->childTweets as $childTweet)
            <x-tw :tweet="$childTweet" />
        @endforeach
    </div>
@endif



