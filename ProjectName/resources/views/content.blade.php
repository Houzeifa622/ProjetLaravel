<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>


<main class="flex justify-center gap-5">



<!-- <section class="py-24 relative">
        <div class="w-full max-w-7xl mx-auto px-4 md:px-8"> -->
           
            <!-- <div class="grid grid-cols-12"> -->
                <div class="col-span-12 md:col-span-3 w-80 max-md:max-w-md max-md:mx-auto">
                    

                    <div class="mt-7 box rounded-xl border border-gray-300 bg-white p-6 w-full md:max-w-sm">
                        <div class="flex items-center justify-between w-full pb-3 border-b border-gray-200 mb-7">
                            <p class="font-medium text-base leading-7 text-black ">Filter By</p>
                            <p
                                class="font-medium text-xs text-gray-500 cursor-pointer transition-all duration-500 hover:text-indigo-600">
                                RESET</p>
                        </div>


                        

                        <label for="Offer" class="font-medium text-sm leading-6 text-gray-600 mb-1">Category</label>
                        <div class="relative w-full mb-7">
                            <select id="Offer"
                                class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
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

                        <label for="Offer" class="font-medium text-sm leading-6 text-gray-600 mb-1">Auteur</label>
                        <div class="relative w-full mb-7">
                            <select id="Offer"
                                class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                                <option selected>Select Auteur</option>
                                <option value="option 1">Auteur 1</option>
                                <option value="option 2">Auteur 2</option>
                                <option value="option 3">Auteur 3</option>
                                <option value="option 4">Auteur 4</option>
                            </select>
                            <svg class="absolute top-1/2 -translate-y-1/2 right-4 z-50" width="16" height="16"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0002 5.99845L8.00008 9.99862L3.99756 5.99609" stroke="#111827"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <button
                            class="w-full py-2.5 flex items-center justify-center gap-2 rounded-full bg-indigo-600 text-white font-semibold text-xs shadow-sm shadow-transparent transition-all duration-500 hover:bg-indigo-700 hover:shadow-indigo-200  ">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.4987 13.9997L13.1654 12.6663M13.832 7.33301C13.832 10.6467 11.1457 13.333 7.83203 13.333C4.51832 13.333 1.83203 10.6467 1.83203 7.33301C1.83203 4.0193 4.51832 1.33301 7.83203 1.33301C11.1457 1.33301 13.832 4.0193 13.832 7.33301Z"
                                    stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Search
                        </button>
                        
                    </div>
                </div>
            </div>

        </div>
</section>
                                            



















<div>




  <div class="relative flex flex-col mt-7 bg-white shadow-sm border border-slate-200 rounded-lg w-200">



    <div class="relative h-100 m-2.5 overflow-hidden text-white rounded-md">
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80" alt="card-image" />
    </div>
    <div class="p-4">
      <div class="mb-4 rounded-full bg-cyan-600 py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">
        POPULAR
      </div>
      <h6 class="mb-2 text-slate-800 text-xl font-semibold">
        Website Review Check
      </h6>
      <p class="text-slate-600 leading-normal font-light">
        The place is close to Barceloneta Beach and bus stop just 2 min by walk
        and near to &quot;Naviglio&quot; where you can enjoy the main night life in
        Barcelona.
      </p>
    </div>

    <form>
   <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
        <div class="w-full rounded-lg space-y-3">
            <textarea class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="3" placeholder="This is a textarea placeholder"></textarea>
          </div>
       <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600 border-gray-200">
           <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
               Post comment
           </button>
        
       </div>
   </div>
</form>
 
    <div class="flex items-center justify-between p-4">
      <div class="flex items-center">
        <img
          alt="Tania Andrew"
          src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
          class="relative inline-block h-8 w-8 rounded-full"
        />
        <div class="flex flex-col ml-3 text-sm">
          <span class="text-slate-800 font-semibold">Lewis Daniel</span>
          <p>Commentaire</p>
          <span class="text-slate-600">
            January 10, 2024
          </span>
        </div>
      </div>
    </div>

  </div>


  <!-- Deux -->

  <div class="relative flex flex-col mt-7 bg-white shadow-sm border border-slate-200 rounded-lg w-200">



    <div class="relative h-100 m-2.5 overflow-hidden text-white rounded-md">
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80" alt="card-image" />
    </div>
    <div class="p-4">
      <div class="mb-4 rounded-full bg-cyan-600 py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">
        POPULAR
      </div>
      <h6 class="mb-2 text-slate-800 text-xl font-semibold">
        Website Review Check
      </h6>
      <p class="text-slate-600 leading-normal font-light">
        The place is close to Barceloneta Beach and bus stop just 2 min by walk
        and near to &quot;Naviglio&quot; where you can enjoy the main night life in
        Barcelona.
      </p>
    </div>

    <form>
   <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
       <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
           <!-- <label for="comment" class="sr-only">Your comment</label> -->
           <textarea id="comment" rows="4" class="w-full h-12 px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required ></textarea>
       </div>
       <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600 border-gray-200">
           <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
               Post comment
           </button>
        
       </div>
   </div>
</form>
 
    <div class="flex items-center justify-between p-4">
      <div class="flex items-center">
        <img
          alt="Tania Andrew"
          src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
          class="relative inline-block h-8 w-8 rounded-full"
        />
        <div class="flex flex-col ml-3 text-sm">
          <span class="text-slate-800 font-semibold">Lewis Daniel</span>
          <p>Commentaire</p>
          <span class="text-slate-600">
            January 10, 2024
          </span>
        </div>
      </div>
    </div>

  </div>



  <!-- Trois -->

  <div class="relative flex flex-col mt-7 bg-white shadow-sm border border-slate-200 rounded-lg w-200">



    <div class="relative h-100 m-2.5 overflow-hidden text-white rounded-md">
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80" alt="card-image" />
    </div>
    <div class="p-4">
      <div class="mb-4 rounded-full bg-cyan-600 py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">
        POPULAR
      </div>
      <h6 class="mb-2 text-slate-800 text-xl font-semibold">
        Website Review Check
      </h6>
      <p class="text-slate-600 leading-normal font-light">
        The place is close to Barceloneta Beach and bus stop just 2 min by walk
        and near to &quot;Naviglio&quot; where you can enjoy the main night life in
        Barcelona.
      </p>
    </div>

    <form>
   <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
       <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
           <!-- <label for="comment" class="sr-only">Your comment</label> -->
           <textarea id="comment" rows="4" class="w-full h-12 px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required ></textarea>
       </div>
       <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600 border-gray-200">
           <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
               Post comment
           </button>
        
       </div>
   </div>
</form>
 
    <div class="flex items-center justify-between p-4">
      <div class="flex items-center">
        <img
          alt="Tania Andrew"
          src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
          class="relative inline-block h-8 w-8 rounded-full"
        />
        <div class="flex flex-col ml-3 text-sm">
          <span class="text-slate-800 font-semibold">Lewis Daniel</span>
          <p>Commentaire</p>
          <span class="text-slate-600">
            January 10, 2024
          </span>
        </div>
      </div>
    </div>

  </div>

  </div>

  </main>
  <div class="flex just-center">
        <img
          alt="Tania Andrew"
          src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
          class="relative inline-block h-8 w-8 rounded-full"
        />
        <div class="flex flex-col ml-3 text-sm">
          <span class="text-slate-800 font-semibold">Lewis Daniel</span>
          <p>Commentaire</p>
          <span class="text-slate-600">
            January 10, 2024
          </span>
        </div>
    </div>








</body>
</html>