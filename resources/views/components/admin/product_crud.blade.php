@props(['products'])

<!-- Modal toggle -->
<button class="block w-48 my-5 mx-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-center" type="button">
    Insert new product <span><i class="fa-solid fa-plus"></i></span>
  </button>

  <!-- Main modal -->
  <div class="hidden">
    <x-form.add-product/>
  </div>
  <div class="my-3">
    <x-admin.operation_table :products="$products"/>
  </div>
