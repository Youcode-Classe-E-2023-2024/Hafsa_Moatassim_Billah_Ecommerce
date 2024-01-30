<script src="https://cdn.tailwindcss.com"></script>

<div class="h-screen w-screen bg-gray-300">
    <div class="container h-screen mx-auto flex justify-center items-center p-2 md:p-0">
        <div class="border border-gray-300 p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">

            <form action="{{ route('products.store') }}" method="post" class="grid grid-cols-1 md:grid-cols-1 gap-2">
                <div class="grid grid-cols-3 gap-2 border border-gray-200 p-2 rounded">
                    <div class="flex border rounded bg-gray-300 items-center p-2 ">
                        <input type="text" name="name" placeholder="Product name"
                               class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                    </div>
                    <div class="flex border rounded bg-gray-300 items-center p-2 ">
                        <input type="text" name="description" placeholder="Write a description"
                               class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                    </div>
                    <div class="flex border rounded bg-gray-300 items-center p-2 ">
                        <input type="text" name="price" placeholder="Enter the price"
                               class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                    </div>
                </div>
                <div class="flex justify-center"><button name="submit" class="p-2 border w-1/4 rounded-md bg-gray-800 text-white">Submit</button></div>
            </form>

        </div>
    </div>
</div>
