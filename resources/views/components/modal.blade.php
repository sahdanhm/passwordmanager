 <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="isOpen">
     <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

     <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
         <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
             <div
                 class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                 <form action="/savepassword" method="POST">
                    @csrf
                     <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                         <div class="sm:flex sm:items-start">
                             <div
                                 class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full {{ $iconbgcolor }} sm:mx-0 sm:size-10">
                                 {{ $icon }}
                             </div>
                             <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full">
                                 <h3 class="text-base font-semibold text-gray-900" id="modal-title">{{ $header }}
                                 </h3>
                                 <div class="mt-2">
                                     {{ $slot }}
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                         <button type="submit"
                             class="inline-flex w-full justify-center rounded-md bg-violet-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-violet-700 sm:ml-3 sm:w-auto focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75">Save</button>
                         <button type="button"
                             class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                             @click="isOpen = !isOpen">Cancel</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 </div>
