<div id="search_div">
    <form wire:submit.prevent="search" action="" id="search_form">
        <button type="submit" name="search_button" id="search_button"><i class="fas fa-search fa-2x"></i></button>
        <input wire:model.defer="search_input" placeholder="Search..." type="text" name="search_input" id="search_input">
    </form> 
    <div id="search_result">
        @foreach ($searchResults as $result)
            <div class='search_single_result'>
                <div class='search_image_div'>
                    <img src={{ $result['image_url'] }}>
                </div>
                <div class='search_single_text'>
                    <div class='search_text'>
                        {{ $result['name'] }}
                    </div>
                    <div class=''>
                        
                    </div>
                </div>
                <div class='search_add_btn_div'>
                    <button type='submit' onClick=''><i class='fas fa-plus-circle fa-2x'></i></button>
                </div>
            </div>
        @endforeach
    </div>
</div>
