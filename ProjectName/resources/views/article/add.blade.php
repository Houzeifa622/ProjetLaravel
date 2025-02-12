<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <!-- component -->
<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
  <div class="container max-w-screen-lg mx-auto">
    <div>
      <h2 class="font-semibold text-xl text-gray-600">Add Arctile</h2>
      <!-- <p class="text-gray-500 mb-6">Form is mobile responsive. Give it a try.</p> -->

      <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600">
            <p class="font-medium text-lg">Personal Details</p>
            <p>Please fill out all the fields.</p>
          </div>

          <form action="ajout" method="post">
          @csrf
          <div class="lg:col-span-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-5">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
              </div>

              <div class="md:col-span-5">
                    <label for="content">Description</label>
                    <div class="w-full border-1 rounded-lg space-y-3">
                        <textarea class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="3" placeholder="This is a textarea placeholder"></textarea>
                    </div>
              </div>

            <div class="md:col-span-3">
                <label for="address">Category</label>
                    <div class="w-full max-w-sm min-w-[200px]">      
                        <div class="relative">
                            <select
                                class="border border-gray-300 bg-gray-50 text-gray-900 text-xs font-medium rounded block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                                <option selected>Select Category</option>
                                <option value="option 1">Category 1</option>
                                <option value="option 2">Category 2</option>
                                <option value="option 3">Category 3</option>
                                <option value="option 4">Category 4</option>
                            </select>
                            
                            <svg class="absolute top-1/2 -translate-y-1/2 right-4 z-50" width="16" height="16"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0002 5.99845L8.00008 9.99862L3.99756 5.99609" stroke="#111827"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="md:col-span-3">
                        <label class="block mt-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Image</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 p-3" id="file_input" type="file">
                    </div>
                </div>

                
            
      
              <div class="md:col-span-5 text-right">
                <div class="inline-flex items-end">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
              </div>

            </div>
          </div>
          </form>
        </div>
      </div>
    </div>

    <a href="https://www.buymeacoffee.com/dgauderman" target="_blank" class="md:absolute bottom-0 right-0 p-4 float-right">
      <img src="https://www.buymeacoffee.com/assets/img/guidelines/logo-mark-3.svg" alt="Buy Me A Coffee" class="transition-all rounded-full w-14 -rotate-45 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
    </a>
  </div>
</div>
</body>
</html>