<x-app-layout>
    <div 
        class="relative w-2/3 border-2 border-black bg-gray-50 min-h-fit bg-cover">
        <img class="opacity-5" src="/images/logo1.svg" alt="logo-1">
        <div class="absolute top-1/2 left-2/4 -translate-x-1/2 -translate-y-1/2 w-full h-full overflow-auto overscroll-contain p-1 px-10 text-md font-semibold leading-loose tracking-wide">
            <p class="font-bold underline text-3xl text-center my-2">What's New?</p>
            <p class="px-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste alias sint quisquam quae nesciunt? Suscipit distinctio fugiat ab. Id itaque doloribus accusantium voluptates possimus laborum dolores deserunt consequatur incidunt quaerat.
                Impedit quos, non eos consequatur laudantium consequuntur natus, incidunt hic accusantium ducimus esse deserunt fuga perferendis assumenda porro aliquam, nulla dolores reprehenderit quidem debitis quo accusamus nobis sequi! Eaque, mollitia!
                Possimus sapiente repudiandae quod rem sed libero aliquam iste. Ea officiis consequatur et libero odio officia dolore, quas nostrum accusantium est eius aliquam perspiciatis dolores molestias, eligendi quo eum! Dicta.
                Enim temporibus autem voluptatibus sunt delectus illo quasi harum, cumque quia maiores! Molestiae officia facilis a odit adipisci ea voluptates. Placeat dolorum sequi aliquid modi amet quos corrupti! Ipsa, natus.
            </p>
        </div>
    </div>
    <div class="border-2 border-black w-5/6 overflow-auto overscroll-contain h-80 bg-white">
        <table class="w-full">
            <thead class="bg-blue-200 sticky top-0">
                <tr class="text-md">
                    <th scope="col" class="text-gray-900 px-6 py-4 text-left pr-10">
                        #
                    </th>
                    <th scope="col" class="text-gray-900 px-6 py-4 text-left">
                        <div class="flex flex-col">
                            Study Group Name
                        </div>
                    </th>
                    <th scope="col" class="text-gray-900 px-6 py-4 text-left">
                        Average Score
                    </th>
                    <th scope="col" class="text-gray-900 px-6 py-4 text-left">
                        Highest Score
                    </th>
                    <th scope="col" class="text-gray-900  py-4 text-left">
                        Lowest Score
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studygroups as $studygroup)
                    <tr class="{{ $loop->iteration % 2 == 1 ? 'bg-gray-100' : 'bg-white'}}">
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">
                            1
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4">
                            <a href="/studygroups/{{$studygroup->slug}}" class="font-bold hover:underline">
                            {{$studygroup->name}}
                            </a>
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4">
                            2022
                        </td>
                        <td class="text-sm text-gray-900 px-6 py-4">
                            3000
                        </td>
                        <td class="text-sm text-gray-900 py-4">
                            1300
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
