<div class="newpost" x-data="{ modelOpen: false }">
  <img class="mt-1 mx-1 h-9 w-9 rounded-full" src="{{Auth::user()->profile_photo_path}}" alt="">
  <input class="newpost__input max-h-10" @click="modelOpen =!modelOpen" placeholder="Nueva Publicación ..." id="btnModal">
  @include('layouts.modal-new-post')
    <label class="text-xs p-1 my-auto hidden justify-end sm:block">Debate</label>
    <button class="bg-blue-600 rounded h-6 w-7 my-auto p-1" @click="modelOpen =!modelOpen" id="btnModal">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-4">
        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
      </svg>
    </button>
</div>