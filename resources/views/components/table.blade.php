<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                @foreach ($headers as $header)
                    <th scope="col" class="px-6 py-3">
                        {{ $header }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    @foreach ($record as $key => $value)
                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                            {{ $value }}
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
