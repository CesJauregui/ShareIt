<div class="inline-flex w-full">
  <img class="post__comment-photo" src="{{ $urlProfile }}" alt="">
  <div class="px-1">
    <span class="text-sm text-gray-400 font-semibold capitalize text-justify">{{ $user }}</span>
    <div x-data="{ show: false }">
      {{ $slot }}
    </div>
  </div>
</div>