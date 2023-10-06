{{-- x-app-layout flex, flex-col--}}
<x-app-layout>
    <div id="quizon" class="flex flex-col items-center text-xl w-4/5 border-2 border-black py-12 px-12 bg-blue-100">

        {{-- caption --}}
        <h1 class="text-3xl font-bold underline underline-offset-4 mb-8">
            QuizON
        </h1>

        {{-- details --}}
        <div id="details" class="flex w-full justify-between space-x-2">
            <div class="flex flex-col">
                <p class="border border-black bg-gray-50 px-2 py-1 text-sm font-semibold">Course: <span class="font-bold">Web Engineering</span></p>
                <p class="border-x border-black bg-gray-50 px-2 py-1 text-sm font-semibold">Question By: <span class="font-bold">Inanc Gunalp</span></p>
            </div>
            {{-- fake pagination links --}}
            <div class="flex flex-col justify-end">
                <div class="flex justify-between border-t border-x border-black bg-white">
                    <div class="p-1 px-4 text-sm font-bold cursor-pointer border-r border-black hover:bg-gray-100"> &lt; </div>
                    <div class="p-1 px-4 text-sm font-bold cursor-pointer border-r border-black hover:bg-gray-100"> 1 </div>
                    <div class="p-1 px-4 text-sm font-bold border-r border-black"> ... </div>
                    <div class="p-1 px-4 text-sm font-bold cursor-pointer border-r border-black hover:bg-gray-100"> 10 </div>
                    <div class="p-1 px-4 text-sm font-bold cursor-pointer hover:bg-gray-100"> &gt; </div>
                </div>
            </div>
        </div>

        {{-- question --}}
        {{--      --}}
        <div class="w-full border border-black rounded-b-lg bg-gray-50">
            <div class="my-6 mx-10 min-h-[160px] bg-no-repeat bg-center bg-contain" 
            style="background-image:linear-gradient(rgba(249,250,251, 0.960), rgba(249,250,251, 0.960)),url(/images/question-mark.svg)">
                <p class="text-sm font-semibold leading-loose tracking-wide">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum officia distinctio officiis a hic quod, sint tempora dolore qui esse mollitia ipsum, autem nisi omnis. Rerum, id culpa. Est, dolorem!lorem*2= Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod iure libero recusandae ipsum? Magnam soluta placeat aliquam et voluptate nobis, hic cupiditate perferendis accusantium, porro ducimus praesentium modi, reiciendis earum.
                    Debitis explicabo soluta, dolorum non excepturi quaerat eius, officiis iure velit impedit fugit sit qui dicta vel quia aperiam minima pariatur deserunt! Molestias voluptatibus excepturi distinctio perferendis, nulla ad soluta?
                    Eos quasi, voluptate dolorem nemo libero facere perspiciatis suscipit magnam iste veritatis iusto, ratione maiores aut aspernatur amet, consequatur alias enim cupiditate odio iure impedit minus a? Expedita, beatae recusandae?
                    Tenetur dolore minus consequatur consectetur, doloremque eos possimus architecto dignissimos repudiandae nihil. Perferendis magnam, iusto harum nostrum quos eum fugiat quo consequatur magni vitae dolorem possimus nisi in esse voluptatum.
                </p>
            </div>
        </div>

        {{-- answers --}}
        <form action="#" method="POST" class="flex flex-col items-center justify-center">
            <div id="answers" 
            class="flex flex-col justify-center border-x border-b rounded-b-lg border-black bg-gray-50 w-11/12 space-y-8 py-8 px-8 text-sm font-semibold leading-loose tracking-wide">
                {{-- answer-a --}}
                <div class="flex items-center space-x-2">
                    <input name="radio-answer" id="answer-a" type="radio" class="cursor-pointer">
                    <label for="answer-a" style="max-height: 150px;"
                        class="w-full p-1 px-4 bg-gray-50 border border-black rounded-lg overflow-auto overscroll-contain cursor-pointer hover:bg-gray-100">
                            <p>
                                19 years
                            </p>
                    </label>
                </div>
                {{-- answer-b --}}
                <div class="flex items-center space-x-2">
                    <input name="radio-answer" id="answer-b" type="radio" class="cursor-pointer">
                    <label for="answer-b" style="max-height: 150px;" 
                        class="w-full p-1 px-4 bg-gray-50 border border-black rounded-lg overflow-auto overscroll-contain cursor-pointer hover:bg-gray-100">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum repellendus doloribus eveniet illo architecto? Error praesentium voluptates sequi nostrum, voluptas voluptatum omnis fuga magnam aperiam fugiat odit placeat. Quidem, amet?
                    </p>
                    </label>
                </div>
                {{-- answer-c --}}
                <div class="flex items-center space-x-2">
                    <input name="radio-answer" id="answer-c" type="radio" class="cursor-pointer">
                    <label class="w-full p-1 px-4 bg-gray-50 border border-black rounded-lg overflow-auto overscroll-contain cursor-pointer hover:bg-gray-100" style="max-height: 150px;" for="answer-c">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis recusandae tenetur voluptatem quam officia distinctio odio repellat nemo, modi delectus iusto dolorum architecto asperiores, obcaecati, quae cumque aperiam ut odit.
                        </p>
                    </label>
                </div>
                {{-- answer-d --}}
                <div class="flex items-center space-x-2">
                    <input  name="radio-answer" id="answer-d" type="radio" class="cursor-pointer">
                    <label class="w-full p-1 px-4 bg-gray-50 border border-black rounded-lg overflow-auto overscroll-contain cursor-pointer hover:bg-gray-100" style="max-height: 120px;" for="answer-d">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, deleniti fugit eum, voluptate eaque ipsam possimus maxime quibusdam accusantium, officia perspiciatis autem doloribus nulla? Architecto deleniti libero eius consequuntur saepe.
                            Modi veritatis fuga in repudiandae! Rem cumque harum cum fugit nulla autem nam consequatur adipisci voluptatum laudantium excepturi expedita, corporis quis, provident neque commodi temporibus explicabo aut quam ullam. Rem.
                            Vero nisi laudantium magnam possimus nam maxime, totam explicabo, accusantium aliquam nihil quod. Animi voluptas veniam quis, delectus ipsum assumenda, fuga, dolorem sint dolores accusantium perferendis saepe aliquam nisi magni.
                            Ducimus, animi voluptate eaque earum corporis vero nulla quo placeat magni minima voluptatibus iste! Adipisci iure quod, voluptates et ipsa, corrupti molestias reprehenderit, delectus maiores commodi ullam aperiam rem esse!
                            Veritatis temporibus voluptas quaerat neque necessitatibus iste voluptatum recusandae deserunt asperiores excepturi, nulla voluptatem nihil corporis alias soluta sint consequuntur exercitationem harum. Necessitatibus tempore rerum illo ad voluptatibus quod nihil?
                            Porro cumque recusandae aliquam quasi ipsum atque, ipsam accusantium, nostrum fugit adipisci temporibus dicta aut natus exercitationem mollitia. Laborum ipsam facilis eum possimus totam aperiam esse saepe atque, veniam sint.
                            Placeat facere natus amet, nobis ipsa, impedit quaerat sed eos, ipsam hic fugiat aliquid! Ea reiciendis ratione eum dolorem, blanditiis omnis voluptate illum. Architecto blanditiis, excepturi nemo magni temporibus iusto.
                            Asperiores ea laborum exercitationem ipsa quis commodi doloremque, repellat qui ex soluta quidem nemo praesentium necessitatibus vel assumenda quod, sint ratione esse? Vero odit laboriosam recusandae sunt voluptatum vitae hic?
                            Perspiciatis facilis odit minus, aliquid nisi porro eum obcaecati harum impedit eaque sed doloremque, cupiditate vero eligendi explicabo est quos fugiat. Eligendi, facere possimus. At ea ipsum id similique! Beatae.
                            Facilis labore, doloremque illo blanditiis fugit ducimus perferendis nesciunt vitae corrupti hic obcaecati eum consectetur veritatis minus at deserunt distinctio ea maxime nemo praesentium reprehenderit optio dolores nam tenetur! Minima.
                        </p>
                    </label>
                </div>
            </div>
            <div class="w-11/12 flex justify-between text-sm font-bold overflow-hidden mx-6"> 
                <div>
                    <input type="button" value="Report Question" class="bg-red-400 hover:bg-red-500 p-1 px-2 border-x border-b border-black rounded-b-lg cursor-pointer ml-2">
                </div>
                
                <div class="flex space-x-1 mr-2">
                    <div class="flex flex-col">
                        <input type="button" onclick="dropdown_toggle('notify-repeaton')" value="Add Question to RepeatON" class="bg-indigo-300 hover:bg-indigo-400 p-1 px-2 border-x border-b border-black rounded-b-lg cursor-pointer">
                        <p id="notify-repeaton" class="absolute hidden text-red-600 text-xs font-bold mt-8 leading-loose tracking-wide">
                            Question can be found at RepeatON
                        </p>
                    </div>

                    {{-- When Submit Answer
                        If the answer is correct, bg of the choice will change to green!
                        Else it will change to red.
                        User is able to see the correct answer in Question Bank when question is out of the QuizON  --}}
                    <div>
                        <input type="submit" value="Submit Answer" class="bg-green-400 hover:bg-green-500 p-1 px-2 border-x border-b border-black rounded-b-lg cursor-pointer">
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>

<script>
     function dropdown_toggle(id){
        _dropdown = document.getElementById(id);
        _dropdown.classList.toggle('hidden');
        if(id == 'dropdown-chat' ){
            _dropdown.scrollIntoView({behavior: "smooth", block: "center"});
        }
    }
</script>