<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <ul class="bg-white shadow overflow-hidden sm:rounded-md max-w-sm mx-auto mt-16">
    <li>
        <div class="px-4 py-5 sm:px-6">
            <div class="flex items-center justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Item 1</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Description for Item 1</p>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <p class="text-sm font-medium text-gray-500">Status: <span class="text-green-600">Active</span></p>
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</a>
            </div>
        </div>
    </li>
    <li class="border-t border-gray-200">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex items-center justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Item 2</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Description for Item 2</p>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <p class="text-sm font-medium text-gray-500">Status: <span class="text-red-600">Inactive</span></p>
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</a>
            </div>
        </div>
    </li>
    <li class="border-t border-gray-200">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex items-center justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Item 3</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Description for Item 3</p>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <p class="text-sm font-medium text-gray-500">Status: <span class="text-yellow-600">Pending</span></p>
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</a>
            </div>
        </div>
    </li>
</ul>
</body>
</html>